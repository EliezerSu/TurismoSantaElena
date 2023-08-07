<?php
require_once ("../config/db.php");
require_once ("../config/conexion.php");

$comentarios = array();

$page = $_GET["page"];
$q = $_GET["q"];
$usuario = $_GET["usuario"];

$per_page = 10;
$offset = ($page - 1) * $per_page;

$where = "";
if (!empty($q)) {
    $where .= " AND descripcion LIKE '%$q%'";
}
if (!empty($usuario)) {
    $where .= " AND usuario = '$usuario'";
}

$query = "SELECT COUNT(*) as count FROM Comentario WHERE 1 $where";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$total_pages = ceil($row["count"] / $per_page);

$query = "SELECT c.id, c.descripcion, c.fecha, u.username, c.estado FROM Comentario c INNER JOIN Usuarios u ON c.usuario = u.username WHERE u.username LIKE '%$usuario%' ORDER BY c.id DESC LIMIT $offset,$per_page";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $comentarios[] = $row;
}

if (count($comentarios) > 0) {
    echo '<table class="table table-striped">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Comentario</th>
              <th>Fecha</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>';
    foreach ($comentarios as $comentario) {
        $estado = ($comentario["estado"] == 1) ? "Activo" : "Inactivo";
        echo '<tr>
              <td>'.$comentario["username"].'</td>
              <td width="750">'.$comentario["descripcion"].'</td>
              <td>'.$comentario["fecha"].'</td>
              <td>'.$estado.'</td>
              <td><button class="btn btn-sm '.(($comentario["estado"] == 1) ? "btn-danger" : "btn-success").'" onclick="cambiarEstado('.$comentario["id"].', \''.$comentario["estado"].'\')">'.(($comentario["estado"] == 1) ? "Desactivar" : "Activar").'</button></td>


            </tr>';
    }
    echo '</tbody></table>';
} else {
    echo '<div class="alert alert-warning">No se encontraron comentarios.</div>';
}

echo '<nav aria-label="Page navigation example">
      <ul class="pagination">';
if ($total_pages > 1) {
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';
        } else {
            if(!empty($q) || !empty($usuario)){
                echo '<li class="page-item"><a class="page-link" href="#" onclick="load('.$i.',\''.$q.'\',\''.$usuario.'\')">'.$i.'</a></li>';
            } else {
                echo '<li class="page-item"><a class="page-link" href="#" onclick="load('.$i.')">'.$i.'</a></li>';
            }
        }
    }
}
echo '</ul></nav>';
?>