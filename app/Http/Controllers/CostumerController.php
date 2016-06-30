<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Storage;

use Konrad\Sales;

use Konrad\User;

class CostumerController extends Controller
{
    public function download(Request $request)
    {
    	$codigo = $request->code;

    	$file=Sales::Where('codigo','=',$codigo)->value('archivo');
    	if($file)
    	{  
    	 $file_path = public_path('Sales/'.$file);
            return response()->download($file_path);
        }
        else{
        	return redirect('/')->with('message','invalid');  
        }     
    }

    public function getinfo(Request $request)
    {
        $codigo = $request->code;

        $sale=Sales::Where('codigo','=',$codigo)->first();

        if($sale!=null)
        {  
             $user = User::Where('id','=',$sale->usuario)->first();       
             return view('Costumers.Confirm',compact('sale','user'));;
        }
        else{
            return redirect('/')->with('message','invalid');  
        }     

       
    }

    public function PaymentForm()
    {
        return "hello";
    }
}
