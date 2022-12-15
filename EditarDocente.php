<?php
include "include/header.php";

?>

<?php
$id_docente = $_GET['id'];
$busc_docente = buscarDocenteById($conexion, $id_docente);
$res_b_docente = mysqli_fetch_array($busc_docente);

?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Docente</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionActualizar/ActualizarDocente.php">
                    <input type="hidden" name="id" value="<?php echo $id_docente;?>">
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="dni" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['dni']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos y Nombres :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nom_ap" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['apellidos_nombres']; ?>">
                        </div>
                      </div>
                    
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_nac" class="date-picker form-control col-md-7 col-xs-12" required="required"  value="<?php echo $res_b_docente['fecha_nac']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="direccion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['direccion']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['correo']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRO Celular :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cel" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['telefono']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['id_genero']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_genero_docente = $res_b_docente['id_genero'];
                          $buscar_genero = mostrarGenero($conexion);
                          while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                            $id_genero = $res_b_genero['id'];
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>" 
                          <?php if ($id_genero_docente == $id_genero) {
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nivel De Educacion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nivel_edu" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['nivel_educacion']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Condicion Laboral :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cond_lab" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['cond_laboral']; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Cargo :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_cargo" id="id_cargo" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['id_cargo']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_cargo_docente = $res_b_docente['id_cargo'];
                          $buscar_cargo = mostrarCargo($conexion);
                          while ($res_b_cargo = mysqli_fetch_array($buscar_cargo)) {
                            $id_cargo = $res_b_cargo['id'];
                          ?>
                          <option value="<?php echo $res_b_cargo['id']; ?>" 
                          <?php if ($id_cargo_docente == $id_cargo) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_cargo['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="Docentes.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
                          
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