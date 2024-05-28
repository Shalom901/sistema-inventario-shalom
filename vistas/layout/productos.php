<link rel="stylesheet" href="vistas/css/productos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content-wrapper">
      <div class="container-header">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Modulo de Registrar Productos</h3>

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
                <i class='fab fa-dropbox' style='font-size:18px'> Agregar productos</i>
                </button>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Modal Producto -->
    <div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="display: grid; width: 750px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class='fab fa-dropbox' style='font-size:18px'></i> Productos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form" >
              <p class="title">Regisrar Producto </p>
                <div style="position: relative; display: flex; gap: 25px;">
                    <label>
                        <span><i class="fa fa-id-card-o"></i> Perfil</span>
                        <div style="position: relative; width: 200px;" class="input-group">
                            <select class="form-control select3 search-bar" id="seleccionarCliente" name="slecionarCliente" required>
                                <option value="">Administrador</option>
                                <option value="">Asistente</option>
                                <option value="">Controlador</option>
                            </select>
                        </div>
                    </label>

                
                    <label>
                        <span><i class='fab fa-slack-hash'></i> Código</span>
                        <input type="number" name="text" class="search-bar" placeholder="Código"/>
                    </label>

                    <label>
                        <span><i class='fas fa-pencil-alt'></i> Descripción del Producto</span>
                        <textarea cols="50" type="number" name="text" class="search-bar" placeholder="Descripción Producto"></textarea>
                    </label>

                </div>
                
                <div class="flex" style="position: relative; display: flex; gap: 25px;">
                  <label>
                    <span>• Stock Producto</span><br>
                    <input type="number" name="text" class="search-bar" placeholder="Stock Producto"/>
                  </label>

                  <label>
                    <span><i class='fas fa-dollar-sign'></i> Precio Compra</span><br>
                    <input type="number" name="text" class="search-bar" placeholder="Precio Compra"/>
                  </label>

                  <label>
                    <span><i class='fas fa-dollar-sign'></i> Precio Venta</span><br>
                    <input type="number" name="text" class="search-bar" placeholder="Precio Compra"/>
                  </label>
                </div> 
                
                <div class="panel">
                    <input type="file" id="nuevaFoto" name="nuevaFoto">
                    <p class="help-block">Peso máximo de la foto 200 MB</p>
                    <img src="vistas/img/productos/default/box.jpg" alt="img" class="img-thumbnail" width="100px">
                </div>
              
              <p class="signin">Olvidaste tu contraseña ? <a href="#">Iniciar Sesión</a> </p>
          </form>
          </div> 
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: red; border-radius: 10px;"><i class="fa fa-close"></i> Cerrar</button>
            <button type="submit" class="btn btn-primary" style="background-color: #00bfff; border-radius: 10px;"><i class="nav-icon fas fa-save"></i> Registrar </button>
          </div>
        </div>
      </div>
    </div>

    