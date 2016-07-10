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
    <div class="table-responsive ocultar_400px">
     <table class ="table">
     <div class="col-md-9">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Inbox</h3>
                      <div class="box-tools pull-right">
                        <div class="has-feedback">
                          <input type="text" class="form-control input-sm" placeholder="Search Mail">
                          <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">

                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          @foreach($messages as $message)
                            <tr>
                              <td><input type="checkbox"></td>
                              <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                              <td class="mailbox-name"><a href="{{route('reademail',$message->id)}}">{{$message->title}}</a></td>
                              <td class="mailbox-subject"><b>{{Konrad\Helpers\OwnLibrary::nombre_usuario($message->get_id)}}</b> -  {{str_limit($message->message, $limit=30, $end="...")}} </td>
                              <td class="mailbox-attachment"></td>
                              <td class="mailbox-date">{{$message->created_at}}</td>
                            </tr>
                           @endforeach 
                          </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                  </div>
                </div>
              </table>                    
         

@stop            