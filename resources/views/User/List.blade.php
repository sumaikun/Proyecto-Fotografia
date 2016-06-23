

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
    <strong>Usuario Creado exitosamente</strong>  
    </div>
    @endif

@overwrite
<style>
</style>
@section('content')
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
                    </tr>
                    @foreach($users as $User)
                    <tr>
                      <td class=img> <img src="../../imagenesperfil/{{$User->file}}" class="img_user"></td>
                      <td> {{$User->name}}</td>
                      <td> {{$User->email}}</td>
                      <td> {{ Konrad\Helpers\OwnLibrary::name_role($User->rol)}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
@stop
