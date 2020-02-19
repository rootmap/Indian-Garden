<?php

namespace App\Http\Controllers;

use App\TestFive;
use App\AdminLog;
use Illuminate\Http\Request;

class TestFiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Five";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestFive::all();
        return view('admin.pages.testfive.testfive_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.testfive.testfive_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                
                'gender'=>'required',
                'module_status'=>'required',
                'logo'=>'required',
                'download_files'=>'required',
        ]);

        

        $filename_testfive='';
        if ($request->hasFile('logo')) {
            $img_testfive = $request->file('logo');
            $upload_testfive = 'upload/testfive';
            $filename_testfive = time() . '.' . $img_testfive->getClientOriginalExtension();
            $img_testfive->move($upload_testfive, $filename_testfive);
        }

                

        $filename_testfive='';
        if ($request->hasFile('download_files')) {
            $img_testfive = $request->file('download_files');
            $upload_testfive = 'upload/testfive';
            $filename_testfive = time() . '.' . $img_testfive->getClientOriginalExtension();
            $img_testfive->move($upload_testfive, $filename_testfive);
        }

                
        $tab=new TestFive();
        
        $tab->gender=$request->gender;
        $tab->module_status=$request->module_status;
        $tab->logo=$filename_testfive;
        $tab->download_files=$filename_testfive;
        $tab->save();

        return redirect('testfive')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'gender'=>'required',
                'module_status'=>'required',
                'logo'=>'required',
                'download_files'=>'required',
        ]);

        $tab=new TestFive();
        
        $tab->gender=$request->gender;
        $tab->module_status=$request->module_status;
        $tab->logo=$filename_testfive;
        $tab->download_files=$filename_testfive;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestFive  $testfive
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('download_files','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->count();
        return $tab;
    }


    private function methodToGetMembers($start, $length,$search=''){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('download_files','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->skip($start)->take($length)->get();
        return $tab;
    }

    public function datatable(Request $request){

        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');

        $search = (isset($search['value']))? $search['value'] : '';

        $total_members = $this->methodToGetMembersCount($search); // get your total no of data;
        $members = $this->methodToGetMembers($start, $length,$search); //supply start and length of the table data

        $data = array(
            'draw' => $draw,
            'recordsTotal' => $total_members,
            'recordsFiltered' => $total_members,
            'data' => $members,
        );

        echo json_encode($data);

    }

    
    public function TestFiveQuery($request)
    {
        $TestFive_data=TestFive::orderBy('id','DESC')->get();

        return $TestFive_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Gender','Module Status','Logo','download files','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestFiveQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->gender,$voi->module_status,$voi->logo,$voi->download_files,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Five Report',
            'report_title'=>'Test Five Report',
            'report_description'=>'Report Genarated : '.$dataDateTimeIns,
            'data'=>$data
        );

        $this->sdc->ExcelLayout($excelArray);
        
    }

    public function ExportPDF(Request $request)
    {

        $html="<table class='table table-bordered' style='width:100%;'>
                <thead>
                <tr>
                <th class='text-center' style='font-size:12px;'>ID</th>
                            <th class='text-center' style='font-size:12px;' >Gender</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                            <th class='text-center' style='font-size:12px;' >Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >download files</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestFiveQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->gender."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->download_files."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test Five Report',$html);


    }
    public function show(TestFive $testfive)
    {
        
        $tab=TestFive::all();return view('admin.pages.testfive.testfive_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestFive  $testfive
     * @return \Illuminate\Http\Response
     */
    public function edit(TestFive $testfive,$id=0)
    {
        $tab=TestFive::find($id);      
        return view('admin.pages.testfive.testfive_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestFive  $testfive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestFive $testfive,$id=0)
    {
        $this->validate($request,[
                
                'gender'=>'required',
                'module_status'=>'required',
        ]);
        

        $filename_testfive=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_testfive = $request->file('logo');
            $upload_testfive = 'upload/testfive';
            $filename_testfive = time() . '.' . $img_testfive->getClientOriginalExtension();
            $img_testfive->move($upload_testfive, $filename_testfive);
        }

                

        $filename_testfive=$request->ex_download_files;
        if ($request->hasFile('download_files')) {
            $img_testfive = $request->file('download_files');
            $upload_testfive = 'upload/testfive';
            $filename_testfive = time() . '.' . $img_testfive->getClientOriginalExtension();
            $img_testfive->move($upload_testfive, $filename_testfive);
        }

                
        $tab=TestFive::find($id);
        
        $tab->gender=$request->gender;
        $tab->module_status=$request->module_status;
        $tab->logo=$filename_testfive;
        $tab->download_files=$filename_testfive;
        $tab->save();

        return redirect('testfive')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestFive  $testfive
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestFive $testfive,$id=0)
    {
        $tab=TestFive::find($id);
        $tab->delete();
        return redirect('testfive')->with('status','Deleted Successfully !');}
}
