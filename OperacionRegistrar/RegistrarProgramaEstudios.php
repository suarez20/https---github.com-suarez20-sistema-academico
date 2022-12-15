<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];
$resolucion = $_POST['resolucion'];


$b_programa_estudios = buscarProgEstudiosByCodigo($conexion, $codigo);
$c_r_b_programa_estudios = mysqli_num_rows($b_programa_estudios);
if ($c_r_b_programa_estudios == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$codigo','$tipo','$nombre', '$resolucion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../ProgramaEstudios.php'
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
			alert('El programa_estudios ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>