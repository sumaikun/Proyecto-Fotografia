<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {{Html::style('bootstrap/css/bootstrap.min.css')}}  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {{Html::style('dist/css/AdminLTE.min.css')}}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{Html::style('dist/css/skins/_all-skins.min.css')}}
    {{Html::style('css/loader.css')}}

    {{Html::script('js/jquery.min.js')}}

    {{Html::script('js/getPaymentform.js')}}

    {{Html::script('js/getRatingform.js')}}

    {{Html::style('css/stars.css')}}

    {{Html::script('js/stars.js')}}



 

 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style>
        .backphoto {
          max-width:400px !important;
          max-height:400px !important;
          margin-left: 50px ;
        }
        .sale_img {
          max-width:300px !important;
          max-height:300px !important;

        }

        @media (max-width: 480px) {
          .backphoto
          {
              width:320px ; 
              margin-left: 2px;
              margin-right:10px;
          }

         .sale_img {
          max-width:200px !important;
          max-height:200px !important;
        }
        }  
  </style>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    @include('System.Modal')
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="/" class="navbar-brand"><b>Sis</b>Fot</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section>
                <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="/Fotografia/public/imagenesperfil/{{$user->file}}" alt="User profile picture">
                  <h3 class="profile-username text-center">{{$user->name}}</h3>
                  <p class="text-muted text-center">{{Konrad\Helpers\OwnLibrary::name_role($user->rol)}}</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Fotos</b> <a class="pull-right">{{Konrad\Helpers\OwnLibrary::total_photos($user->id)}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>rating</b> <a class="pull-right"><input id="input-21e" value="{{Konrad\Helpers\OwnLibrary::rate_average($user->id)}}" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" disabled></a>
                    </li>
                    <br>
                    <li class="list-group-item">
                      <b>ventas</b> <a class="pull-right">{{Konrad\Helpers\OwnLibrary::total_sales($user->id)}}</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block" id="gRating" data-target='#myModal' data-toggle='modal'><b>Calificar</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </section>
          <section>
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Mas de {{$user->name}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                    <?php $pictures = Konrad\Helpers\OwnLibrary::showpictures($user->id) ?>
                      <div class="item active">
                      @if($pictures->cover!=null)
                        <img src="/Fotografia/public/Portada/{{$pictures->cover}}" alt="First slide" style ="height:289px; width:520px;">
                      @else  
                        <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                      @endif  
                        <div class="carousel-caption">
                          First Slide
                        </div>
                      </div>
                      <div class="item">
                      @if($pictures->pic1!=null)
                      <img src="/Fotografia/public/Portada/{{$pictures->pic1}}" alt="First slide" style ="height:289px; width:520px;">
                      @else
                        <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=My+SysFot" alt="Second slide">
                      @endif  
                        <div class="carousel-caption">
                          Second Slide
                        </div>
                      </div>
                      <div class="item">
                      @if($pictures->pic2!=null)
                      <img src="/Fotografia/public/Portada/{{$pictures->pic2}}" alt="First slide" style ="height:289px; width:520px;">
                      @else
                        <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                      @endif  
                        <div class="carousel-caption">
                          Third Slide
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
             <div class="col-md-6">
              <div class="box box-default">
                <div class="box-header with-border">
                  <i class="fa fa-bullhorn"></i>
                  <h3 class="box-title">¡Compra tu Fotografía!</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="callout callout-danger">
                    <h4 style="text-align:center"> {{$sale->titulo}} </h4>                    
                  </div>
                  <div class="callout callout-warning backphoto">
                    <p style="text-align:center">
                    <img src="/Fotografia/public/Sales/{{$sale->archivo}}" class="sale_img" alt="First slide" align="middle" >
                    </p>
                  </div>  
                  <div>
                  <button class="btn btn-block btn-success" id="gPayment" data-target='#myModal' data-toggle='modal'>Comprar</button></td>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          </section>
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    {{Html::script('plugins/jQuery/jQuery-2.1.4.min.js')}}
    <!-- Bootstrap 3.3.5 -->
    {{Html::script('bootstrap/js/bootstrap.min.js')}}
    <!-- SlimScroll -->
    {{Html::script('plugins/slimScroll/jquery.slimscroll.min.js')}}
    <!-- FastClick -->
    {{Html::script('plugins/fastclick/fastclick.min.js')}}
    <!-- AdminLTE App -->
    {{Html::script('dist/js/app.min.js')}}
    <!-- AdminLTE for demo purposes -->
    {Html::script('dist/js/demo.js')}}
  </body>
</html>

<script>
var photo = {{$sale->id}}
</script>
