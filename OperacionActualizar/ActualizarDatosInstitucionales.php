<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$cod_modular = $_POST['id'];
$ruc = $_POST['ruc'];
$nombre_institucion = $_POST['nom_inst'];
$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nro_resolucion = $_POST['nro_reso'];


$sql = "UPDATE datos_institucionales SET ruc = '$ruc', nombre_institucion='$nombre_institucion', departamento='$departamento', provincia='$provincia', distrito='$distrito', direccion='$direccion', telefono='$correo',correo='$telefono',  nro_resolucion='$nro_resolucion' WHERE cod_modular='$cod_modular'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../DatosInstitucionales.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>