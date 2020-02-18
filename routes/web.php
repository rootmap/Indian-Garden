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
Route::post('/crud', 'HomeController@crudgenarate')->name('crudgenarate');


Route::get("form","IndexController@adminIndex");
Route::get("table","IndexController@adminTable");

Route::get("/","IndexController@index");
Route::get("index","IndexController@index");
Route::get("our-history","IndexController@ourHistory");
Route::get("menu","IndexController@menu");
Route::get("events","IndexController@event");
Route::get("gallery","IndexController@gallery");
Route::get("reservation","IndexController@reservation");