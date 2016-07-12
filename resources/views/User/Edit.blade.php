
	        <form method="POST" action="User/{{$id}}" accept-charset="UTF-8" enctype="multipart/form-data">

	        	<input name="_method" type="hidden" value="PUT">
	        	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	        	<input type="hidden" name="id" value="{{$id}}" id="usuario">
			    <div class="form-group">
	            <label for="Nombre">Nombre</label>
	            <input id="nombre" class="form-control" required="required" maxlength="40" name="nombre" type="text" value="{{$user->name}}" required>
	            </div>
	            <div class="form-group">
                <label for="exampleInputEmail1">Dirección Correo</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Ingresa Correo" required>
                </div>
                <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe tener al menos una letra minuscula y una letra mayuscula y un numero para ingresarla" required>
                </div>
                <div class="form-group">
              <label for="exampleInputFile">Imagen de perfil</label>
              <input type="file" id="File" name='file_img' required>
              <p class="help-block">Solo se permiten archivos png y jpg .</p>
            </div>
                
          <div class="form-group">
                            
                          <label>Rol</label>
                          <select class="form-control" name=role required>
                            <option value="">Selecciona</option>
                            <option value=1>Administrador</option>
                            <option value=2>Fotografo</option>
                              
                          </select>
                          </div><!-- /.box-body -->
                        </div>
                        
	       
				
				<input class="btn btn-primary" type="submit" value="Actualizar"> 
	        </form>


