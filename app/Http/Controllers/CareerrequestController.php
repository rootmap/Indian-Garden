<?php

namespace App\Http\Controllers;

use App\CareerRequest;
use App\AdminLog;
use Illuminate\Http\Request;

class CareerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Career Request";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=CareerRequest::all();
        return view('admin.pages.careerrequest.careerrequest_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.careerrequest.careerrequest_create');
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
                
                'job_circular_id'=>'required',
                'job_title'=>'required',
                'full_name'=>'required',
                'email'=>'required',
                'mobile_number'=>'required',
                'expected_salary'=>'required',
                'git_link'=>'required',
                'linkedin_link'=>'required',
                'applicant_photo'=>'required',
                'applicant_cv'=>'required',
                'present_address'=>'required',
        ]);

        $this->SystemAdminLog("Career Request","Save New","Create New");

        

        $filename_careerrequest_8='';
        if ($request->hasFile('applicant_photo')) {
            $img_careerrequest = $request->file('applicant_photo');
            $upload_careerrequest = 'upload/careerrequest';
            $filename_careerrequest_8 = time() . '.' . $img_careerrequest->getClientOriginalExtension();
            $img_careerrequest->move($upload_careerrequest, $filename_careerrequest_8);
        }

                

        $filename_careerrequest_9='';
        if ($request->hasFile('applicant_cv')) {
            $img_careerrequest = $request->file('applicant_cv');
            $upload_careerrequest = 'upload/careerrequest';
            $filename_careerrequest_9 = time() . '.' . $img_careerrequest->getClientOriginalExtension();
            $img_careerrequest->move($upload_careerrequest, $filename_careerrequest_9);
        }

                
        $tab=new CareerRequest();
        
        $tab->job_circular_id=$request->job_circular_id;
        $tab->job_title=$request->job_title;
        $tab->full_name=$request->full_name;
        $tab->email=$request->email;
        $tab->mobile_number=$request->mobile_number;
        $tab->expected_salary=$request->expected_salary;
        $tab->git_link=$request->git_link;
        $tab->linkedin_link=$request->linkedin_link;
        $tab->applicant_photo=$filename_careerrequest_8;
        $tab->applicant_cv=$filename_careerrequest_9;
        $tab->present_address=$request->present_address;
        $tab->save();

        return redirect('careerrequest')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'job_circular_id'=>'required',
                'job_title'=>'required',
                'full_name'=>'required',
                'email'=>'required',
                'mobile_number'=>'required',
                'expected_salary'=>'required',
                'git_link'=>'required',
                'linkedin_link'=>'required',
                'applicant_photo'=>'required',
                'applicant_cv'=>'required',
                'present_address'=>'required',
        ]);

        $tab=new CareerRequest();
        
        $tab->job_circular_id=$request->job_circular_id;
        $tab->job_title=$request->job_title;
        $tab->full_name=$request->full_name;
        $tab->email=$request->email;
        $tab->mobile_number=$request->mobile_number;
        $tab->expected_salary=$request->expected_salary;
        $tab->git_link=$request->git_link;
        $tab->linkedin_link=$request->linkedin_link;
        $tab->applicant_photo=$filename_careerrequest_8;
        $tab->applicant_cv=$filename_careerrequest_9;
        $tab->present_address=$request->present_address;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CareerRequest  $careerrequest
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('job_circular_id','LIKE','%'.$search.'%');
                            $query->orWhere('job_title','LIKE','%'.$search.'%');
                            $query->orWhere('full_name','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('mobile_number','LIKE','%'.$search.'%');
                            $query->orWhere('expected_salary','LIKE','%'.$search.'%');
                            $query->orWhere('git_link','LIKE','%'.$search.'%');
                            $query->orWhere('linkedin_link','LIKE','%'.$search.'%');
                            $query->orWhere('applicant_photo','LIKE','%'.$search.'%');
                            $query->orWhere('applicant_cv','LIKE','%'.$search.'%');
                            $query->orWhere('present_address','LIKE','%'.$search.'%');
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
                            $query->orWhere('job_circular_id','LIKE','%'.$search.'%');
                            $query->orWhere('job_title','LIKE','%'.$search.'%');
                            $query->orWhere('full_name','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('mobile_number','LIKE','%'.$search.'%');
                            $query->orWhere('expected_salary','LIKE','%'.$search.'%');
                            $query->orWhere('git_link','LIKE','%'.$search.'%');
                            $query->orWhere('linkedin_link','LIKE','%'.$search.'%');
                            $query->orWhere('applicant_photo','LIKE','%'.$search.'%');
                            $query->orWhere('applicant_cv','LIKE','%'.$search.'%');
                            $query->orWhere('present_address','LIKE','%'.$search.'%');
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

    
    public function CareerRequestQuery($request)
    {
        $CareerRequest_data=CareerRequest::orderBy('id','DESC')->get();

        return $CareerRequest_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','job circular id','Job Title','Full Name','Email','Mobile Number','Expected Salary','Git Link','Linkedin Link','Applicant Photo','Applicant Cv','Present Address','Created Date');
        array_push($data, $array_column);
        $inv=$this->CareerRequestQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->job_circular_id,$voi->job_title,$voi->full_name,$voi->email,$voi->mobile_number,$voi->expected_salary,$voi->git_link,$voi->linkedin_link,$voi->applicant_photo,$voi->applicant_cv,$voi->present_address,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Career Request Report',
            'report_title'=>'Career Request Report',
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
                            <th class='text-center' style='font-size:12px;' >job circular id</th>
                        
                            <th class='text-center' style='font-size:12px;' >Job Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Full Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Mobile Number</th>
                        
                            <th class='text-center' style='font-size:12px;' >Expected Salary</th>
                        
                            <th class='text-center' style='font-size:12px;' >Git Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Linkedin Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Applicant Photo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Applicant Cv</th>
                        
                            <th class='text-center' style='font-size:12px;' >Present Address</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->CareerRequestQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->job_circular_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->job_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->full_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->mobile_number."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->expected_salary."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->git_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->linkedin_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->applicant_photo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->applicant_cv."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->present_address."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Career Request Report',$html);


    }
    public function show(CareerRequest $careerrequest)
    {
        
        $tab=CareerRequest::all();return view('admin.pages.careerrequest.careerrequest_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CareerRequest  $careerrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerRequest $careerrequest,$id=0)
    {
        $tab=CareerRequest::find($id);      
        return view('admin.pages.careerrequest.careerrequest_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CareerRequest  $careerrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerRequest $careerrequest,$id=0)
    {
        $this->validate($request,[
                
                'job_circular_id'=>'required',
                'job_title'=>'required',
                'full_name'=>'required',
                'email'=>'required',
                'mobile_number'=>'required',
                'expected_salary'=>'required',
                'git_link'=>'required',
                'linkedin_link'=>'required',
                'present_address'=>'required',
        ]);

        $this->SystemAdminLog("Career Request","Update","Edit / Modify");

        

        $filename_careerrequest_8=$request->ex_applicant_photo;
        if ($request->hasFile('applicant_photo')) {
            $img_careerrequest = $request->file('applicant_photo');
            $upload_careerrequest = 'upload/careerrequest';
            $filename_careerrequest_8 = time() . '.' . $img_careerrequest->getClientOriginalExtension();
            $img_careerrequest->move($upload_careerrequest, $filename_careerrequest_8);
        }

                

        $filename_careerrequest_9=$request->ex_applicant_cv;
        if ($request->hasFile('applicant_cv')) {
            $img_careerrequest = $request->file('applicant_cv');
            $upload_careerrequest = 'upload/careerrequest';
            $filename_careerrequest_9 = time() . '.' . $img_careerrequest->getClientOriginalExtension();
            $img_careerrequest->move($upload_careerrequest, $filename_careerrequest_9);
        }

                
        $tab=CareerRequest::find($id);
        
        $tab->job_circular_id=$request->job_circular_id;
        $tab->job_title=$request->job_title;
        $tab->full_name=$request->full_name;
        $tab->email=$request->email;
        $tab->mobile_number=$request->mobile_number;
        $tab->expected_salary=$request->expected_salary;
        $tab->git_link=$request->git_link;
        $tab->linkedin_link=$request->linkedin_link;
        $tab->applicant_photo=$filename_careerrequest_8;
        $tab->applicant_cv=$filename_careerrequest_9;
        $tab->present_address=$request->present_address;
        $tab->save();

        return redirect('careerrequest')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CareerRequest  $careerrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerRequest $careerrequest,$id=0)
    {
        $this->SystemAdminLog("Career Request","Destroy","Delete");

        $tab=CareerRequest::find($id);
        $tab->delete();
        return redirect('careerrequest')->with('status','Deleted Successfully !');}
}
