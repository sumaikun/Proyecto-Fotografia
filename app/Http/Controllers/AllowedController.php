<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

class AllowedController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('Admin',['only'=>['create','edit']]);      
    }

    public function index() 
    {
       return View('System.Home');
    }
}
