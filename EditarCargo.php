<?php
include "include/header.php";

?>

<?php
$id_cargo = $_GET['id'];
$busc_cargo = buscarCargoById($conexion, $id_cargo);
$res_b_cargo = mysqli_fetch_array($busc_cargo);

?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar cargo</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionActualizar/ActualizarCargo.php">
                        <input type="hidden" name="id" value="<?php echo $id_cargo;?>">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cargo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cargo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_cargo['descripcion']; ?>">
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="Cargo.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
						              <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Actualizar Datos</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "include/footer.php";

?>