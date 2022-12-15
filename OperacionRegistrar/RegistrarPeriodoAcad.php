<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$nombre = $_POST['nombre'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$director = $_POST['director'];
$fecha_actas = $_POST['fecha_actas'];

$b_estudiante = buscarPeriodoAcadByNombre($conexion, $nombre);
$c_r_b_estudiante = mysqli_num_rows($b_estudiante);
if ($c_r_b_estudiante == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO periodo_academico (nombre,fecha_inicio,fecha_fin, director, fecha_actas) VALUES ('$nombre','$fecha_ini','$fecha_fin', '$director', '$fecha_actas')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	echo "<script>
	alert('Registro Exitoso');
	window.location= '../PeriodoAcademico.php'
	</script>";
	
}else{
	echo "<script>
			alert('El estudiante ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>