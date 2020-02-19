<?php

namespace App\Http\Controllers;

use App\TestFile;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Category;
                

class TestFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Test File";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=TestFile::all();
        return view('admin.pages.testfile.testfile_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Category=Category::all();           
        return view('admin.pages.testfile.testfile_create',['dataRow_Category'=>$tab_Category]);
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
                
                'download_file'=>'required',
                'static_dropdown'=>'required',
                'dynamic_dropdown'=>'required',
                'is_active'=>'required',
                'module_status'=>'required',
        ]);

        

        $filename_testfile='';
        if ($request->hasFile('logo')) {
            $img_testfile = $request->file('logo');
            $upload_testfile = 'upload/testfile';
            $filename_testfile = time() . '.' . $img_testfile->getClientOriginalExtension();
            $img_testfile->move($upload_testfile, $filename_testfile);
        }

                

        $filename_testfile='';
        if ($request->hasFile('download_file')) {
            $img_testfile = $request->file('download_file');
            $upload_testfile = 'upload/testfile';
            $filename_testfile = time() . '.' . $img_testfile->getClientOriginalExtension();
            $img_testfile->move($upload_testfile, $filename_testfile);
        }

                
        $tab=new TestFile();
        
        $tab->logo=$filename_testfile;
        $tab->download_file=$filename_testfile;
        $tab->static_dropdown=$request->static_dropdown;
        $tab->dynamic_dropdown=$request->dynamic_dropdown;
        $tab->is_active=$request->is_active;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('testfile')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'download_file'=>'required',
                'static_dropdown'=>'required',
                'dynamic_dropdown'=>'required',
                'is_active'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new TestFile();
        
        $tab->logo=$filename_testfile;
        $tab->download_file=$filename_testfile;
        $tab->static_dropdown=$request->static_dropdown;
        $tab->dynamic_dropdown=$request->dynamic_dropdown;
        $tab->is_active=$request->is_active;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestFile  $testfile
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('download_file','LIKE','%'.$search.'%');
                            $query->orWhere('static_dropdown','LIKE','%'.$search.'%');
                            $query->orWhere('dynamic_dropdown','LIKE','%'.$search.'%');
                            $query->orWhere('is_active','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('logo','LIKE','%'.$search.'%');
                            $query->orWhere('download_file','LIKE','%'.$search.'%');
                            $query->orWhere('static_dropdown','LIKE','%'.$search.'%');
                            $query->orWhere('dynamic_dropdown','LIKE','%'.$search.'%');
                            $query->orWhere('is_active','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
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

    
    public function TestFileQuery($request)
    {
        $TestFile_data=TestFile::orderBy('id','DESC')->get();

        return $TestFile_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Logo','Download File','Static Dropdown','Dynamic Dropdown','Is Active','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->TestFileQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->logo,$voi->download_file,$voi->static_dropdown,$voi->dynamic_dropdown,$voi->is_active,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Test File Report',
            'report_title'=>'Test File Report',
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
                            <th class='text-center' style='font-size:12px;' >Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Download File</th>
                        
                            <th class='text-center' style='font-size:12px;' >Static Dropdown</th>
                        
                            <th class='text-center' style='font-size:12px;' >Dynamic Dropdown</th>
                        
                            <th class='text-center' style='font-size:12px;' >Is Active</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->TestFileQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->download_file."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->static_dropdown."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->dynamic_dropdown."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->is_active."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Test File Report',$html);


    }
    public function show(TestFile $testfile)
    {
        
        $tab=TestFile::all();return view('admin.pages.testfile.testfile_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestFile  $testfile
     * @return \Illuminate\Http\Response
     */
    public function edit(TestFile $testfile,$id=0)
    {
        $tab=TestFile::find($id); 
        $tab_Category=Category::all();     
        return view('admin.pages.testfile.testfile_edit',['dataRow_Category'=>$tab_Category,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestFile  $testfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestFile $testfile,$id=0)
    {
        $this->validate($request,[
                
                'static_dropdown'=>'required',
                'dynamic_dropdown'=>'required',
                'is_active'=>'required',
                'module_status'=>'required',
        ]);
        

        $filename_testfile=$request->ex_logo;
        if ($request->hasFile('logo')) {
            $img_testfile = $request->file('logo');
            $upload_testfile = 'upload/testfile';
            $filename_testfile = time() . '.' . $img_testfile->getClientOriginalExtension();
            $img_testfile->move($upload_testfile, $filename_testfile);
        }

                

        $filename_testfile=$request->ex_download_file;
        if ($request->hasFile('download_file')) {
            $img_testfile = $request->file('download_file');
            $upload_testfile = 'upload/testfile';
            $filename_testfile = time() . '.' . $img_testfile->getClientOriginalExtension();
            $img_testfile->move($upload_testfile, $filename_testfile);
        }

                
        $tab=TestFile::find($id);
        
        $tab->logo=$filename_testfile;
        $tab->download_file=$filename_testfile;
        $tab->static_dropdown=$request->static_dropdown;
        $tab->dynamic_dropdown=$request->dynamic_dropdown;
        $tab->is_active=$request->is_active;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('testfile')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestFile  $testfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestFile $testfile,$id=0)
    {
        $tab=TestFile::find($id);
        $tab->delete();
        return redirect('testfile')->with('status','Deleted Successfully !');}
}
