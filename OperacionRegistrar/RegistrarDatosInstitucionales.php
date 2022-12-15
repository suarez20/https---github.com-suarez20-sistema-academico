<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$cod_modular = $_POST['cod_modular'];
$ruc = $_POST['ruc'];
$nombre_institucion = $_POST['nombre_inst'];
$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nro_resolucion = $_POST['nro_reso'];


$b_estudiante = buscarDatosInstByCodModular($conexion, $cod_modular);
$c_r_b_estudiante = mysqli_num_rows($b_estudiante);
if ($c_r_b_estudiante == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO datos_institucionales (cod_modular, ruc, nombre_institucion, departamento, provincia, distrito, direccion, telefono, correo, nro_resolucion) VALUES ('$cod_modular','$ruc','$nombre_institucion', '$departamento', '$provincia', '$distrito', '$direccion', '$telefono', '$correo', '$nro_resolucion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	// registrar usuario
	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../DatosInstitucionales.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}
}else{
	echo "<script>
			alert('El estudiante ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>