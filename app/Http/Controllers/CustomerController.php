<?php

namespace App\Http\Controllers;

use App\Category;
use App\AdminLog;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Customer";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    

    



    
}
