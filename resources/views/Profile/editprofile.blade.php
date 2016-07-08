@extends('layout.layout1')
@section('pageinfo')
  <h1>
    Editar Perfil
    <small>edit profile</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
    <li class="active">profile</li>
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
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-edit"></i>
                  <h3 class="box-title">Portada</h3>
                </div>
                <div class="box-body pad table-responsive">
                  <form method="POST" action="{{route('profile.cover')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">                       
                       <div class="form-group">
                        {!!Form::label('Adjunto')!!}
                        <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/>
                      </div>
                       <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Cargar Datos</button>
                       </div>                       
                  </form>    
                </div><!-- /.box -->
              </div>
            </div><!-- /.col -->
          </div><!-- ./row -->
          <div class="row">
            <div class="col-md-6">
              <!-- Block buttons -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{Auth::user()->name}}</h3>
                </div>
        
              </div><!-- /.box -->

              <!-- Horizontal grouping -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Información</h3>
                </div>
                <div class="box-body table-responsive pad">                 
                   <form method="POST" action="{{route('profile.info')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                       <div class="form-group">
                         {!!Form::label('Titulo')!!}
                          {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','maxlength'=>'25','required'])!!}
                      </div>
                      <div class="form-group">
                        {!!Form::label('Comentario')!!}
                        {!!Form::textArea('comentario',null,['id'=>'comentario','class'=>'form-control','size'=>'30x5','maxlength'=>'280','required'])!!}
                      </div>                      
                       <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Cargar Datos</button>
                       </div>
                    </form>                                    
                </div>
              </div><!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Titulo</h3>
                  
                </div>

                <div class="box-body">
                      <form method="POST" action="{{route('profile.pic1')}}" accept-charset="UTF-8" enctype="multipart/form-data">

                          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">         

                          
                          <div class="form-group">
                            {!!Form::label('Titulo')!!}
                            {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','maxlength'=>'25','required'])!!}
                          </div> 

                          <div class="form-group">
                            {!!Form::label('Adjunto')!!}
                            <input name="archivo" id="archivo" type="file"  class="archivo form-control"  required/>
                          </div> 

                          <div class="form-group">
                            {!!Form::label('Comentario')!!}
                            {!!Form::textArea('comentario',null,['id'=>'comentario','class'=>'form-control','maxlength'=>'280','required'])!!}
                          </div>

                           <div class="box-footer">
                                     <button type="submit" class="btn btn-primary">Cargar Datos</button>
                           </div>

                    </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- split buttons box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Audio</h3>
                </div>
                <div class="box-body">
                  <form method="POST" action="{{route('profile.audio')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <div class="form-group">
                          {!!Form::label('Titulo')!!}
                          {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','maxlength'=>'25','required'])!!}
                        </div>                     
                      <!-- Split button -->
                        <div class="form-group">
                         {!!Form::label('Adjunto')!!}
                         <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/>
                        </div>
                        <div class="box-footer">
                         <button type="submit" class="btn btn-primary">Cargar Datos</button>
                       </div> 
                  </form>

                  <div class="margin">                    
                  </div>
                  <!-- flat split buttons -->
             
                
                </div><!-- /.box-body -->
              </div><!-- end split buttons box -->

              <!-- social buttons -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Social Buttons (By <a href="https://github.com/lipis/bootstrap-social">Lipis</a>)</h3>
                </div>
                <div class="box-body">
                  <a class="btn btn-block btn-social btn-bitbucket">
                    <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                  </a>
                  <a class="btn btn-block btn-social btn-dropbox">
                    <i class="fa fa-dropbox"></i> Sign in with Dropbox
                  </a>
                  <a class="btn btn-block btn-social btn-facebook">
                    <i class="fa fa-facebook"></i> Sign in with Facebook
                  </a>
                  <a class="btn btn-block btn-social btn-flickr">
                    <i class="fa fa-flickr"></i> Sign in with Flickr
                  </a>
                  <a class="btn btn-block btn-social btn-foursquare">
                    <i class="fa fa-foursquare"></i> Sign in with Foursquare
                  </a>
                  <a class="btn btn-block btn-social btn-github">
                    <i class="fa fa-github"></i> Sign in with GitHub
                  </a>
                  <a class="btn btn-block btn-social btn-google">
                    <i class="fa fa-google-plus"></i> Sign in with Google
                  </a>
                  <a class="btn btn-block btn-social btn-instagram">
                    <i class="fa fa-instagram"></i> Sign in with Instagram
                  </a>
                  <a class="btn btn-block btn-social btn-linkedin">
                    <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                  </a>
                  <a class="btn btn-block btn-social btn-tumblr">
                    <i class="fa fa-tumblr"></i> Sign in with Tumblr
                  </a>
                  <a class="btn btn-block btn-social btn-twitter">
                    <i class="fa fa-twitter"></i> Sign in with Twitter
                  </a>
                  <a class="btn btn-block btn-social btn-vk">
                    <i class="fa fa-vk"></i> Sign in with VK
                  </a>
                  <br>
                  <div class="text-center">
                    <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                    <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                    <a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
                    <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                    <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                    <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
                  </div>
                </div>
              </div><!-- /.box -->

            </div><!-- /.col -->
            <div class="col-md-6">
              <!-- Application buttons -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Opciones</h3>
                </div>
                <div class="box-body">               
                 
                  <a class="btn btn-app">
                    <span class="badge bg-yellow">3</span>
                    <i class="fa fa-bullhorn"></i> Notifications
                  </a>    
                  <a class="btn btn-app">
                    <span class="badge bg-purple">891</span>
                    <i class="fa fa-users"></i> Users
                  </a>            
                  <a class="btn btn-app">
                    <span class="badge bg-aqua">12</span>
                    <i class="fa fa-envelope"></i> Inbox
                  </a>      
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- Various colors -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Titulo</h3>
                </div>
                <div class="box-body">

                  <form method="POST" action="{{route('profile.info2')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">                  
                       <div class="form-group">
                      {!!Form::label('Titulo')!!}
                      {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','maxlength'=>'25','required'])!!}
                      </div>
                      <div class="form-group">
                      {!!Form::label('Comentario')!!}
                      {!!Form::textArea('comentario',null,['id'=>'comentario','class'=>'form-control','size'=>'30x5','maxlength'=>'280','required'])!!}
                      </div>
                      <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Cargar Datos</button>
                       </div>                      
                   </form>      
                </div>
              </div><!-- /.box -->

              <!-- Vertical grouping -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Titulo</h3>
                </div>
                  <div class="box-body table-responsive pad">
                  <form method="POST" action="{{route('profile.pic2')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                          <div class="form-group">
                            {!!Form::label('Titulo')!!}
                            {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','maxlength'=>'25','required'])!!}
                          </div> 

                          <div class="form-group">
                            {!!Form::label('Adjunto')!!}
                            <input name="archivo" id="archivo" type="file"  class="archivo form-control"  required/>
                          </div> 

                          <div class="form-group">
                            {!!Form::label('Comentario')!!}
                            {!!Form::textArea('comentario',null,['id'=>'comentario','class'=>'form-control','maxlength'=>'280','required'])!!}
                          </div>

                           <div class="box-footer">
                                 <button type="submit" class="btn btn-primary">Cargar Datos</button>
                           </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /. row -->
        </section>

@stop
