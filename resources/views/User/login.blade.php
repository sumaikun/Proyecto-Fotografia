<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Laravel | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->    
    {{Html::style('bootstrap/css/bootstrap.min.css')}}
    <!-- Font Awesome -->
    {{Html::style('fonts/font-awesome.min.css')}}
    <!-- Ionicons -->
    {{Html::style('fonts/ionicons.min.css')}}   
    <!-- Theme style -->
    {{Html::style('dist/css/AdminLTE.min.css')}}
    <!-- iCheck -->
    {{Html::style('plugins/iCheck/square/blue.css')}}
    <link rel="stylesheet" href="">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <?php $message=Session::get('message')?>

    @if($message == 'failed')
    <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Datos incorrectos</strong>  
    </div>
    @endif


    @if($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Usuario Creado , verifique la cuenta por correo electronico</strong>  
    </div>
    @endif


  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Sistema</b>Fotografia</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Ingrese al sistema</p>
       {!!Form::open(['route'=>'Login.store','method'=>'POST'])!!}
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name=email>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name=password>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
         
          <div class="row">            
            <div class="col-xs-4">
            
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

            </div><!-- /.col -->
          </div>
       {!!Form::close()!!}
     <span style='margin-left:200px !important;'  data-target='#myModal' data-toggle='modal'><a href='#'>Crear Nueva Cuenta</a></span>
       

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- Button trigger modal -->

@include('System.Modal')

<!-- Modal -->

    <!-- jQuery 2.1.4 -->
    {{Html::script('plugins/jQuery/jQuery-2.1.4.min.js')}}
    <!-- Bootstrap 3.3.5 -->
    {{Html::script('bootstrap/js/bootstrap.min.js')}}
    <!-- iCheck -->
    {{Html::script('plugins/iCheck/icheck.min.js')}}    
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
