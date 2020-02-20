<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/crud', 'CrudController@crud')->name('crud');
Route::post('/crud', 'CrudController@crudgenarate')->name('crudgenarate');


Route::get("form","IndexController@adminIndex");
Route::get("table","IndexController@adminTable");

Route::get("/","IndexController@index");
Route::get("index","IndexController@index");
Route::get("our-history","IndexController@ourHistory");
Route::get("menu","IndexController@menu");
Route::get("events","IndexController@event");
Route::get("gallerys","IndexController@gallery");
Route::get("reservation","IndexController@reservation");
Route::post('/reservation/request','IndexController@reservationStore');

//======================== Sitesettings Route Start ===============================//
Route::get('/sitesettings/list','SitesettingsController@show');
Route::get('/sitesettings/create','SitesettingsController@create');
Route::get('/sitesettings/edit/{id}','SitesettingsController@edit');
Route::get('/sitesettings/delete/{id}','SitesettingsController@destroy');
Route::get('/sitesettings','SitesettingsController@index');
Route::get('/sitesettings/export/excel','SitesettingsController@ExportExcel');
Route::get('/sitesettings/export/pdf','SitesettingsController@ExportPDF');
Route::post('/sitesettings','SitesettingsController@store');
Route::post('/sitesettings/ajax','SitesettingsController@ajaxSave');
Route::post('/sitesettings/datatable/ajax','SitesettingsController@datatable');
Route::post('/sitesettings/update/{id}','SitesettingsController@update');
//======================== Sitesettings Route End ===============================//

