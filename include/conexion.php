<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "root", "sisacad", "sisacad");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>