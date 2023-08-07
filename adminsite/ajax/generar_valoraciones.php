<?php
require_once('../config/db.php');
require_once('../config/conexion.php');
?>

<?php
if (empty($_POST['fecha_inicio']) || empty($_POST['fecha_fin'])) {
	echo '<div class="alert alert-danger">Error: se requieren las fechas de inicio y fin para generar las valoraciones.</div>';
	exit;
}

//Obtener datos del formulario
$fecha_inicio = $_POST['fecha_inicio'] ?? '';
$fecha_fin = $_POST['fecha_fin'] ?? '';

//Consultar la tabla de imágenes para obtener la información necesaria
$query_imagenes = "SELECT imagenes.id, imagenes.nombre, COUNT(Comentario.id) AS total_comentarios, AVG(Comentario.puntaje) AS promedio_puntaje 
                   FROM imagenes LEFT JOIN Comentario ON imagenes.id = Comentario.id_imagen 
                   WHERE Comentario.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' AND Comentario.estado = 1 AND Comentario.puntaje>0
                   GROUP BY imagenes.id";

$resultado_imagenes = mysqli_query($con, $query_imagenes);

if ($resultado_imagenes) {
	//Si se obtienen resultados, generar la tabla con diseño
	echo '<table class="table table-striped">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Imagen</th>';
	echo '<th>Ubicación</th>';
	echo '<th>Total de comentarios</th>';
	echo '<th>Promedio de puntaje</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	while ($row = mysqli_fetch_assoc($resultado_imagenes)) {
		$id_imagen = $row['id'];
		$nombre_imagen = $row['nombre'];
		$total_comentarios = $row['total_comentarios'];
		$promedio_puntaje = round($row['promedio_puntaje'], 2);
		$ubicacion_imagen = '/' .$nombre_imagen;

		echo '<tr>';
		echo '<td><img id="imagen'.$id_imagen.'" src="'.$ubicacion_imagen.'" height="50" width="50" onclick="ampliarImagen('.$id_imagen.')"></td>';
		echo '<td>'.$ubicacion_imagen.'</td>';
		echo '<td>'.$total_comentarios.'</td>';
		echo '<td>'.$promedio_puntaje.'</td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';	
	

} else {
	//Si no se obtienen resultados, mostrar mensaje de error
	echo '<div class="alert alert-danger">No se encontraron resultados para las fechas seleccionadas</div>';
}

mysqli_close($con);
?>
