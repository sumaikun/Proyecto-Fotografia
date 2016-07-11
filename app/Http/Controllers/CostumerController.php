<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\Http\Requests\Sales\CreatepurchaseRequest;

use Storage;

use Konrad\Sales;

use Konrad\User;

use Konrad\creditcard;

use Konrad\Purchase;

use Konrad\Rating;

use Konrad\Helpers\Validation;

use Carbon;

use Mail;

use Konrad\Helpers\Ownlibrary;

class CostumerController extends Controller
{
    public function download($code)
    {
    	
        $codigo = $code;
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

    public function email($nombre,$foto,$correo){
          
            $mytime = Carbon\Carbon::now();
            $Fecha = $mytime->format('d-m-Y');
            $array = array('Fecha'=>$Fecha,'nombre'=>$nombre,'foto'=>$foto); 
            Mail::send('emails.sale',$array,function($msj) use($correo) {
            $msj->from('us@example.com', 'SisFot');
            $msj->subject('Venta realizada felicitaciones');
            $msj->to($correo);
            }); 

    }

    public function getinfo(Request $request)
    {
        $codigo = $request->code;

        $sale=Sales::Where('codigo','=',$codigo)->first();

        if($sale!=null)
        {  
            if($sale->estado==1)
            {
                return $this->download($sale->codigo);
            }   
            else {
             $user = User::Where('id','=',$sale->usuario)->first();       
             return view('Costumers.Confirm',compact('sale','user'));   
            } 
             
        }
        else{
            return redirect('/')->with('message','invalid');  
        }     

       
    }

    public function PaymentForm($id)
    {   

        $sale=Sales::Where('id','=',$id)->first();
        if($sale->estado==1)
        {
            return "La fotografia ya fue comprada";
        }   
        else {

        return view('Costumers.Payment',compact('sale'));

        } 
    }

    public function store(CreatepurchaseRequest $request)
    {
        $d = date_parse_from_format("Y-m-d", $request->expired);
        $month = $d["month"];
        $y = date_parse_from_format("Y-m-d", $request->expired);
        $month = $d["month"];
        $year =  $y["year"];        


       
        //CreatepurchaseRequest $request
        $table= new creditcard();
        $property='card_number';
        $property2='security_code';
        $property3='expiry_month';
        $property4='expiry_year';

        
       
        
        $validation = Validation::purchase_validation($table,$property,$property2,$property3,$property4,$request->card,$request->security,$month,$year);

           

         if($validation='allow')
         {

            $nombre = Ownlibrary::nombre_usuario($request->iduser);
            $foto = Ownlibrary::nombre_foto($request->idsale);
            $correo = Ownlibrary::correo_usuario($request->iduser);



           $this->email($nombre,$foto,$correo);

            $sale = Sales::find($request->idsale);
            $sale -> fill(['estado'=>1]);
            $sale -> save();

            purchase::create(['name'=>$request->name, 'credit_card'=>$request->card, 'zip'=>$request->zip , 'user_id'=>$request->iduser , 'sale_id'=>$request->idsale]);

            

            return "Compra realizada con exito, ingrese el codigo nuevamente y descargue la imagen";

         }   

         else{

           return "los datos de la tarjeta estan errados , revize e intente nuevamente";

         }

        
    }

    public function rateform($id) {
        $condition = Rating::Where('photo','=',$id)->first();
        if($condition == null)
        {$sale=Sales::Where('id','=',$id)->first();
        return view('Costumers.Rating',compact('sale')); }
        else {
            echo "Ya se califico";
        }
    }

    public function rate(Request $request)
    {
         Rating::create(['calification'=>$request->ratevalue,
            'user_id'=>$request->usuario,
            'photo'=>$request->photo,
            ]);
         echo "calificacion realizada";
    }
}
