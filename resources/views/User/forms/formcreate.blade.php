<div class="box box-primary" style="max-width:500px !important;">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Usuario</h3>
                </div>
                   @if(isset($interfaz))
                  {!!Form::open(['route'=>'User.store', 'method'=>'POST', 'files'=>true])!!}
                  @else
                  <form method="POST" action="/newUser" accept-charset="UTF-8" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    @endif  
                      <div class="box-body">
                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa Nombre Usuario" pattern='^[A-Za-z ]+$' title="no se admiten valores numericos" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dirección Correo</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa Correo" required>
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
                        <!--<div class="checkbox">
                          <label>
                            <input type="checkbox"> C
                          </label>
                        </div>-->
                        @if(isset($interfaz))

                              <div class="form-group">
                            
                          <label>Rol</label>
                          <select class="form-control" name=role required>
                            <option value="">Selecciona</option>
                            <option value=1>Administrador</option>
                            <option value=2>Fotografo</option>
                           
                          </select>
                          </div><!-- /.box-body -->
                        
                            
                        @endif
                      <div class="box-footer">
                         {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                      </div>
                    
                
                         {!!Form::close()!!}
                 </div> 
</div>                 