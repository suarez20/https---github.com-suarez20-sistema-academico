<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$genero = $_POST['genero'];


$b_genero = buscarGenero($conexion, $genero);
$c_r_b_genero = mysqli_num_rows($b_genero);
if ($c_r_b_genero == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO genero (genero) VALUES ('$genero')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../Genero.php'
    			</script>";
	
}else{
	echo "<script>
			alert('El genero ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>