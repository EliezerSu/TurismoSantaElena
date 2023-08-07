<?php 
include_once './models/db.php';


$sql = "SELECT * FROM pais";

$consulta = mysqli_query($conexion,$sql);
$result = $consulta;
// $result = $conexion->query($sql);
if ($result->num_rows > 0) {
    echo json_encode(array('data' => 1));
} 


?>