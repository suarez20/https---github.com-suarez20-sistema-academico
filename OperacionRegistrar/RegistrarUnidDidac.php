<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion = $_POST['descripcion'];
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_modulo = $_POST['id_modulo'];
$id_semestre = $_POST['id_semestre'];
$creditos = $_POST['creditos'];
$horas = $_POST['horas'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];

$b_unid_didacticas = buscarUnidDidacBydescripcion($conexion, $descripcion);
$c_r_b_unid_didacticas = mysqli_num_rows($b_unid_didacticas);
if ($c_r_b_unid_didacticas == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO unidad_didactica (descripcion, id_programa_estudio, id_modulo, id_semestre, creditos, horas,tipo, orden) VALUES ('$descripcion','$id_programa_estudio','$id_modulo', '$id_semestre', '$creditos', '$horas', '$tipo', '$orden')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	if ($ejecutar_insetar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../UnidadesDidacticas.php'
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
			alert('El unid_didacticas ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>