

@extends('layout.layout1')
@section('pageinfo')
  <h1>
    Pagina principal
    <small>Home</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
  </ol>
@overwrite
<style>
</style>
@section('content')
<?php $message=Session::get('message')?>

@if($message == 'noAllowed')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Acceso Denegado</strong>  
</div>
@endif


@stop
