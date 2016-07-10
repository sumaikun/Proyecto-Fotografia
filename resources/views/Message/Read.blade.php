@extends('layout.layout1')
@section('pageinfo')
  <h1>
    Gestion de Correo
    <small>Resume</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Resume</li>
  </ol>

@overwrite

@section('content')
               <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3>{{$message->title}}</h3>
                    <h5>From: {{Konrad\Helpers\OwnLibrary::nombre_usuario($message->get_id)}} <span class="mailbox-read-time pull-right">{{$message->created_at}}</span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                  {{$message->message}}
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
@stop                