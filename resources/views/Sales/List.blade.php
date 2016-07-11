@extends('layout.layout1')
@section('pageinfo')
  <h1>
    Gestion de ventas
    <small>Resume</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Resume</li>
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
   <?php $message=Session::get('message')?>

    @if($message == 'store')
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Venta gestionada exitosamente</strong>  
      </div>
    @endif 
@overwrite

@section('content')

<style>
  img.img-circle.img_user
  {
    height:100px;
    max-width:100px;
    width: expression(this.width > 90 ? 90: true);
                display: block;
            margin-left: auto;
            margin-right: auto;

  }

  .user_icon{
    max-width:40px;
    max-height:40px;
  }

 .listhead
  {
      width:800px ; 
     display: block;
            margin-left: 100px;
            margin-right: auto;
  }

@media (max-width: 480px) {
  .listhead
  {
      width:380px ; 
      margin-left: -10px;
      margin-right:10px;
  }
}
</style>
    <div class="table-responsive ocultar_400px">
     <table class ="table">
        <thead>
          <tr>          
            <div class="col-md-4 listhead" >
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                  <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
                  @if(Auth::user()->rol==2)
                  <h5 class="widget-user-desc">Fotografo</h5>
                  @else
                  <h5 class="widget-user-desc">Web Designer</h5>
                  @endif
                </div>
                <div class="widget-user-image">
                  <img class="img-circle img_user" src="imagenesperfil/{{Auth::user()->file}}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">{{Konrad\Helpers\OwnLibrary::total_sales(Auth::user()->id)}}</h5>
                        <span class="description-text">VENTAS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header"><input id="input-21e" value="{{Konrad\Helpers\OwnLibrary::rate_average(Auth::user()->id)}}" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" disabled></h5>
                        <span class="description-text">RATING</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">{{Konrad\Helpers\OwnLibrary::total_photos(Auth::user()->id)}}</h5>
                        <span class="description-text">FOTOS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->        
            </tr>
          </thead>
          <tbody>  
                @foreach($sales as $sale)

              <tr>

               <div class="col-md-4 listhead" style="max-height:500px;" >
              <!-- Box Comment -->
                <div class="box box-widget">
                  <div class='box-header with-border'>
                    <div class='user-block'>
                      <img class='img-circle user_icon' src="imagenesperfil/{{Auth::user()->file}}" alt='user image'>
                      <span class='username'><a href="#">{{Auth::user()->name}}</a></span>
                      <span class='description'> {{$sale->titulo}} - {{$sale->created_at}}</span>
                      @if($sale->estado==1)
                      <p>COMPRADA</p>
                      @endif
                    </div><!-- /.user-block -->
                    <div class='box-tools'>
                      <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
                      <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                      <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
                    </div><!-- /.box-tools -->
                  </div><!-- /.box-header -->
                  <div class='box-body'>
                    <img class="img-responsive pad" src="Sales/{{$sale->archivo}}" alt="Photo">
                    <p>{{$sale->comentario}} </p>
                    <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button>
                    <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Like</button>
                    
                  </div><!-- /.box-body -->
                
                  </div><!-- /.box-footer -->
              
                </div style="margin-bottom:100px;"><!-- /.box -->
               </tr> 
               
                @endforeach
             </tbody>
            </table>    
            </div>    
@stop