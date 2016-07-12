
	        <form method="POST" action="Sales/{{$id}}" accept-charset="UTF-8" enctype="multipart/form-data">

	        	<input name="_method" type="hidden" value="PUT">
	        	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	        	<input type="hidden" name="id" value="{{$id}}" id="usuario">

			       
              <div class="form-group">
              <label for="Titulo">Titulo</label>
              <input id="titulo" class="form-control" size="30x5" name="titulo" type="text" value="{{$sale->titulo}}" required>
            </div> 

            <div class="form-group">
              {!!Form::label('Adjunto')!!}
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  />
            </div> 

            <div class="form-group">
              <label for="Comentario">Comentario</label>
              <textarea id="comentario" class="form-control" value="{{$sale->comentario}}" name="comentario" cols="30" rows="5" required></textarea>
            </div>

            <div class="form-group">
             <input id="precio" class="form-control" size="30x5" name="precio" value="{{$sale->precio}}" type="text" required>
            </div>  
                        
	       
				
				<input class="btn btn-primary" type="submit" value="Actualizar"> 
	        </form>


