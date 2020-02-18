<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function adminIndex(){
    	return view('admin.pages.index');
    }
    public function adminTable(){
    	return view('admin.pages.tables');
    }
    public function index(){
    	return view('site.pages.index');
    }
    public function ourHistory(){
    	return view('site.pages.our-history');
    }
    public function menu(){
    	return view('site.pages.menu');
    }
    public function event(){
    	return view('site.pages.events');
    }
    public function gallery(){
    	return view('site.pages.gallery');
    }
    public function reservation(){
    	return view('site.pages.reservation');
    }
}
