<?php 

require './PaginaComentarios.php';

echo $id;

// // echo $img_path;
// $sql = "SELECT id FROM Imagenes WHERE nombre =  '$img_path'";
// $result = $conexion->query($sql);
// if ($result->num_rows > 0) {
// // output data of each row
//     while($row = $result->fetch_assoc()) {
//      $id = $row['id'];
//     }
// } 
// echo $id ;
//     $sql = "SELECT * FROM comentario WHERE id_imagen = '$id'";
//     $resultado = mysqli_query($conexion, $sql);
    
//     while ($comentario = mysqli_fetch_assoc($resultado)) {
//         echo "<p><strong>{$comentario['usuario']}</strong> dijo:</p>";
//         echo "<p>{$comentario['descripcion']}</p>";
//     }
?>