<?php

namespace App\Http\Controllers;

use App\TestThree;
use App\AdminLog;
use Illuminate\Http\Request;

class TestThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test Three";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestThree::all();
        return view('admin.pages.testthree.testthree_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.testthree.testthree_create');
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
                'logo'=>'required',
        ]);

        

        $filename_testthree='';
        if ($request->hasFile('logo')) {
            $img_testthree = $request->file('logo');
            $upload_testthree = 'upload/testthree';
            $filename_testthree = time() . '.' . $img_testthree->getClientOriginalExtension();
            $img_testthree->move($upload_testthree, $filename_testthree);
        }

                
        $tab=new TestThree();
        
        $tab->gender=$request->gender;
        $tab->logo=$filename_testthree;
        $tab->save();

        return redirect('testthree')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'gender'=>'required',
                'logo'=>'required',
        ]);

        $tab=new TestThree();
        
        $tab->gender=$request->gender;
        $tab->logo=$filename_testthree;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestThree  $testthree
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
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

    
    public function TestThreeQuery($request)
    {
        $TestThree_data=TestThree::orderBy('id','DESC')->get();

        return $TestThree_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Gender','Logo','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestThreeQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->gender,$voi->logo,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test Three Report',
            'report_title'=>'Test Three Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Logo</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestThreeQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->gender."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->logo."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test Three Report',$html);


    }
    public function show(TestThree $testthree)
    {
        
        $tab=TestThree::all();return view('admin.pages.testthree.testthree_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestThree  $testthree
     * @return \Illuminate\Http\Response
     */
    public function edit(TestThree $testthree,$id=0)
    {
        $tab=TestThree::find($id);      
        return view('admin.pages.testthree.testthree_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestThree  $testthree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestThree $testthree,$id=0)
    {
        $this->validate($request,[
                
                'gender'=>'required',
        ]);
        

        $filename_testthree=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_testthree = $request->file('logo');
            $upload_testthree = 'upload/testthree';
            $filename_testthree = time() . '.' . $img_testthree->getClientOriginalExtension();
            $img_testthree->move($upload_testthree, $filename_testthree);
        }

                
        $tab=TestThree::find($id);
        
        $tab->gender=$request->gender;
        $tab->logo=$filename_testthree;
        $tab->save();

        return redirect('testthree')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestThree  $testthree
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestThree $testthree,$id=0)
    {
        $tab=TestThree::find($id);
        $tab->delete();
        return redirect('testthree')->with('status','Deleted Successfully !');}
}
