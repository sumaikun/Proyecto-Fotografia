<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresa tu Codigo</title>
    {{Html::style('css/codeinsert.css')}}
    

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <style>
      .link{
        text-decoration: none;
      }
      .link:hover {
        color: #0B0B3B;
      }
    </style>
  </head>
  <body>


     <?php $message=Session::get('message')?>

        <form method="POST" action="{{route('Costumer.info')}}" accept-charset="UTF-8" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">      
      <div class="header">
         <p>Enviar Codigo</p>
      </div>
      <div class="description">
        <p>Ingreso tu codigo para la compra de tu foto , ¡Conocenos! Gracias :D</p>
      </div>
      <div class="input">
        <input type="text" class="button" id="email" name="code" placeholder="insert code here">
        <input type="submit" class="button" id="submit" value="¡Enviar!">
      </div>
      @if($message == 'invalid')
        <div class="description">
        <p style="color:red;">Codigo no existe, es invalido ¡Revísalo!</p>
      </div> 
      @endif 
      @if($message == 'notexistcard')
        <div class="description">
        <p style="color:red;">Los datos de la tarjeta estan equivocados revize e intente nuevamente</p>
      </div> 
      @endif
                
      <div class="description">
        <a href="SisFot" class="link"><p>¡Si posees una cuenta ingresa aqui!</p></a>
      </div>
    </form>
  </body>
</html>