<?php

namespace Konrad\Http\Controllers;

use Illuminate\Http\Request;

use Konrad\Http\Requests;

use Konrad\Http\Requests\Messages\MessageRequest;

use Konrad\Message;

use Auth;

class MessageController extends Controller
{
	public function __construct()
	{
		$this->usuario = Auth::user()->id;
	}

    public function store(Request $request)
    {
    	Message::create(['title'=>$request->title,
    		'message'=>$request->message,
    		'send_id'=>$request->sendid,
    		'get_id'=>$this->usuario,
    		'state'=>0]);

    	return redirect('perfil')->with('message','sendemail');


    }

    public function index($id)
    {
       if($this->usuario == $id)
      { 
      	$id = $this->usuario; 
      	$messages = Message::Where('send_id','=',$id)->get();
      	return view('Message.Mail',compact('messages'));
      } 
      else 
      {
      	return view('Message.create',compact('id'));
 	  }	
    }

    public function read($id)
    {
    	$message = Message::Where('id','=',$id)->first();
      $message -> fill(['state'=>1,]);
      $message ->save();

    	return view('Message.Read',compact('message'));
    }
}
