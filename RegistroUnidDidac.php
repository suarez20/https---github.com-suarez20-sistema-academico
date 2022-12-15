<?php
include "include/header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro De Unidades Didacticas</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionRegistrar/RegistrarUnidDidac.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripcion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descripcion" maxlength="30" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa de Estudios :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_programa_estudio" id="id_programa_estudio" required="required"class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_pe = mostrarProgramaEstudios($conexion);
                          while ($res_b_pe = mysqli_fetch_array($mostrar_pe)) {
                          ?>
                          <option value="<?php echo $res_b_pe['id']; ?>"><?php echo $res_b_pe['nombre']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Id Modulo :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_modulo" id="id_modulo" required="required" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_modulo = mostrarModulosFormativos($conexion);
                          while ($res_b_modulo = mysqli_fetch_array($mostrar_modulo)) {
                          ?>
                          <option value="<?php echo $res_b_modulo['id']; ?>"><?php echo $res_b_modulo['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Semestre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_semestre" id="id_semestre" required="required" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_sem = mostrarSemestre($conexion);
                          while ($res_b_sem = mysqli_fetch_array($mostrar_sem)) {
                          ?>
                          <option value="<?php echo $res_b_sem['id']; ?>"><?php echo $res_b_sem['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Creditos :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="creditos" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Horas :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="numerico" name="horas" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tipo" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Orden :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="orden" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="UnidadesDidacticas.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
						              <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
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