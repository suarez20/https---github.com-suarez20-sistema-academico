<?php
session_start();
if (!empty($_SESSION['id_usu_sisacad_iesthuanta'])) {
   header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login! | </title>

    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Gentella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
    <style>
     
      .background-image{
        background-image: url('img/HOMERO.jpg'); 
        background-repeat:no-repeat;
        background-size:cover; 
        height:100vh;
      }
    </style>

  </head>
  
  <body class="bg-image " class="login" class="">
    <div class="background-image">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper" style="margin-top:0">
        <div class="animate form login_form">
            <section class="login_content">
            <img width="150px" src="img/logo iestp.png" alt="">
              <form method="POST" action="Operacion/iniciar_sesion.php">
                <h1><b>Inicio de Sesión</b></h1>
                <div>
                  <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="" />
                </div> 
                <div>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña" required="" />
                </div>
                <div>
                  <button type="submit"><b>Iniciar Sesión</b></button>
                  <a class="reset_pass" href="#"><b>Olvidaste tu contraseña?</b></a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link"><b>Nuevo en el sitio?</b>
                    <a href="crear_usuario.php" class="to_register"> <b>Crear Cuenta</b> </a>
                  </p>

                  <div class="clearfix"></div>
                  <br />

                  <div>
                    <h1><i ></i> <b>I.E.S.T.P. "HUANTA"</b></h1>
                    <h5><b>Bienvenido a la plataforma de Portafolio Docente, Inicie Sesion para acceder en modo Administrador</b></h5>

                  </div>
                </div>
              </form>
            </section>
          </div>
      </div>
    </div>
  </body>
</html>