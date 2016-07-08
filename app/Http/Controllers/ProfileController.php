<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\Portada;

use Storage;

use Auth;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->usuario = Auth::user()->id;
	}

    public function edit($id)
    {
    	return view('Profile.editprofile');
    }

    public function cover(Request $request)
    {
    	$rules = ['archivo'=>'required'];
    	$this->validate($request,$rules);
    	$this->deletefiles('cover');
    	$archivo = $request->file('archivo'); 
    	$nombre_original = $archivo->getClientOriginalName();
    	$upload=Storage::disk('Portada')->put($nombre_original,  \File::get($archivo) );
    	if($upload)
    	{	    			       
        	$this->record($nombre_original,'cover');
			return $this->index();
	    }
	    else {
	    	return "error";
	    }         
        
    }

    public function info(Request $request)
    {
    	$rules = ['titulo'=>'required|max:25','comentario'=>'required|max:280'];          
        $this->validate($request,$rules);        
        $this->record($request->titulo,'info1title');
        $this->record($request->comentario,'info1');
        return $this->index();
    }

    public function pic1(Request $request)
    {
	  	$rules = ['titulo'=>'required|max:25','comentario'=>'required|max:280','archivo'=>'required'];
    	$this->validate($request,$rules);
    	$this->deletefiles('pic1');
    	$archivo = $request->file('archivo'); 
    	$nombre_original = $archivo->getClientOriginalName();
    	$upload=Storage::disk('Portada')->put($nombre_original,  \File::get($archivo) );
    	if($upload)
    	{	
   	        $this->record($request->titulo,'pic1title');
	        $this->record($request->comentario,'pic1comment');
	        $this->record($nombre_original,'pic1');
	        return $this->index();	
    	}           
         else {
	    	return "error";
	    }           
    }    

    public function audio(Request $request)
    {
    	$rules = ['archivo'=>'required','titulo'=>'required|max:25'];          
    	$this->validate($request,$rules);
    	$this->deletefiles('audio');
    	$archivo = $request->file('archivo'); 
    	$nombre_original = $archivo->getClientOriginalName();
    	$upload=Storage::disk('Portada')->put($nombre_original,  \File::get($archivo) );
    	if($upload)
    	{    	    
	    	$this->record($nombre_original,'audio');
	    	$this->record($request->titulo,'audiotitle');
	    	return $this->index();	
    	}	
    	  else {
	    	return "error";
	    }
    }

    public function info2(Request $request)
    {
    	$rules = ['titulo'=>'required|max:25','comentario'=>'required|max:280'];          
        $this->validate($request,$rules);        
        $this->record($request->titulo,'info2title');
        $this->record($request->comentario,'info2');
        return $this->index();
    }

    public function pic2(Request $request)
    {
     	$rules = ['titulo'=>'required|max:25','comentario'=>'required|max:280','archivo'=>'required'];          
        $this->validate($request,$rules);
        $this->deletefiles('pic2');
        $archivo = $request->file('archivo'); 
    	$nombre_original = $archivo->getClientOriginalName();
    	$upload=Storage::disk('Portada')->put($nombre_original,  \File::get($archivo) );
    	if($upload)
    	{    		
	        $this->record($request->titulo,'pic2title');
	        $this->record($request->comentario,'pic2comment');
	        $this->record($nombre_original,'pic2');
	        return $this->index();
	    }
	      else {
	    	return "error";
	    }            
    }        

    public function record($data , $property)
    {
    	$portada = Portada::Where('user_id','=',$this->usuario)->first();

		if($portada==null)
		{
			Portada::create([
			$property=>$data, 	
			'user_id'=>$this->usuario,
			]);
		}	

		else {
			$portada -> fill([$property=>$data,]);
            $portada -> save();
		}

    }

    public function deletefiles($property)
    {
    	$delete = Portada::Where('user_id','=',$this->usuario)->value($property);
    	if($delete!=null)
    	{
    			Storage::disk('Portada')->delete($delete);
    	}	
    }



    public function index() 
    {
        $id = $this->usuario;
    	return view('Profile.profile',compact('id'));
    }

}
