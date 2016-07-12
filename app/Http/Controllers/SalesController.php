<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\Http\Requests\Sales\createSaleRequest;

use Konrad\Sales;

use Storage;

use Auth;

use App;

use Carbon;

use Mail;

class SalesController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth',['only'=>['create','edit','store']]);
        //$this->middleware('Admin',['only'=>['create','edit']]);      
    }
    
    public function edit($id){
        $sale = Sales::find($id);
        return view('Sales.Edit',compact('id','sale'));
    }

    public function index()
    {

        $sales =  App::make('Sales');
    	return view('Sales.List',compact('sales'));
    }

    public function create()
    {
    	return view('Sales.Create');
    }

    public function store(createSaleRequest $request)
    {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        $code = '';

            for ($i = 0; $i < 8; $i++)
            {
                $code .= $characters[rand(0, $charactersLength -1)];
            }
    
    	
    	$archivo = $request->file('archivo');

    	$nombre_original = $archivo->getClientOriginalName();

        $usuario = Auth::user()->id;

        $datos_validar =["titulo"=>$request->titulo,"archivo"=>$nombre_original,"comentario"=>$request->comentario,"precio"=>$request->precio,"usuario"=>$usuario,"codigo"=>$code];
           // return  $datos_validar;
        $upload=Storage::disk('Sales')->put($nombre_original,  \File::get($archivo) );


       
       if($upload)
         {
           $this->email($request->titulo,$code);
            
           Sales::Create($datos_validar);
         }   

          return redirect('Fotos')->with('message','store');   
    }

    public function email($titulo,$code){
      
        $mytime = Carbon\Carbon::now();
        $Fecha = $mytime->format('d-m-Y');
        $array = array('nombre'=>Auth::user()->name,'titulo'=>$titulo,'code'=>$code); 
        Mail::send('emails.code',$array,function($msj)  {
        $msj->from('us@example.com', 'SisFot');
        $msj->subject('Codigo Generado');
        $msj->to(Auth::user()->email);
        }); 

    }

    public function update(createSaleRequest $request)
    {
        $archivo = $request->file('archivo');
        $nombre_original = $archivo->getClientOriginalName();
        $id = $request->id;
        $sale = Sales::find($id);
        $sale-> fill(['archivo'=>$nombre_original,'titulo'=>$request->titulo,'comentario'=>$request->comentario,'precio'=>$request->precio]);     
        $upload=Storage::disk('Sales')->put($nombre_original,  \File::get($archivo) );         
        if($upload)
        {$sale-> save(); }            
        return redirect('Fotos')->with('message','update');
    }

}
