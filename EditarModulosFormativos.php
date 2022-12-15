<?php
include "include/header.php";

?>

<?php
$id_modulos_formativos = $_GET['id'];
$busc_modulos_formativos = buscarModulosFormativosById($conexion, $id_modulos_formativos);
$res_b_modulos_formativos = mysqli_fetch_array($busc_modulos_formativos);

?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar modulos_formativos</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionActualizar/ActualizarModulosFormativos.php">
                        <input type="hidden" name="id" value="<?php echo $id_modulos_formativos;?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripcion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descripcion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_modulos_formativos['descripcion']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nro De Modulo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="nro_modulo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_modulos_formativos['nro_modulo']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Id Programa Estudio :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_programa_estudio" id="id_prog_estudio" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_modulos_formativos['id_programa_estudio']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_prog_estudio_mod = $res_b_modulos_formativos['id_programa_estudio'];
                          $buscar_prog_estudio = mostrarProgramaEstudios($conexion);
                          while ($res_b_prog_estudio = mysqli_fetch_array($buscar_prog_estudio)) {
                            $id_prog_estudio = $res_b_prog_estudio['id'];
                          ?>
                          <option value="<?php echo $res_b_prog_estudio['id']; ?>" 
                          <?php if ($id_prog_estudio_mod == $id_prog_estudio) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_prog_estudio['nombre']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="ModulosFormativos.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
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