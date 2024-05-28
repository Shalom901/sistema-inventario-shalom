<link rel="stylesheet" href="vistas/css/usuarios.css">

<div class="content-wrapper">
      <div class="container-header">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Modulo de Registrar Usuarios</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <button class="btn btn-secondary" data-toggle="modal" data-target="#modalAgregarCategoria" style="background-color: #343a40;">
                <i class="nav-icon fas fa-user"> Agregar usuarios</i>  
                </button>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Modal Categoría -->
    <div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="display: grid; width: 660px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Usuarios</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form" >
              <p class="title">Regisrar Usuarios </p>
              <p class="message">Ingrese sus datos. </p>
                  <div class="flex" style="position: relative; display: flex; gap: 144px;">

                  <label>
                      <input style="width: 220px;" class="input" type="text" placeholder="" required="">
                      <span>Nombre </span>
                  </label>

                  <label>
                      <input style="width: 220px;" class="input" type="text" placeholder="" required="">
                      <span>Usuario</span>
                  </label>
              </div>  
              
              <div style="position: relative; display: flex; gap: 144px;">
                <label>
                    <span>Perfil</span>
                    <div style="width: 220px;" class="input-group">
                      <select class="form-control select2" id="seleccionarCliente" name="slecionarCliente" required>
                        <option value="">Administrador</option>
                        <option value="">Asistente</option>
                        <option value="">Controlador</option>
                      </select>
                    </div>
                </label>
                
                <label>
                  <input type="password" style="width: 220px;" class="input" type="email" placeholder="" required="">
                  <span>Password</span>
                  </label>
              </div> 
              <div class="panel">
                <input type="file" id="nuevaFoto" name="nuevaFoto">
                <p class="help-block">Peso máximo de la foto 200 MB</p>
                <img src="vistas/img/usuarios/default/anonymous.png" alt="img" class="img-thumbnail" width="100px">
              </div>
              
              <p class="signin">Olvidaste tu contraseña ? <a href="#">Iniciar Sesión</a> </p>
          </form>
          </div> 
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: red; border-radius: 10px;"> Cerrar</button>
            <button type="submit" class="btn btn-primary" style="background-color: #00bfff; border-radius: 10px;"><i class="nav-icon fas fa-save"></i> Registrar </button>
          </div>
        </div>
      </div>
    </div>

    