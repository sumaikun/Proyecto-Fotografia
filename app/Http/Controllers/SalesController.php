<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\Http\Requests\Sales\createSaleRequest;

use Konrad\Sales;

use Storage;

use Auth;

use App;

class SalesController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth',['only'=>['create','edit','store']]);
        //$this->middleware('Admin',['only'=>['create','edit']]);      
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

    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength -1)];
    }
    
    	
    	$archivo = $request->file('archivo');

    	$nombre_original = $archivo->getClientOriginalName();

         $usuario = Auth::user()->id;

        return $datos_validar = 
         ["titulo"=>$request->titulo,"archivo"=>$nombre_original,"comentario"=>$request->comentario,"precio"=>$request->precio,"usuario"=>$usuario,"codigo"=>$randomString];
           // return  $datos_validar;
       $upload=Storage::disk('Sales')->put($nombre_original,  \File::get($archivo) );
       
       if($upload)
         {
           Sales::Create($datos_validar);
         }   

          return redirect('/Ventas')->with('message','store');   
    }

}
