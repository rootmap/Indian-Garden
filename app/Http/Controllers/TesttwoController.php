<?php

namespace App\Http\Controllers;

use App\TestTwo;
use App\AdminLog;
use Illuminate\Http\Request;

class TestTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Two";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestTwo::all();
        return view('admin.pages.testtwo.testtwo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.testtwo.testtwo_create');
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
                
                'name'=>'required',
                'gender'=>'required',
                'logo'=>'required',
        ]);

        

        $filename_testtwo='';
        if ($request->hasFile('logo')) {
            $img_testtwo = $request->file('logo');
            $upload_testtwo = 'upload/testtwo';
            $filename_testtwo = time() . '.' . $img_testtwo->getClientOriginalExtension();
            $img_testtwo->move($upload_testtwo, $filename_testtwo);
        }

                
        $tab=new TestTwo();
        
        $tab->name=$request->name;
        $tab->gender=$request->gender;
        $tab->logo=$filename_testtwo;
        $tab->save();

        return redirect('testtwo')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'gender'=>'required',
                'logo'=>'required',
        ]);

        $tab=new TestTwo();
        
        $tab->name=$request->name;
        $tab->gender=$request->gender;
        $tab->logo=$filename_testtwo;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestTwo  $testtwo
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
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
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
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

    
    public function TestTwoQuery($request)
    {
        $TestTwo_data=TestTwo::orderBy('id','DESC')->get();

        return $TestTwo_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Name','Gender','Logo','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestTwoQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->name,$voi->gender,$voi->logo,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Two Report',
            'report_title'=>'Test Two Report',
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
                            <th class='text-center' style='font-size:12px;' >Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Gender</th>
                        
                            <th class='text-center' style='font-size:12px;' >Logo</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestTwoQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->gender."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->logo."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test Two Report',$html);


    }
    public function show(TestTwo $testtwo)
    {
        
        $tab=TestTwo::all();return view('admin.pages.testtwo.testtwo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestTwo  $testtwo
     * @return \Illuminate\Http\Response
     */
    public function edit(TestTwo $testtwo,$id=0)
    {
        $tab=TestTwo::find($id);      
        return view('admin.pages.testtwo.testtwo_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestTwo  $testtwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestTwo $testtwo,$id=0)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'gender'=>'required',
        ]);
        

        $filename_testtwo=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_testtwo = $request->file('logo');
            $upload_testtwo = 'upload/testtwo';
            $filename_testtwo = time() . '.' . $img_testtwo->getClientOriginalExtension();
            $img_testtwo->move($upload_testtwo, $filename_testtwo);
        }

                
        $tab=TestTwo::find($id);
        
        $tab->name=$request->name;
        $tab->gender=$request->gender;
        $tab->logo=$filename_testtwo;
        $tab->save();

        return redirect('testtwo')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestTwo  $testtwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestTwo $testtwo,$id=0)
    {
        $tab=TestTwo::find($id);
        $tab->delete();
        return redirect('testtwo')->with('status','Deleted Successfully !');}
}
