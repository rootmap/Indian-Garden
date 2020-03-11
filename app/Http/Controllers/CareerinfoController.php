<?php

namespace App\Http\Controllers;

use App\CareerInfo;
use App\AdminLog;
use Illuminate\Http\Request;

class CareerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Career Info";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=CareerInfo::all();
        return view('admin.pages.careerinfo.careerinfo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.careerinfo.careerinfo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function SystemAdminLog($module_name="",$action="",$details=""){
        $tab=new AdminLog();
        $tab->module_name=$module_name;
        $tab->action=$action;
        $tab->details=$details;
        $tab->admin_id=$this->sdc->admin_id();
        $tab->admin_name=$this->sdc->UserName();
        $tab->save();
    }


    public function store(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'application_deadline'=>'required',
                'job_location'=>'required',
                'vacancy'=>'required',
                'job_details'=>'required',
        ]);

        $this->SystemAdminLog("Career Info","Save New","Create New");

        
        $tab=new CareerInfo();
        
        $tab->title=$request->title;
        $tab->application_deadline=$request->application_deadline;
        $tab->job_location=$request->job_location;
        $tab->vacancy=$request->vacancy;
        $tab->job_details=$request->job_details;
        $tab->save();

        return redirect('careerinfo')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'application_deadline'=>'required',
                'job_location'=>'required',
                'vacancy'=>'required',
                'job_details'=>'required',
        ]);

        $tab=new CareerInfo();
        
        $tab->title=$request->title;
        $tab->application_deadline=$request->application_deadline;
        $tab->job_location=$request->job_location;
        $tab->vacancy=$request->vacancy;
        $tab->job_details=$request->job_details;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CareerInfo  $careerinfo
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('application_deadline','LIKE','%'.$search.'%');
                            $query->orWhere('job_location','LIKE','%'.$search.'%');
                            $query->orWhere('vacancy','LIKE','%'.$search.'%');
                            $query->orWhere('job_details','LIKE','%'.$search.'%');
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
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('application_deadline','LIKE','%'.$search.'%');
                            $query->orWhere('job_location','LIKE','%'.$search.'%');
                            $query->orWhere('vacancy','LIKE','%'.$search.'%');
                            $query->orWhere('job_details','LIKE','%'.$search.'%');
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

    
    public function CareerInfoQuery($request)
    {
        $CareerInfo_data=CareerInfo::orderBy('id','DESC')->get();

        return $CareerInfo_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Application Deadline','Job Location','Vacancy','Job Details','Created Date');
        array_push($data, $array_column);
        $inv=$this->CareerInfoQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->application_deadline,$voi->job_location,$voi->vacancy,$voi->job_details,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Career Info Report',
            'report_title'=>'Career Info Report',
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
                            <th class='text-center' style='font-size:12px;' >Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Application Deadline</th>
                        
                            <th class='text-center' style='font-size:12px;' >Job Location</th>
                        
                            <th class='text-center' style='font-size:12px;' >Vacancy</th>
                        
                            <th class='text-center' style='font-size:12px;' >Job Details</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->CareerInfoQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->application_deadline."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->job_location."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->vacancy."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->job_details."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Career Info Report',$html);


    }
    public function show(CareerInfo $careerinfo)
    {
        
        $tab=CareerInfo::all();return view('admin.pages.careerinfo.careerinfo_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CareerInfo  $careerinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerInfo $careerinfo,$id=0)
    {
        $tab=CareerInfo::find($id);      
        return view('admin.pages.careerinfo.careerinfo_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CareerInfo  $careerinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerInfo $careerinfo,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'application_deadline'=>'required',
                'job_location'=>'required',
                'vacancy'=>'required',
                'job_details'=>'required',
        ]);

        $this->SystemAdminLog("Career Info","Update","Edit / Modify");

        
        $tab=CareerInfo::find($id);
        
        $tab->title=$request->title;
        $tab->application_deadline=$request->application_deadline;
        $tab->job_location=$request->job_location;
        $tab->vacancy=$request->vacancy;
        $tab->job_details=$request->job_details;
        $tab->save();

        return redirect('careerinfo')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CareerInfo  $careerinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerInfo $careerinfo,$id=0)
    {
        $this->SystemAdminLog("Career Info","Destroy","Delete");

        $tab=CareerInfo::find($id);
        $tab->delete();
        return redirect('careerinfo')->with('status','Deleted Successfully !');}
}
