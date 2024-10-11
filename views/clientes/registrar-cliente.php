<?php
//Parametros de la app
require_once '../../app/config/App.php'
?>
<?php require_once '../includes/header.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Nuevo Cliente", "Lista de clientes", SERVERURL . "views/clientes/listar-cliente"); ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="" autocomplete="off" id="form-cliente">
            <div class="card card-outline card-primary">
              <div class="card-header">
                Completar los datos
              </div>
              <div class="card-body">
                <!-- Fila 1 -->
                <div class="row">
                  <div class="col-md-4 form-group">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input 
                      type="tel" 
                      class="form-control text-center" 
                      id="telefono"
                      minlength="9"
                      maxlength="9"
                      required>
                  </div>
                </div>
                <!-- Fin Fila 1 -->
              </div> <!--.car body-->
              <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary">
                  Guardar
                </button>
              </div>
            </div> <!--.card -->
          </form> <!--.col-md-12 -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once '../includes/footer.php' ?>
<script>
  document.addEventListener("DOMContentLoaded",()=>{
    document.querySelector("#form-cliente").addEventListener("submit",async(e)=>{
      e.preventDefault();

      if(await ask("¿Deseas guardar?","Clientes")){
        //Algoritmo para guardar
        showToast("Guardado correctamente", "SUCCESS", 1000, "./listar-cliente");
      }
    });
  });
</script>
</body>

</html>