<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\User;

use Storage;

class UserController extends Controller
{


    

      public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('Admin',['only'=>['create','edit']]);      
    }
    

    public function index()
    {
       
       $users = User::All(); 
       return view('User.list',compact('users'));
    }

    public function create()
    {
    	
    	return view('User.Create');
    }

    public function store(Request $request)
    {

    	$archivo = $request->file('file_img');
    	$nombre_original = $archivo->getClientOriginalName();        
         $datos_validar = 
        ["name"=>$request->name,"password"=>$request->password,"email"=>$request->email,"file"=>$nombre_original,"rol"=>$request->role];
           // return  $datos_validar;
        $upload=Storage::disk('imagenesperfil')->put($nombre_original,  \File::get($archivo) );
        /*if($upload)
         {
            User::create($datos_validar);
         }*/   
         $users = User::All(); 
         return view('User.List',compact('users'))->with('message','store');   
           
    	
    }

    public function show()
    {
    	
    }
}
