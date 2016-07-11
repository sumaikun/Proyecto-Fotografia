@extends('layout.layout1')
@section('pageinfo')
  <h1>
    Crear Nueva Venta
    <small>New Sale</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Sales</li>
  </ol>
   @if(count($errors)>0)
        <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <ul>
            @foreach($errors->all() as $error)
              <li>{!!$error!!}</li>
            @endforeach 
           </ul>
         </div>
   @endif 
@overwrite
<style>
</style>
@section('content')

   <div class="box box-primary" style="max-width:500px !important;">
      <div class="box-header with-border">
     </div>
     <div class="box-body">
	         <form method="POST" action=" {{route('ventas.store')}} " accept-charset="UTF-8" enctype="multipart/form-data">

	          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">	        

		  			
	          <div class="form-group">
	            {!!Form::label('Titulo')!!}
	            {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','size'=>'30x5'])!!}
	          </div> 

	          <div class="form-group">
	            {!!Form::label('Adjunto')!!}
	            <input name="archivo" id="archivo" type="file"   class="archivo form-control"  />
	          </div> 

            <div class="form-group">
              {!!Form::label('Comentario')!!}
              {!!Form::textArea('comentario',null,['id'=>'comentario','class'=>'form-control','size'=>'30x5'])!!}
            </div>

            <div class="form-group">
              {!!Form::label('Precio')!!}
              {!!Form::text('precio',null,['id'=>'precio','class'=>'form-control','size'=>'30x5'])!!}
            </div>  

	           <div class="box-footer">
	                     <button type="submit" class="btn btn-primary">Cargar Datos</button>
	             </div>

	        {!!Form::close()!!}
      </div>
    </div>

@stop
