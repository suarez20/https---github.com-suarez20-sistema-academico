<?php
include "include/header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro De Periodo Academico</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="OperacionRegistrar/RegistrarPeriodoAcad.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha De Inicio :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_ini" class="date-picker form-control col-md-7 col-xs-12" required="required" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha De Fin :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_fin" class="date-picker form-control col-md-7 col-xs-12" required="required" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Director :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="director" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha De Actas :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_actas" class="date-picker form-control col-md-7 col-xs-12" required="required" >
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="PeriodoAcademico.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
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