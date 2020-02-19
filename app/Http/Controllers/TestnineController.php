<?php

namespace App\Http\Controllers;

use App\TestNine;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Category;
                

class TestNineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Nine";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestNine::all();
        return view('admin.pages.testnine.testnine_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Category=Category::all();           
        return view('admin.pages.testnine.testnine_create',['dataRow_Category'=>$tab_Category]);
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
        ]);

        
        $tab_0_Category=Category::where('id',$request->category)->first();
        $category_0_Category=$tab_0_Category->name;
        $tab=new TestNine();
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->save();

        return redirect('testnine')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'category'=>'required',
        ]);

        $tab=new TestNine();
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestNine  $testnine
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('category','LIKE','%'.$search.'%');
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

    
    public function TestNineQuery($request)
    {
        $TestNine_data=TestNine::orderBy('id','DESC')->get();

        return $TestNine_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Category','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestNineQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Nine Report',
            'report_title'=>'Test Nine Report',
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
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestNineQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test Nine Report',$html);


    }
    public function show(TestNine $testnine)
    {
        
        $tab=TestNine::all();return view('admin.pages.testnine.testnine_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestNine  $testnine
     * @return \Illuminate\Http\Response
     */
    public function edit(TestNine $testnine,$id=0)
    {
        $tab=TestNine::find($id); 
        $tab_Category=Category::all();     
        return view('admin.pages.testnine.testnine_edit',['dataRow_Category'=>$tab_Category,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestNine  $testnine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestNine $testnine,$id=0)
    {
        $this->validate($request,[
                
                'category'=>'required',
        ]);
        
        $tab_0_Category=Category::where('id',$request->category)->first();
        $category_0_Category=$tab_0_Category->name;
        $tab=TestNine::find($id);
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->save();

        return redirect('testnine')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestNine  $testnine
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestNine $testnine,$id=0)
    {
        $tab=TestNine::find($id);
        $tab->delete();
        return redirect('testnine')->with('status','Deleted Successfully !');}
}