//======================== Slider Route Start ===============================//
Route::get('/slider/list','SliderController@show');
Route::get('/slider/create','SliderController@create');
Route::get('/slider/edit/{id}','SliderController@edit');
Route::get('/slider/delete/{id}','SliderController@destroy');
Route::get('/slider','SliderController@index');
Route::get('/slider/export/excel','SliderController@ExportExcel');
Route::get('/slider/export/pdf','SliderController@ExportPDF');
Route::post('/slider','SliderController@store');
Route::post('/slider/ajax','SliderController@ajaxSave');
Route::post('/slider/datatable/ajax','SliderController@datatable');
Route::post('/slider/update/{id}','SliderController@update');
//======================== Slider Route End ===============================//
//======================== Weareopen Route Start ===============================//
Route::get('/weareopen/list','WeareopenController@show');
Route::get('/weareopen/create','WeareopenController@create');
Route::get('/weareopen/edit/{id}','WeareopenController@edit');
Route::get('/weareopen/delete/{id}','WeareopenController@destroy');
Route::get('/weareopen','WeareopenController@index');
Route::get('/weareopen/export/excel','WeareopenController@ExportExcel');
Route::get('/weareopen/export/pdf','WeareopenController@ExportPDF');
Route::post('/weareopen','WeareopenController@store');
Route::post('/weareopen/ajax','WeareopenController@ajaxSave');
Route::post('/weareopen/datatable/ajax','WeareopenController@datatable');
Route::post('/weareopen/update/{id}','WeareopenController@update');
//======================== Weareopen Route End ===============================//
//======================== Homepagevideo Route Start ===============================//
Route::get('/homepagevideo/list','HomepagevideoController@show');
Route::get('/homepagevideo/create','HomepagevideoController@create');
Route::get('/homepagevideo/edit/{id}','HomepagevideoController@edit');
Route::get('/homepagevideo/delete/{id}','HomepagevideoController@destroy');
Route::get('/homepagevideo','HomepagevideoController@index');
Route::get('/homepagevideo/export/excel','HomepagevideoController@ExportExcel');
Route::get('/homepagevideo/export/pdf','HomepagevideoController@ExportPDF');
Route::post('/homepagevideo','HomepagevideoController@store');
Route::post('/homepagevideo/ajax','HomepagevideoController@ajaxSave');
Route::post('/homepagevideo/datatable/ajax','HomepagevideoController@datatable');
Route::post('/homepagevideo/update/{id}','HomepagevideoController@update');
//======================== Homepagevideo Route End ===============================//
//======================== Homeorderdelivery Route Start ===============================//
Route::get('/homeorderdelivery/list','HomeorderdeliveryController@show');
Route::get('/homeorderdelivery/create','HomeorderdeliveryController@create');
Route::get('/homeorderdelivery/edit/{id}','HomeorderdeliveryController@edit');
Route::get('/homeorderdelivery/delete/{id}','HomeorderdeliveryController@destroy');
Route::get('/homeorderdelivery','HomeorderdeliveryController@index');
Route::get('/homeorderdelivery/export/excel','HomeorderdeliveryController@ExportExcel');
Route::get('/homeorderdelivery/export/pdf','HomeorderdeliveryController@ExportPDF');
Route::post('/homeorderdelivery','HomeorderdeliveryController@store');
Route::post('/homeorderdelivery/ajax','HomeorderdeliveryController@ajaxSave');
Route::post('/homeorderdelivery/datatable/ajax','HomeorderdeliveryController@datatable');
Route::post('/homeorderdelivery/update/{id}','HomeorderdeliveryController@update');
//======================== Homeorderdelivery Route End ===============================//
//======================== Homedelivery Route Start ===============================//
Route::get('/homedelivery/list','HomedeliveryController@show');
Route::get('/homedelivery/create','HomedeliveryController@create');
Route::get('/homedelivery/edit/{id}','HomedeliveryController@edit');
Route::get('/homedelivery/delete/{id}','HomedeliveryController@destroy');
Route::get('/homedelivery','HomedeliveryController@index');
Route::get('/homedelivery/export/excel','HomedeliveryController@ExportExcel');
Route::get('/homedelivery/export/pdf','HomedeliveryController@ExportPDF');
Route::post('/homedelivery','HomedeliveryController@store');
Route::post('/homedelivery/ajax','HomedeliveryController@ajaxSave');
Route::post('/homedelivery/datatable/ajax','HomedeliveryController@datatable');
Route::post('/homedelivery/update/{id}','HomedeliveryController@update');
//======================== Homedelivery Route End ===============================//
//======================== Openinghour Route Start ===============================//
Route::get('/openinghour/list','OpeninghourController@show');
Route::get('/openinghour/create','OpeninghourController@create');
Route::get('/openinghour/edit/{id}','OpeninghourController@edit');
Route::get('/openinghour/delete/{id}','OpeninghourController@destroy');
Route::get('/openinghour','OpeninghourController@index');
Route::get('/openinghour/export/excel','OpeninghourController@ExportExcel');
Route::get('/openinghour/export/pdf','OpeninghourController@ExportPDF');
Route::post('/openinghour','OpeninghourController@store');
Route::post('/openinghour/ajax','OpeninghourController@ajaxSave');
Route::post('/openinghour/datatable/ajax','OpeninghourController@datatable');
Route::post('/openinghour/update/{id}','OpeninghourController@update');
//======================== Openinghour Route End ===============================//
//======================== Ourhistorypageinfo Route Start ===============================//
Route::get('/ourhistorypageinfo/list','OurhistorypageinfoController@show');
Route::get('/ourhistorypageinfo/create','OurhistorypageinfoController@create');
Route::get('/ourhistorypageinfo/edit/{id}','OurhistorypageinfoController@edit');
Route::get('/ourhistorypageinfo/delete/{id}','OurhistorypageinfoController@destroy');
Route::get('/ourhistorypageinfo','OurhistorypageinfoController@index');
Route::get('/ourhistorypageinfo/export/excel','OurhistorypageinfoController@ExportExcel');
Route::get('/ourhistorypageinfo/export/pdf','OurhistorypageinfoController@ExportPDF');
Route::post('/ourhistorypageinfo','OurhistorypageinfoController@store');
Route::post('/ourhistorypageinfo/ajax','OurhistorypageinfoController@ajaxSave');
Route::post('/ourhistorypageinfo/datatable/ajax','OurhistorypageinfoController@datatable');
Route::post('/ourhistorypageinfo/update/{id}','OurhistorypageinfoController@update');
//======================== Ourhistorypageinfo Route End ===============================//
//======================== Ourhistory Route Start ===============================//
Route::get('/ourhistory/list','OurhistoryController@show');
Route::get('/ourhistory/create','OurhistoryController@create');
Route::get('/ourhistory/edit/{id}','OurhistoryController@edit');
Route::get('/ourhistory/delete/{id}','OurhistoryController@destroy');
Route::get('/ourhistory','OurhistoryController@index');
Route::get('/ourhistory/export/excel','OurhistoryController@ExportExcel');
Route::get('/ourhistory/export/pdf','OurhistoryController@ExportPDF');
Route::post('/ourhistory','OurhistoryController@store');
Route::post('/ourhistory/ajax','OurhistoryController@ajaxSave');
Route::post('/ourhistory/datatable/ajax','OurhistoryController@datatable');
Route::post('/ourhistory/update/{id}','OurhistoryController@update');
//======================== Ourhistory Route End ===============================//
//======================== Menupageinfo Route Start ===============================//
Route::get('/menupageinfo/list','MenupageinfoController@show');
Route::get('/menupageinfo/create','MenupageinfoController@create');
Route::get('/menupageinfo/edit/{id}','MenupageinfoController@edit');
Route::get('/menupageinfo/delete/{id}','MenupageinfoController@destroy');
Route::get('/menupageinfo','MenupageinfoController@index');
Route::get('/menupageinfo/export/excel','MenupageinfoController@ExportExcel');
Route::get('/menupageinfo/export/pdf','MenupageinfoController@ExportPDF');
Route::post('/menupageinfo','MenupageinfoController@store');
Route::post('/menupageinfo/ajax','MenupageinfoController@ajaxSave');
Route::post('/menupageinfo/datatable/ajax','MenupageinfoController@datatable');
Route::post('/menupageinfo/update/{id}','MenupageinfoController@update');
//======================== Menupageinfo Route End ===============================//

