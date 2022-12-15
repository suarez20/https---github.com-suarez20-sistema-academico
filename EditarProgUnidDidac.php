<?php
include "include/header.php";

?>

<?php
$id_prog_unid_didac = $_GET['id'];
$busc_prog_unid_didac = buscarProgUnidDidacById($conexion, $id_prog_unid_didac);
$res_b_prog_unid_didac = mysqli_fetch_array($busc_prog_unid_didac);

?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar prog_unid_didac</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionActualizar/ActualizarProgUnidDidac.php">
                        <input type="hidden" name="id" value="<?php echo $id_prog_unid_didac;?>">
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_prog_unid_didac['id_genero']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_genero_prog_unid_didac = $res_b_prog_unid_didac['id_genero'];
                          $buscar_genero = mostrarUnidDidacticas($conexion);
                          while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                            $id_genero = $res_b_genero['id'];
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>" 
                          <?php if ($id_genero_prog_unid_didac == $id_genero) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_genero['genero']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_prog_unid_didac['id_genero']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_genero_prog_unid_didac = $res_b_prog_unid_didac['id_genero'];
                          $buscar_genero = mostrarDocente($conexion);
                          while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                            $id_genero = $res_b_genero['id'];
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>" 
                          <?php if ($id_genero_prog_unid_didac == $id_genero) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_genero['genero']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_prog_unid_didac['id_genero']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_genero_prog_unid_didac = $res_b_prog_unid_didac['id_genero'];
                          $buscar_genero = mostrarPeriodoAcad($conexion);
                          while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                            $id_genero = $res_b_genero['id'];
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>" 
                          <?php if ($id_genero_prog_unid_didac == $id_genero) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_genero['genero']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa de Estudios :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="programa_estudio" id="programa_estudio" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_pe = mostrarProgramaEstudios($conexion);
                          while ($res_b_pe = mysqli_fetch_array($buscar_pe)) {
                          ?>
                          <option value="<?php echo $res_b_pe['id']; ?>"
                          <?php if ($res_b_prog_unid_didac['id_programa_estudios'] == $res_b_pe['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_pe['nombre']; ?></option>
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
                        <select name="semestre" id="semestre" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_sem = mostrarSemestre($conexion);
                          while ($res_b_sem = mysqli_fetch_array($buscar_sem)) {
                          ?>
                          <option value="<?php echo $res_b_sem['id']; ?>"
                          <?php if ($res_b_prog_unid_didac['id_semestre'] == $res_b_sem['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_sem['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad Calificacion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cant_calificacion" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_prog_unid_didac['cant_calificacion']; ?>">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="ProgramacionUnidDidac.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
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