<?php
include "include/header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro De Programacion De Unidades Didacticas</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionRegistrar/RegistrarProgUnidDidac.php">

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Unidad Didactica :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_unidad_didactica" id="id_unidad_didactica" class="form-control col-md-7 col-xs-12" required="required">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_genero = mostrarUnidDidacticas($conexion);
                          while ($res_b_genero = mysqli_fetch_array($mostrar_genero)) {
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>"><?php echo $res_b_genero['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Docente :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_docente" id="id_docente" class="form-control col-md-7 col-xs-12" required="required">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_genero = mostrarDocente($conexion);
                          while ($res_b_genero = mysqli_fetch_array($mostrar_genero)) {
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>"><?php echo $res_b_genero['apellidos_nombres']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Periodo Academico :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_periodo_academico" id="id_periodo_academico" class="form-control col-md-7 col-xs-12" required="required">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_genero = mostrarPeriodoAcad($conexion);
                          while ($res_b_genero = mysqli_fetch_array($mostrar_genero)) {
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>"><?php echo $res_b_genero['nombre']; ?></option>
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
                        <select name="id_programa_estudio" id="id_programa_estudio" class="form-control col-md-7 col-xs-12" required="required">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Semestre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_semestre" id="id_semestre" class="form-control col-md-7 col-xs-12" required="required">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad Calificacion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cant_calificacion" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="ProgramacionUnidDidac.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
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