//======================== Category Route Start ===============================//
Route::get('/category/list','CategoryController@show');
Route::get('/category/create','CategoryController@create');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::get('/category/delete/{id}','CategoryController@destroy');
Route::get('/category','CategoryController@index');
Route::get('/category/export/excel','CategoryController@ExportExcel');
Route::get('/category/export/pdf','CategoryController@ExportPDF');
Route::post('/category','CategoryController@store');
Route::post('/category/ajax','CategoryController@ajaxSave');
Route::post('/category/datatable/ajax','CategoryController@datatable');
Route::post('/category/update/{id}','CategoryController@update');
//======================== Category Route End ===============================//
//======================== Menuitem Route Start ===============================//
Route::get('/menuitem/list','MenuitemController@show');
Route::get('/menuitem/create','MenuitemController@create');
Route::get('/menuitem/edit/{id}','MenuitemController@edit');
Route::get('/menuitem/delete/{id}','MenuitemController@destroy');
Route::get('/menuitem','MenuitemController@index');
Route::get('/menuitem/export/excel','MenuitemController@ExportExcel');
Route::get('/menuitem/export/pdf','MenuitemController@ExportPDF');
Route::post('/menuitem','MenuitemController@store');
Route::post('/menuitem/ajax','MenuitemController@ajaxSave');
Route::post('/menuitem/datatable/ajax','MenuitemController@datatable');
Route::post('/menuitem/update/{id}','MenuitemController@update');
//======================== Menuitem Route End ===============================//
//======================== Eventpageinfo Route Start ===============================//
Route::get('/eventpageinfo/list','EventpageinfoController@show');
Route::get('/eventpageinfo/create','EventpageinfoController@create');
Route::get('/eventpageinfo/edit/{id}','EventpageinfoController@edit');
Route::get('/eventpageinfo/delete/{id}','EventpageinfoController@destroy');
Route::get('/eventpageinfo','EventpageinfoController@index');
Route::get('/eventpageinfo/export/excel','EventpageinfoController@ExportExcel');
Route::get('/eventpageinfo/export/pdf','EventpageinfoController@ExportPDF');
Route::post('/eventpageinfo','EventpageinfoController@store');
Route::post('/eventpageinfo/ajax','EventpageinfoController@ajaxSave');
Route::post('/eventpageinfo/datatable/ajax','EventpageinfoController@datatable');
Route::post('/eventpageinfo/update/{id}','EventpageinfoController@update');
//======================== Eventpageinfo Route End ===============================//
//======================== Eventinfo Route Start ===============================//
Route::get('/eventinfo/list','EventinfoController@show');
Route::get('/eventinfo/create','EventinfoController@create');
Route::get('/eventinfo/edit/{id}','EventinfoController@edit');
Route::get('/eventinfo/delete/{id}','EventinfoController@destroy');
Route::get('/eventinfo','EventinfoController@index');
Route::get('/eventinfo/export/excel','EventinfoController@ExportExcel');
Route::get('/eventinfo/export/pdf','EventinfoController@ExportPDF');
Route::post('/eventinfo','EventinfoController@store');
Route::post('/eventinfo/ajax','EventinfoController@ajaxSave');
Route::post('/eventinfo/datatable/ajax','EventinfoController@datatable');
Route::post('/eventinfo/update/{id}','EventinfoController@update');
//======================== Eventinfo Route End ===============================//
//======================== Gallery Route Start ===============================//
Route::get('/gallery/list','GalleryController@show');
Route::get('/gallery/create','GalleryController@create');
Route::get('/gallery/edit/{id}','GalleryController@edit');
Route::get('/gallery/delete/{id}','GalleryController@destroy');
Route::get('/gallery','GalleryController@index');
Route::get('/gallery/export/excel','GalleryController@ExportExcel');
Route::get('/gallery/export/pdf','GalleryController@ExportPDF');
Route::post('/gallery','GalleryController@store');
Route::post('/gallery/ajax','GalleryController@ajaxSave');
Route::post('/gallery/datatable/ajax','GalleryController@datatable');
Route::post('/gallery/update/{id}','GalleryController@update');
//======================== Gallery Route End ===============================//
//======================== Reservationsrequest Route Start ===============================//
Route::get('/reservationsrequest/list','ReservationsrequestController@show');
Route::get('/reservationsrequest/create','ReservationsrequestController@create');
Route::get('/reservationsrequest/edit/{id}','ReservationsrequestController@edit');
Route::get('/reservationsrequest/delete/{id}','ReservationsrequestController@destroy');
Route::get('/reservationsrequest','ReservationsrequestController@index');
Route::get('/reservationsrequest/export/excel','ReservationsrequestController@ExportExcel');
Route::get('/reservationsrequest/export/pdf','ReservationsrequestController@ExportPDF');
Route::post('/reservationsrequest','ReservationsrequestController@store');
Route::post('/reservationsrequest/ajax','ReservationsrequestController@ajaxSave');
Route::post('/reservationsrequest/datatable/ajax','ReservationsrequestController@datatable');
Route::post('/reservationsrequest/update/{id}','ReservationsrequestController@update');
//======================== Reservationsrequest Route End ===============================//
//======================== Contactusrequest Route Start ===============================//
Route::get('/contactusrequest/list','ContactusrequestController@show');
Route::get('/contactusrequest/create','ContactusrequestController@create');
Route::get('/contactusrequest/edit/{id}','ContactusrequestController@edit');
Route::get('/contactusrequest/delete/{id}','ContactusrequestController@destroy');
Route::get('/contactusrequest','ContactusrequestController@index');
Route::get('/contactusrequest/export/excel','ContactusrequestController@ExportExcel');
Route::get('/contactusrequest/export/pdf','ContactusrequestController@ExportPDF');
Route::post('/contactusrequest','ContactusrequestController@store');
Route::post('/contactusrequest/ajax','ContactusrequestController@ajaxSave');
Route::post('/contactusrequest/datatable/ajax','ContactusrequestController@datatable');
Route::post('/contactusrequest/update/{id}','ContactusrequestController@update');
//======================== Contactusrequest Route End ===============================//
//======================== Sociallinkmgt Route Start ===============================//
Route::get('/sociallinkmgt/list','SociallinkmgtController@show');
Route::get('/sociallinkmgt/create','SociallinkmgtController@create');
Route::get('/sociallinkmgt/edit/{id}','SociallinkmgtController@edit');
Route::get('/sociallinkmgt/delete/{id}','SociallinkmgtController@destroy');
Route::get('/sociallinkmgt','SociallinkmgtController@index');
Route::get('/sociallinkmgt/export/excel','SociallinkmgtController@ExportExcel');
Route::get('/sociallinkmgt/export/pdf','SociallinkmgtController@ExportPDF');
Route::post('/sociallinkmgt','SociallinkmgtController@store');
Route::post('/sociallinkmgt/ajax','SociallinkmgtController@ajaxSave');
Route::post('/sociallinkmgt/datatable/ajax','SociallinkmgtController@datatable');
Route::post('/sociallinkmgt/update/{id}','SociallinkmgtController@update');
//======================== Sociallinkmgt Route End ===============================//
//======================== Websitesettings Route Start ===============================//
Route::get('/websitesettings/list','WebsitesettingsController@show');
Route::get('/websitesettings/create','WebsitesettingsController@create');
Route::get('/websitesettings/edit/{id}','WebsitesettingsController@edit');
Route::get('/websitesettings/delete/{id}','WebsitesettingsController@destroy');
Route::get('/websitesettings','WebsitesettingsController@index');
Route::get('/websitesettings/export/excel','WebsitesettingsController@ExportExcel');
Route::get('/websitesettings/export/pdf','WebsitesettingsController@ExportPDF');
Route::post('/websitesettings','WebsitesettingsController@store');
Route::post('/websitesettings/ajax','WebsitesettingsController@ajaxSave');
Route::post('/websitesettings/datatable/ajax','WebsitesettingsController@datatable');
Route::post('/websitesettings/update/{id}','WebsitesettingsController@update');
//======================== Websitesettings Route End ===============================//