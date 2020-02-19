<?php

namespace App\Http\Controllers;

use App\TestFour;
use App\AdminLog;
use Illuminate\Http\Request;

class TestFourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Four";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestFour::all();
        return view('admin.pages.testfour.testfour_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.testfour.testfour_create');
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
                
                'category'=>'required',
                'logo'=>'required',
                'donwload_files'=>'required',
        ]);

        

        $filename_testfour='';
        if ($request->hasFile('logo')) {
            $img_testfour = $request->file('logo');
            $upload_testfour = 'upload/testfour';
            $filename_testfour = time() . '.' . $img_testfour->getClientOriginalExtension();
            $img_testfour->move($upload_testfour, $filename_testfour);
        }

                

        $filename_testfour='';
        if ($request->hasFile('donwload_files')) {
            $img_testfour = $request->file('donwload_files');
            $upload_testfour = 'upload/testfour';
            $filename_testfour = time() . '.' . $img_testfour->getClientOriginalExtension();
            $img_testfour->move($upload_testfour, $filename_testfour);
        }

                
        $tab=new TestFour();
        
        $tab->category=$request->category;
        $tab->logo=$filename_testfour;
        $tab->donwload_files=$filename_testfour;
        $tab->save();

        return redirect('testfour')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'category'=>'required',
                'logo'=>'required',
                'donwload_files'=>'required',
        ]);

        $tab=new TestFour();
        
        $tab->category=$request->category;
        $tab->logo=$filename_testfour;
        $tab->donwload_files=$filename_testfour;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestFour  $testfour
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('category','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('donwload_files','LIKE','%'.$search.'%');
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
                            $query->orWhere('category','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('donwload_files','LIKE','%'.$search.'%');
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

    
    public function TestFourQuery($request)
    {
        $TestFour_data=TestFour::orderBy('id','DESC')->get();

        return $TestFour_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Category','Logo','Donwload Files','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestFourQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category,$voi->logo,$voi->donwload_files,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Four Report',
            'report_title'=>'Test Four Report',
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
                            <th class='text-center' style='font-size:12px;' >Category</th>
                        
                            <th class='text-center' style='font-size:12px;' >Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Donwload Files</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestFourQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->donwload_files."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test Four Report',$html);


    }
    public function show(TestFour $testfour)
    {
        
        $tab=TestFour::all();return view('admin.pages.testfour.testfour_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestFour  $testfour
     * @return \Illuminate\Http\Response
     */
    public function edit(TestFour $testfour,$id=0)
    {
        $tab=TestFour::find($id);      
        return view('admin.pages.testfour.testfour_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestFour  $testfour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestFour $testfour,$id=0)
    {
        $this->validate($request,[
                
                'category'=>'required',
        ]);
        

        $filename_testfour=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_testfour = $request->file('logo');
            $upload_testfour = 'upload/testfour';
            $filename_testfour = time() . '.' . $img_testfour->getClientOriginalExtension();
            $img_testfour->move($upload_testfour, $filename_testfour);
        }

                

        $filename_testfour=$request->ex_donwload_files;
        if ($request->hasFile('donwload_files')) {
            $img_testfour = $request->file('donwload_files');
            $upload_testfour = 'upload/testfour';
            $filename_testfour = time() . '.' . $img_testfour->getClientOriginalExtension();
            $img_testfour->move($upload_testfour, $filename_testfour);
        }

                
        $tab=TestFour::find($id);
        
        $tab->category=$request->category;
        $tab->logo=$filename_testfour;
        $tab->donwload_files=$filename_testfour;
        $tab->save();

        return redirect('testfour')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestFour  $testfour
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestFour $testfour,$id=0)
    {
        $tab=TestFour::find($id);
        $tab->delete();
        return redirect('testfour')->with('status','Deleted Successfully !');}
}
