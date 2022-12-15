<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion = $_POST['descripcion'];
$codigo = $_POST['codigo'];

$b_condicion = buscarCondicionByDescripcion($conexion, $descripcion);
$c_r_b_condicion = mysqli_num_rows($b_condicion);
if ($c_r_b_condicion == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO condicion (descripcion, codigo) VALUES ('$descripcion','$codigo')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../Condicion.php'
    			</script>";
	
}else{
	echo "<script>
			alert('El condicion ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>