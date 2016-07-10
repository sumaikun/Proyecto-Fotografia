@extends('layout.layout1')
@section('pageinfo')
  <h1>
    Administración de Usuarios
    <small>User Management</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Users</li>
  </ol>
@overwrite
@section('content')
    
    <div class="box box-primary" style="max-width:500px !important;">
                <div class="box-header with-border">
                  <h3 class="box-title">Mandar Mensaje</h3>
                </div>
                   
                  <form method="POST" action=" {{route('Message.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                  <input type="hidden" name="sendid" value="{{$id}}" id="sendid">
                    
                  <div class="box-body">
                        <div class="form-group">
                        	<label>Titulo</label>
                        	<input type="text" class="form-control" id="title" name="title" placeholder="Ingresa Titulo" maxlength="40"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mensaje</label>                        {!!Form::textarea('message',null,['id'=>'message','class'=>'form-control','size'=>'30x5','required'])!!}
                        </div>

                      	<div class="box-footer">
                        	 {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                     	 </div>
                    
                
                         {!!Form::close()!!}
                 </div> 
</div>   

@stop
