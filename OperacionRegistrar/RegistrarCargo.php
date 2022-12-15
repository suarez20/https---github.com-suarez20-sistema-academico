<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$desc_cargo = $_POST['desc_cargo'];

$b_cargo = buscarCargo($conexion, $desc_cargo);
$c_r_b_cargo = mysqli_num_rows($b_cargo);
if ($c_r_b_cargo == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO cargo (descripcion) VALUES ('$desc_cargo')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../Cargo.php'
    			</script>";
}else{
	echo "<script>
			alert('El cargo ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>