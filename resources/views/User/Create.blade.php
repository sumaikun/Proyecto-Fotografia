

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
    
     @include('User.forms.formcreate')  

@stop
