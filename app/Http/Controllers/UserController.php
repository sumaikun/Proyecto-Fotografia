<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\Http\Requests\UserRequest;

use Konrad\User;

use Illuminate\Support\Facades\Storage;

use App;

use Exception;



class UserController extends Controller
{


    

      public function __construct()
    {
        $this->middleware('auth',['only'=>['create','edit','store']]);
        $this->middleware('Admin',['only'=>['create','index']]);      
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

    public function store(UserRequest $request)
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

    public function update(UserRequest $request)
    {

            $archivo = $request->file('file_img');            
            $nombre_original = $archivo->getClientOriginalName();           
            $id = $request->id;
            $user = User::find($id);
            $user-> fill($request->all());
            $user-> fill(['file'=>$nombre_original]);     
            $upload=Storage::disk('imagenesperfil')->put($nombre_original,  \File::get($archivo) );         
            if($upload)
            {$user-> save(); }            
            return redirect('/User')->with('message','update');
    }

    public function edit($id)
    {

    	$user = User::find($id);
        return view('User.Edit',compact('user','id'));
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
         
        
         return redirect('SisFot')->with('message','store');  

       
    }
}
