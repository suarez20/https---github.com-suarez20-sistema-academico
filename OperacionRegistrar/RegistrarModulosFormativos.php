<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion = $_POST['descripcion'];
$nro_modulo = $_POST['nro_modulo'];
$id_programa_estudio = $_POST['id_modulo'];

	$b_modulos_formativos = buscarModulosFormativosByDescripcion($conexion, $descripcion);
	$c_r_b_modulos_formativos = mysqli_num_rows($b_modulos_formativos);
	if ($c_r_b_modulos_formativos == 0){
		$insertar = "INSERT INTO modulo_profesional (descripcion, nro_modulo, id_programa_estudio) VALUES ('$descripcion','$nro_modulo','$id_programa_estudio')";
		$ejecutar_insetar = mysqli_query($conexion, $insertar);

		if ($ejecutar_insetar) {
			echo "<script>
					alert('Registro Exitoso');
					window.location= '../ModulosFormativos.php'
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
				alert('El modulos_formativos ya existe, error al guardar');
				window.history.back();
				</script>
				";
	}
	

?>