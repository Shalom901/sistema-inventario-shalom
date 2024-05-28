<link rel="stylesheet" href="vistas/css/categorias.css">

<div class="content-wrapper">
      <div class="container-header">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Modulo de Registrar Categorias</h3>

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
                <i class="nav-icon fas fa-th">  Agregar Categoria</i>
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
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Categorías</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Categoría agregada <br>
              <div class="moda-body">
                <div class="box-body">
                  <div class="form-group">
                    <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Ingresar Categoría"></input>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>