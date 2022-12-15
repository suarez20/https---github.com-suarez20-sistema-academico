<?php
include "include/header.php";

?>

<?php
$id_estudiante = $_GET['id'];
$busc_estudiante = buscarEstudianteById($conexion, $id_estudiante);
$res_b_estudiante = mysqli_fetch_array($busc_estudiante);

?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Estudiante</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionActualizar/ActualizarEstudiante.php">
                        <input type="hidden" name="id" value="<?php echo $id_estudiante;?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="dni" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['dni']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos y Nombres :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nom_ap" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['apellidos_nombres']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['id_genero']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_genero_estudiante = $res_b_estudiante['id_genero'];
                          $mostrar_genero = mostrarGenero($conexion);
                          while ($res_b_genero = mysqli_fetch_array($mostrar_genero)) {
                            $id_genero = $res_b_genero['id'];
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>" 
                          <?php if ($id_genero_estudiante == $id_genero) {
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_nac" class="date-picker form-control col-md-7 col-xs-12" required="required"  value="<?php echo $res_b_estudiante['fecha_nac']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="direccion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['direccion']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['correo']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRO Celular :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cel" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['telefono']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Año de Ingreso :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="anio_ingreso" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['anio_ingreso']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa de Estudios :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="programa_estudio" id="programa_estudio" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_pe = mostrarProgramaEstudios($conexion);
                          while ($res_b_pe = mysqli_fetch_array($mostrar_pe)) {
                          ?>
                          <option value="<?php echo $res_b_pe['id']; ?>"
                          <?php if ($res_b_estudiante['id_programa_estudios'] == $res_b_pe['id']) {
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
                          $mostrar_sem = mostrarSemestre($conexion);
                          while ($res_b_sem = mysqli_fetch_array($mostrar_sem)) {
                          ?>
                          <option value="<?php echo $res_b_sem['id']; ?>"
                          <?php if ($res_b_estudiante['id_semestre'] == $res_b_sem['id']) {
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Seccion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="seccion" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['seccion']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Turno :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="turno" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['turno']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Condición :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="condicion" id="condicion" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $mostrar_condicion = mostrarCondicion($conexion);
                          while ($res_b_condicion = mysqli_fetch_array($mostrar_condicion)) {
                          ?>
                          <option value="<?php echo $res_b_condicion['id']; ?>"
                          <?php if ($res_b_estudiante['id_condicion'] == $res_b_condicion['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_condicion['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Discapacidad :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="discapacidad" id="discapacidad" class="form-control col-md-7 col-xs-12">
                            <option value="">Seleccione</option>
                            <option value="SI" <?php if($res_b_estudiante['discapacidad'] == "SI"){ echo "selected";}; ?>>SI</option>
                            <option value="NO" <?php if($res_b_estudiante['discapacidad'] == "NO"){ echo "selected";}; ?>>NO</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="Estudiantes.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
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