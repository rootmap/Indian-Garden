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
Route::get("gallery","IndexController@gallery");
Route::get("reservation","IndexController@reservation");
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
//======================== Test Route Start ===============================//
Route::get('/test/list','TestController@show');
Route::get('/test/create','TestController@create');
Route::get('/test/edit/{id}','TestController@edit');
Route::get('/test/delete/{id}','TestController@destroy');
Route::get('/test','TestController@index');
Route::get('/test/export/excel','TestController@ExportExcel');
Route::get('/test/export/pdf','TestController@ExportPDF');
Route::post('/test','TestController@store');
Route::post('/test/ajax','TestController@ajaxSave');
Route::post('/test/datatable/ajax','TestController@datatable');
Route::post('/test/update/{id}','TestController@update');
//======================== Test Route End ===============================//
//======================== Testfile Route Start ===============================//
Route::get('/testfile/list','TestfileController@show');
Route::get('/testfile/create','TestfileController@create');
Route::get('/testfile/edit/{id}','TestfileController@edit');
Route::get('/testfile/delete/{id}','TestfileController@destroy');
Route::get('/testfile','TestfileController@index');
Route::get('/testfile/export/excel','TestfileController@ExportExcel');
Route::get('/testfile/export/pdf','TestfileController@ExportPDF');
Route::post('/testfile','TestfileController@store');
Route::post('/testfile/ajax','TestfileController@ajaxSave');
Route::post('/testfile/datatable/ajax','TestfileController@datatable');
Route::post('/testfile/update/{id}','TestfileController@update');
//======================== Testfile Route End ===============================//
//======================== Testfile Route Start ===============================//
Route::get('/testfile/list','TestfileController@show');
Route::get('/testfile/create','TestfileController@create');
Route::get('/testfile/edit/{id}','TestfileController@edit');
Route::get('/testfile/delete/{id}','TestfileController@destroy');
Route::get('/testfile','TestfileController@index');
Route::get('/testfile/export/excel','TestfileController@ExportExcel');
Route::get('/testfile/export/pdf','TestfileController@ExportPDF');
Route::post('/testfile','TestfileController@store');
Route::post('/testfile/ajax','TestfileController@ajaxSave');
Route::post('/testfile/datatable/ajax','TestfileController@datatable');
Route::post('/testfile/update/{id}','TestfileController@update');
//======================== Testfile Route End ===============================//
//======================== Testtwo Route Start ===============================//
Route::get('/testtwo/list','TesttwoController@show');
Route::get('/testtwo/create','TesttwoController@create');
Route::get('/testtwo/edit/{id}','TesttwoController@edit');
Route::get('/testtwo/delete/{id}','TesttwoController@destroy');
Route::get('/testtwo','TesttwoController@index');
Route::get('/testtwo/export/excel','TesttwoController@ExportExcel');
Route::get('/testtwo/export/pdf','TesttwoController@ExportPDF');
Route::post('/testtwo','TesttwoController@store');
Route::post('/testtwo/ajax','TesttwoController@ajaxSave');
Route::post('/testtwo/datatable/ajax','TesttwoController@datatable');
Route::post('/testtwo/update/{id}','TesttwoController@update');
//======================== Testtwo Route End ===============================//
//======================== Testthree Route Start ===============================//
Route::get('/testthree/list','TestthreeController@show');
Route::get('/testthree/create','TestthreeController@create');
Route::get('/testthree/edit/{id}','TestthreeController@edit');
Route::get('/testthree/delete/{id}','TestthreeController@destroy');
Route::get('/testthree','TestthreeController@index');
Route::get('/testthree/export/excel','TestthreeController@ExportExcel');
Route::get('/testthree/export/pdf','TestthreeController@ExportPDF');
Route::post('/testthree','TestthreeController@store');
Route::post('/testthree/ajax','TestthreeController@ajaxSave');
Route::post('/testthree/datatable/ajax','TestthreeController@datatable');
Route::post('/testthree/update/{id}','TestthreeController@update');
//======================== Testthree Route End ===============================//
//======================== Name Route Start ===============================//
Route::get('/name/list','NameController@show');
Route::get('/name/create','NameController@create');
Route::get('/name/edit/{id}','NameController@edit');
Route::get('/name/delete/{id}','NameController@destroy');
Route::get('/name','NameController@index');
Route::get('/name/export/excel','NameController@ExportExcel');
Route::get('/name/export/pdf','NameController@ExportPDF');
Route::post('/name','NameController@store');
Route::post('/name/ajax','NameController@ajaxSave');
Route::post('/name/datatable/ajax','NameController@datatable');
Route::post('/name/update/{id}','NameController@update');
//======================== Name Route End ===============================//
//======================== Testfour Route Start ===============================//
Route::get('/testfour/list','TestfourController@show');
Route::get('/testfour/create','TestfourController@create');
Route::get('/testfour/edit/{id}','TestfourController@edit');
Route::get('/testfour/delete/{id}','TestfourController@destroy');
Route::get('/testfour','TestfourController@index');
Route::get('/testfour/export/excel','TestfourController@ExportExcel');
Route::get('/testfour/export/pdf','TestfourController@ExportPDF');
Route::post('/testfour','TestfourController@store');
Route::post('/testfour/ajax','TestfourController@ajaxSave');
Route::post('/testfour/datatable/ajax','TestfourController@datatable');
Route::post('/testfour/update/{id}','TestfourController@update');
//======================== Testfour Route End ===============================//
//======================== Testfive Route Start ===============================//
Route::get('/testfive/list','TestfiveController@show');
Route::get('/testfive/create','TestfiveController@create');
Route::get('/testfive/edit/{id}','TestfiveController@edit');
Route::get('/testfive/delete/{id}','TestfiveController@destroy');
Route::get('/testfive','TestfiveController@index');
Route::get('/testfive/export/excel','TestfiveController@ExportExcel');
Route::get('/testfive/export/pdf','TestfiveController@ExportPDF');
Route::post('/testfive','TestfiveController@store');
Route::post('/testfive/ajax','TestfiveController@ajaxSave');
Route::post('/testfive/datatable/ajax','TestfiveController@datatable');
Route::post('/testfive/update/{id}','TestfiveController@update');
//======================== Testfive Route End ===============================//
//======================== Testsix Route Start ===============================//
Route::get('/testsix/list','TestsixController@show');
Route::get('/testsix/create','TestsixController@create');
Route::get('/testsix/edit/{id}','TestsixController@edit');
Route::get('/testsix/delete/{id}','TestsixController@destroy');
Route::get('/testsix','TestsixController@index');
Route::get('/testsix/export/excel','TestsixController@ExportExcel');
Route::get('/testsix/export/pdf','TestsixController@ExportPDF');
Route::post('/testsix','TestsixController@store');
Route::post('/testsix/ajax','TestsixController@ajaxSave');
Route::post('/testsix/datatable/ajax','TestsixController@datatable');
Route::post('/testsix/update/{id}','TestsixController@update');
//======================== Testsix Route End ===============================//
//======================== Testseven Route Start ===============================//
Route::get('/testseven/list','TestsevenController@show');
Route::get('/testseven/create','TestsevenController@create');
Route::get('/testseven/edit/{id}','TestsevenController@edit');
Route::get('/testseven/delete/{id}','TestsevenController@destroy');
Route::get('/testseven','TestsevenController@index');
Route::get('/testseven/export/excel','TestsevenController@ExportExcel');
Route::get('/testseven/export/pdf','TestsevenController@ExportPDF');
Route::post('/testseven','TestsevenController@store');
Route::post('/testseven/ajax','TestsevenController@ajaxSave');
Route::post('/testseven/datatable/ajax','TestsevenController@datatable');
Route::post('/testseven/update/{id}','TestsevenController@update');
//======================== Testseven Route End ===============================//
//======================== Testnine Route Start ===============================//
Route::get('/testnine/list','TestnineController@show');
Route::get('/testnine/create','TestnineController@create');
Route::get('/testnine/edit/{id}','TestnineController@edit');
Route::get('/testnine/delete/{id}','TestnineController@destroy');
Route::get('/testnine','TestnineController@index');
Route::get('/testnine/export/excel','TestnineController@ExportExcel');
Route::get('/testnine/export/pdf','TestnineController@ExportPDF');
Route::post('/testnine','TestnineController@store');
Route::post('/testnine/ajax','TestnineController@ajaxSave');
Route::post('/testnine/datatable/ajax','TestnineController@datatable');
Route::post('/testnine/update/{id}','TestnineController@update');
//======================== Testnine Route End ===============================//
//======================== Testten Route Start ===============================//
Route::get('/testten/list','TesttenController@show');
Route::get('/testten/create','TesttenController@create');
Route::get('/testten/edit/{id}','TesttenController@edit');
Route::get('/testten/delete/{id}','TesttenController@destroy');
Route::get('/testten','TesttenController@index');
Route::get('/testten/export/excel','TesttenController@ExportExcel');
Route::get('/testten/export/pdf','TesttenController@ExportPDF');
Route::post('/testten','TesttenController@store');
Route::post('/testten/ajax','TesttenController@ajaxSave');
Route::post('/testten/datatable/ajax','TesttenController@datatable');
Route::post('/testten/update/{id}','TesttenController@update');
//======================== Testten Route End ===============================//
//======================== Testhash Route Start ===============================//
Route::get('/testhash/list','TesthashController@show');
Route::get('/testhash/create','TesthashController@create');
Route::get('/testhash/edit/{id}','TesthashController@edit');
Route::get('/testhash/delete/{id}','TesthashController@destroy');
Route::get('/testhash','TesthashController@index');
Route::get('/testhash/export/excel','TesthashController@ExportExcel');
Route::get('/testhash/export/pdf','TesthashController@ExportPDF');
Route::post('/testhash','TesthashController@store');
Route::post('/testhash/ajax','TesthashController@ajaxSave');
Route::post('/testhash/datatable/ajax','TesthashController@datatable');
Route::post('/testhash/update/{id}','TesthashController@update');
//======================== Testhash Route End ===============================//