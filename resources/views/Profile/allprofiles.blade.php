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

.img_profile
 {
max-width:350px !important;
max-height:350px !important;
margin-left: 80px;   }
.profiles {
  
    margin-left: 300px;
   
  
}      
@media (max-width: 480px) {
  .profiles
  {
        display: block;
        margin-left: 1px;
  }
  .img_profile
 {
  max-width:300px !important;
max-height:300px !important;
 margin-left: 3px;
   }

</style>
@section('content')
<div class="profiles">
    <div class="table-responsive ocultar_400px">
     <table class ="table ">
  @foreach($users as $user)
            <tr>
            <div class="box" style="max-height:514.5px; max-width:532px;">
                <div class="box-header">
                  <h3 class="box-title"><strong>{{$user->name}}</strong></h3>
                </div>
                <div class="box-body">
                      {{Html::image('imagenesperfil/'.$user->file,'picture',['class'=>'img_profile'])}}  
                         <a class="btn btn-app" href="{{route('profile.user',$user->id)}}" >
                    <i class="fa fa-edit"></i> Ver Perfil
                  </a> 
                </div>
              </div>
            </tr>
  @endforeach
      </table>
    </div>
  </div>    
@stop