@extends('layout.layout1')
@section('pageinfo')
  <h1>
     Perfil
    <small>User profile</small>
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
.crop {
    float: left;
    margin: .1em 10px .1em 1.5em;
    overflow: hidden; /* this is important */
    position: relative; /* this is important too */
    border: 1px solid #ccc;
    width: 70em;
    height: 30em;
}
.img_profile {
max-width:480px !important;
max-height:480px !important;

      }

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
                  @if(Konrad\Helpers\Profileelements::portada($id)!=null)
                  <p class="crop">{{Html::image('Portada/'.Konrad\Helpers\Profileelements::portada($id))}}
                  </p>
                  @else
                  <p>SisFot</p>
                  @endif
                </div><!-- /.box -->
              </div>
            </div><!-- /.col -->
          </div><!-- ./row -->
          <div class="row">
            <div class="col-md-6">
              <!-- Block buttons -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{Konrad\Helpers\Profileelements::name($id)}}</h3>
                </div>
        
              </div><!-- /.box -->

              <!-- Horizontal grouping -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{Konrad\Helpers\Profileelements::info1title($id)}}</h3>
                </div>
                <div class="box-body table-responsive pad">                 
                      {{Konrad\Helpers\Profileelements::info1($id)}}                                   
                </div>
              </div><!-- /.box -->

              <div class="box" style="max-height:514.5px; max-width:532px;">
                <div class="box-header">
                  <h3 class="box-title">{{Konrad\Helpers\Profileelements::pic1title($id)}}</h3>
                  
                </div>

                <div class="box-body">
                      @if(Konrad\Helpers\Profileelements::pic1($id)!=null)
                      <p>
                      {{Html::image('Portada/'.Konrad\Helpers\Profileelements::pic1($id),'picture',['class'=>'img_profile'])}}  
                      </p>
                      @else
                      <p>SisFot</p>
                      @endif
                   <p>{{Konrad\Helpers\Profileelements::pic1comment($id)}}</p>     
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- split buttons box -->
              <div class="box">
                <div class="box-header">

                  <h3 class="box-title">{{Konrad\Helpers\Profileelements::audiotitle($id)}}</h3>
                </div>
                <div class="box-body">
                 @if(Konrad\Helpers\Profileelements::audio($id)!=null)
                 <audio controls>
                   <source src = "http://localhost/Fotografia/public/Portada/{{Konrad\Helpers\Profileelements::audio($id)}}" type="audio/mpeg">
                 </audio> 
                 @else 
                 <p>SisFot</p>
                 @endif
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
                  <h3 class="box-title">{{Konrad\Helpers\Profileelements::info2title($id)}}</h3>
                </div>
                <div class="box-body">
                      {{Konrad\Helpers\Profileelements::info2($id)}}   
                </div>
              </div><!-- /.box -->

              <!-- Vertical grouping -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{Konrad\Helpers\Profileelements::pic1title($id)}}</h3>
                </div>
                  <div class="box-body table-responsive pad">
                      @if(Konrad\Helpers\Profileelements::pic2($id)!=null)
                      <p>&nbsp&nbsp&nbsp{{Html::image('Portada/'.Konrad\Helpers\Profileelements::pic2($id),'picture',['class'=>'img_profile'])}}</p>
                      @else
                      <p>SisFot</p>
                      @endif
                   <p>{{Konrad\Helpers\Profileelements::pic2comment($id)}}</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /. row -->
        </section>

@stop
