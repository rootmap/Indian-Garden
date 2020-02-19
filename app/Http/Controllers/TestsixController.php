<?php

namespace App\Http\Controllers;

use App\TestSix;
use App\AdminLog;
use Illuminate\Http\Request;

class TestSixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Six";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestSix::all();
        return view('admin.pages.testsix.testsix_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.testsix.testsix_create');
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

        

        $filename_testsix='';
        if ($request->hasFile('logo')) {
            $img_testsix = $request->file('logo');
            $upload_testsix = 'upload/testsix';
            $filename_testsix = time() . '.' . $img_testsix->getClientOriginalExtension();
            $img_testsix->move($upload_testsix, $filename_testsix);
        }

                

        $filename_testsix='';
        if ($request->hasFile('download_files')) {
            $img_testsix = $request->file('download_files');
            $upload_testsix = 'upload/testsix';
            $filename_testsix = time() . '.' . $img_testsix->getClientOriginalExtension();
            $img_testsix->move($upload_testsix, $filename_testsix);
        }

                
        $tab=new TestSix();
        
        $tab->gender=$request->gender;
        $tab->module_status=$request->module_status;
        $tab->logo=$filename_testsix;
        $tab->download_files=$filename_testsix;
        $tab->save();

        return redirect('testsix')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'gender'=>'required',
                'module_status'=>'required',
                'logo'=>'required',
                'download_files'=>'required',
        ]);

        $tab=new TestSix();
        
        $tab->gender=$request->gender;
        $tab->module_status=$request->module_status;
        $tab->logo=$filename_testsix;
        $tab->download_files=$filename_testsix;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestSix  $testsix
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

    
    public function TestSixQuery($request)
    {
        $TestSix_data=TestSix::orderBy('id','DESC')->get();

        return $TestSix_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Gender','Module Status','Logo','Download Files','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestSixQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->gender,$voi->module_status,$voi->logo,$voi->download_files,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Six Report',
            'report_title'=>'Test Six Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Download Files</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestSixQuery($request);
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

                $this->sdc->PDFLayout('Test Six Report',$html);


    }
    public function show(TestSix $testsix)
    {
        
        $tab=TestSix::all();return view('admin.pages.testsix.testsix_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestSix  $testsix
     * @return \Illuminate\Http\Response
     */
    public function edit(TestSix $testsix,$id=0)
    {
        $tab=TestSix::find($id);      
        return view('admin.pages.testsix.testsix_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestSix  $testsix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestSix $testsix,$id=0)
    {
        $this->validate($request,[
                
                'gender'=>'required',
                'module_status'=>'required',
        ]);
        

        $filename_testsix=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_testsix = $request->file('logo');
            $upload_testsix = 'upload/testsix';
            $filename_testsix = time() . '.' . $img_testsix->getClientOriginalExtension();
            $img_testsix->move($upload_testsix, $filename_testsix);
        }

                

        $filename_testsix=$request->ex_download_files;
        if ($request->hasFile('download_files')) {
            $img_testsix = $request->file('download_files');
            $upload_testsix = 'upload/testsix';
            $filename_testsix = time() . '.' . $img_testsix->getClientOriginalExtension();
            $img_testsix->move($upload_testsix, $filename_testsix);
        }

                
        $tab=TestSix::find($id);
        
        $tab->gender=$request->gender;
        $tab->module_status=$request->module_status;
        $tab->logo=$filename_testsix;
        $tab->download_files=$filename_testsix;
        $tab->save();

        return redirect('testsix')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestSix  $testsix
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestSix $testsix,$id=0)
    {
        $tab=TestSix::find($id);
        $tab->delete();
        return redirect('testsix')->with('status','Deleted Successfully !');}
}
