

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
                  <h3 class="box-title">Crear Usuario</h3>
                </div>
                  {!!Form::open(['route'=>'User.store', 'method'=>'POST', 'files'=>true])!!}
                      <div class="box-body">
                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa Nombre Usuario" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dirección Correo</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa Correo" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Contraseña</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa Contraseña" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Imagen de perfil</label>
                          <input type="file" id="File" name='file_img' required>
                          <p class="help-block">Solo se permiten archivos png y jpg .</p>
                        </div>
                        <!--<div class="checkbox">
                          <label>
                            <input type="checkbox"> C
                          </label>
                        </div>-->
                          <div class="form-group">
                      <label>Rol</label>
                      <select class="form-control" name=role>
                        <option value=0>Selecciona</option>
                        <option value=1>Administrador</option>
                        <option value=2>Fotografo</option>
                       
                      </select>
                      </div><!-- /.box-body -->
                     
                      <div class="box-footer">
                         {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                      </div>
                  
                
                  {!!Form::close()!!}
                 </div> 
@stop
