<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion = $_POST['descripcion'];


$b_semestre = buscarSemestreByDescripcion($conexion, $descripcion);
$c_r_b_semestre = mysqli_num_rows($b_semestre);
if ($c_r_b_semestre == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO semestre (descripcion) VALUES ('$descripcion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

		echo "<script>
                alert('Registro Exitoso');
                window.location= '../Semestre.php'
    			</script>";
	
}else{
	echo "<script>
			alert('El semestre ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>