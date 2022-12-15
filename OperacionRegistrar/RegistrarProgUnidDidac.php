<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id_unidad_didactica = $_POST['id_unidad_didactica'];
$id_docente = $_POST['id_docente'];
$id_periodo_acad = $_POST['id_periodo_academico'];
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_semestre = $_POST['id_semestre'];
$cant_calificacion = $_POST['cant_calificacion'];

	$insertar = "INSERT INTO programacion_unidad_didactica (id_unidad_didactica, id_docente,id_periodo_acad, id_programa_estudio, id_semestre,cant_calificacion) VALUES ('$id_unidad_didactica','$id_docente','$id_periodo_acad', '$id_programa_estudio', '$id_semestre', '$cant_calificacion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../ProgramacionUnidDidac.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}


?>