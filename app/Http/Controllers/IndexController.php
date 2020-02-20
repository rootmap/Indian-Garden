<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sitesettings;
use App\Slider;
use App\WeAreOpen;
use App\HomePageVideo;
use App\HomeOrderDelivery;
use App\HomeDelivery;
use App\OpeningHour;
use App\OurHistoryPageInfo;
use App\OurHistory;
use App\Category;
use App\MenuPageInfo;
use App\MenuItem;
use App\EventPageInfo;
use App\EventInfo;
use App\Gallery;
use App\ReservationsRequest;


class IndexController extends Controller
{
    public function adminIndex(){
    	return view('admin.pages.index');
    }
    public function adminTable(){
    	return view('admin.pages.tables');
    }

    private function categoryParseData()
    {
        $data=[];
        $pureCatCheck=Category::count();

        if($pureCatCheck > 0 )
        {
            $pureCat=Category::where('category_status','=','Active')->get();
            foreach($pureCat as $pc){
                $sCatCheck=MenuItem::where('category',$pc->id)->count();
                $subCatData=[];
                if($sCatCheck > 0)
                {
                    $sCat=MenuItem::where('category',$pc->id)->get();
                    foreach($sCat as $sc)
                    {
                        $subCatData[]=[
                            'id'=>$sc->id,
                            'name'=>$sc->name,
                            'description'=>$sc->description,
                            'price'=>$sc->price,
                            'menu_item_image'=>$sc->menu_item_image,
                            'special'=>$sc->special,
                            'spicy'=>$sc->spicy
                        ];
                    }
                }
                $data[]=[
                        'id'=>$pc->id,
                        'name'=>$pc->name,
                        'description'=>$pc->description,
                        'scat'=>$subCatData
                    ];
            }
        }

        return $data;
    }
    
    public function index(){
        $setting                = Sitesettings::all();
        $slider                 = Slider::all();
        $HomePageVideo          = HomePageVideo::all();
        $we_are_open            = WeAreOpen::all();
        $HomeOrderDelivery      = HomeOrderDelivery::where('module_status','=','Active')->get();
        $HomeDelivery           = HomeDelivery::where('module_status','=','Active')->get();
        $OpeningHour            = OpeningHour::all();
        //dd($setting);
        return view('site.pages.index',[
            'setting'=>$setting,
            'slider'=>$slider,
            'HomePageVideo'=>$HomePageVideo,
            'we_are_open'=>$we_are_open,
            'HomeOrderDelivery'=>$HomeOrderDelivery,
            'HomeDelivery'=>$HomeDelivery,
            'OpeningHour'=>$OpeningHour
        ]);
    }
    public function ourHistory(){
        $setting        = Sitesettings::all();
        $history        = OurHistoryPageInfo::where('module_status','=','Active')->get();
        $OurHistory     = OurHistory::all();
        $OpeningHour    = OpeningHour::all();
    	return view('site.pages.our-history',[
            'setting'=>$setting,
            'history'=>$history,
            'OurHistory'=>$OurHistory,
            'OpeningHour'=>$OpeningHour
        ]);
    }
    
    public function menu(){
        $setting        = Sitesettings::all();
        $OpeningHour    = OpeningHour::all();
        $MenuPageInfo   = MenuPageInfo::where('module_status','=','Active')->get();
        $MenuItem       = $this->categoryParseData();
        
        //dd($MenuItem);
    	return view('site.pages.menu',[
            'setting'=>$setting,
            'OpeningHour'=>$OpeningHour,
            'MenuPageInfo'=>$MenuPageInfo,
            'MenuItem'=>$MenuItem,
        ]);
    }
    public function event(){
        $setting        = Sitesettings::all();
        $OpeningHour    = OpeningHour::all();
        $EventPageInfo  = EventPageInfo::where('module_status','=','Active')->first();
        $EventInfo    = EventInfo::where('event_expired','=','Yes')->get();
        //dd($EventPageInfo);
    	return view('site.pages.events',[
            'setting'=>$setting,
            'OpeningHour'=>$OpeningHour,
            'EventPageInfo'=>$EventPageInfo,
            'EventInfo'=>$EventInfo,
        ]);
    }
    public function gallery(){
        $setting        = Sitesettings::all();
        $OpeningHour    = OpeningHour::all();
        $gallery        = Gallery::all();
    	return view('site.pages.gallery',[
            'setting'=>$setting,
            'OpeningHour'=>$OpeningHour,
            'gallery'=>$gallery,
        ]);
    }
    public function reservation(){
        $setting        = Sitesettings::all();
        $OpeningHour    = OpeningHour::all();
    	return view('site.pages.reservation',[
            'setting'=>$setting,
            'OpeningHour'=>$OpeningHour
        ]);
    }
    public function reservationStore(Request $request)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'email'=>'required',
                'reservations_date'=>'required',
                'reservations_time'=>'required',
                'person'=>'required',
        ]);
        
        $tab=new ReservationsRequest();
        
        $tab->name=$request->name;
        $tab->email=$request->email;
        $tab->reservations_date=$request->reservations_date;
        $tab->reservations_time=$request->reservations_time;
        $tab->person=$request->person;
        $tab->reservations_status=$request->reservations_status;
        $tab->save();

        
        return redirect()->back()->with('success', 'Your message has been sent successfully.');

    }
}
