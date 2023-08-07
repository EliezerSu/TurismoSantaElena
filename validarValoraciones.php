<?php 
include_once './models/db.php';

if( isset($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario']) && isset($_POST['codigo_imagen']) && !empty($_POST['codigo_imagen']) && isset($_POST['comentario']) && !empty($_POST['comentario']) && isset($_POST['rate']) && !empty($_POST['rate']) ){
     $usuario= $_POST['nombre_usuario'];
     $comentario = $_POST['comentario'];
     $imagen = $_POST['codigo_imagen'];
     $puntaje = $_POST['rate']; 
; 

    $sql = "CALL sp_valoraciones('$usuario','$comentario','$imagen','$puntaje',1)";
    $resultado = mysqli_query($conexion,$sql);


     echo json_encode(array('data' => 1));
}else{
     echo json_encode(array('data' => 0));
}

?>