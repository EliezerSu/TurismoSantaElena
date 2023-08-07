<?php
require_once("../config/db.php");
require_once("../config/conexion.php");

$id = $_POST['id'];
$estado = ($_POST['estado'] == 1) ? 0 : 1;

$query = "UPDATE Comentario SET estado = $estado WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result) {
  echo "success";
} else {
  echo "error";
}
?>
