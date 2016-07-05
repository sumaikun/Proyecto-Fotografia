<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Auth;
use Session;
use Redirect;

class LogController extends Controller
{
    public function store(Request $request)
    {    	
       $userdata=["email" =>$request->email,"password"=>$request->password];
      if (Auth::attempt($userdata,false))
           {
                return Redirect::to('inicio');
                 
           }
        else 
           {
               return redirect('/SisFot')->with('message','failed');
           }     
    }


    public function logout()
   {
        Auth::logout();
        return Redirect::to('/');
   }
}
