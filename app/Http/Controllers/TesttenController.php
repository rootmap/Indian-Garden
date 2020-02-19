<?php

namespace App\Http\Controllers;

use App\TestTen;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Category;
                

class TestTenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Ten";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestTen::all();
        return view('admin.pages.testten.testten_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Category=Category::all();           
        return view('admin.pages.testten.testten_create',['dataRow_Category'=>$tab_Category]);
    }

    private function SystemAdminLog($module_name='',$action='',$details){
        $tab=new AdminLog();
        $tab->module_name=$module_name;
        $tab->action=$action;
        $tab->details=$details;
        $tab->admin_id=$this->sdc->admin_id();
        $tab->admin_name=$this->sdc->UserName();
        $tab->save();
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
                'gender'=>'required',
        ]);

        
        $tab_0_Category=Category::where('id',$request->category)->first();
        $category_0_Category=$tab_0_Category->name;
        $tab=new TestTen();
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->gender=$request->gender;
        $tab->save();

        return redirect('testten')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'category'=>'required',
                'gender'=>'required',
        ]);

        $tab=new TestTen();
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->gender=$request->gender;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestTen  $testten
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('category','LIKE','%'.$search.'%');
                            $query->orWhere('gender','LIKE','%'.$search.'%');
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
                            $query->orWhere('gender','LIKE','%'.$search.'%');
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

    
    public function TestTenQuery($request)
    {
        $TestTen_data=TestTen::orderBy('id','DESC')->get();

        return $TestTen_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Category','Gender','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestTenQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category,$voi->gender,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Ten Report',
            'report_title'=>'Test Ten Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Gender</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestTenQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->gender."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test Ten Report',$html);


    }
    public function show(TestTen $testten)
    {
        
        $tab=TestTen::all();return view('admin.pages.testten.testten_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestTen  $testten
     * @return \Illuminate\Http\Response
     */
    public function edit(TestTen $testten,$id=0)
    {
        $tab=TestTen::find($id); 
        $tab_Category=Category::all();     
        return view('admin.pages.testten.testten_edit',['dataRow_Category'=>$tab_Category,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestTen  $testten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestTen $testten,$id=0)
    {
        $this->validate($request,[
                
                'category'=>'required',
                'gender'=>'required',
        ]);
        
        $tab_0_Category=Category::where('id',$request->category)->first();
        $category_0_Category=$tab_0_Category->name;
        $tab=TestTen::find($id);
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->gender=$request->gender;
        $tab->save();

        return redirect('testten')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestTen  $testten
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestTen $testten,$id=0)
    {
        $tab=TestTen::find($id);
        $tab->delete();
        return redirect('testten')->with('status','Deleted Successfully !');}
}
