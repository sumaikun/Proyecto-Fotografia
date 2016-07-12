

@extends('layout.layout1')

@section('pageinfo')
   

  <h1>
    Administración de Usuarios
    <small>User Management</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Users</li>
    <li class="active">List</li>
  </ol>

<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Usuario creado exitosamente</strong>  
</div>
@endif

@if($message == 'update')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Usuario Actualizado exitosamente</strong>  
</div>
@endif

@endsection
<style>
</style>
@section('content')
@include('System.Modal')
<style>
  .img_user
  {
    height:160px;
    max-width:160px;
    width: expression(this.width > 160 ? 160: true);
    margin-left: 2em;
    margin-bottom: 3em;

  }
  .img
  {
    width:250px;
  }
</style>
{{Html::script('plugins/jQuery/jQuery-2.1.4.min.js')}}
{{Html::script('js/getUseredit.js')}}
<div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de usuarios</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" >
                    <tr>
                      <th>Imagen</th>
                      <th>Nombre</th>
                      <th>email</th>
                      <th>rol</th>
                      <th></th>
                    </tr>
                    @foreach($users as $User)
                    <tr>
                      <td class=img> <img src="imagenesperfil/{{$User->file}}" class="img_user"></td>
                      <td> {{$User->name}}</td>
                      <td> {{$User->email}}</td>
                      <td> {{ Konrad\Helpers\OwnLibrary::name_role($User->rol)}}</td>
                      <td>
                       <button href="#" id="{{$User->id}}" class="btn btn-warning useredit" value="{{$User->id}}" data-target='#myModal' data-toggle='modal' onclick="usuario.setid({{$User->id}})">Editar</button>
                    </td>
                    </tr>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

      <script>
        var usuario = new Object();
        usuario.id=0;
        usuario.setid=function(id)
        {
          usuario.id = id;
          //console.log("capture el id"+factor.id);
        }
        
      </script>            
@stop
