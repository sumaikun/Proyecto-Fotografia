<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\User;

use Illuminate\Support\Facades\Storage;

use App;

use Exception;



class UserController extends Controller
{


    

      public function __construct()
    {
        $this->middleware('auth',['only'=>['create','edit','store']]);
        //$this->middleware('Admin',['only'=>['create','edit']]);      
    }
    

    public function index()
    {
       
       $users =  App::make('Usuarios'); 
       return view('User.list',compact('users'));
    }

    public function create()
    {
    	$interfaz = true;
    	return view('User.Create',compact('interfaz'));
    }

    public function store(Request $request)
    {


    	$archivo = $request->file('file_img');

    	$nombre_original = $archivo->getClientOriginalName();        
         $datos_validar = 
         ["name"=>$request->name,"password"=>$request->password,"email"=>$request->email,"file"=>$nombre_original,"rol"=>$request->role];
           // return  $datos_validar;
       
        /*if($upload)
         {
           
         }*/   
         $upload=Storage::disk('imagenesperfil')->put($nombre_original,  \File::get($archivo) );
         if($upload)
          {
             User::create($datos_validar);
          }  
         
        
         return redirect('/User')->with('message','store');   
           
    	
    }

    public function show()
    {
    	
    }

    public function createclient(Request $request)
    {
        $archivo = $request->file('file_img');

        $nombre_original = $archivo->getClientOriginalName();        
        $datos_validar = 
         ["name"=>$request->name,"password"=>$request->password,"email"=>$request->email,"file"=>$nombre_original,"rol"=>2];
           // return  $datos_validar;
       
        /*if($upload)
         {
           
         }*/   
         $upload=Storage::disk('imagenesperfil')->put($nombre_original,  \File::get($archivo) );
         if($upload)
          {
             User::create($datos_validar);
          }  
         
        
         return redirect('/')->with('message','store');  

       
    }
}
