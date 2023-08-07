<?php 
include_once './models/db.php';

if( isset($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario']) && isset($_POST['codigo_imagen']) && !empty($_POST['codigo_imagen']) && isset($_POST['comentario']) && !empty($_POST['comentario']) ){

    $usuario= $_POST['nombre_usuario'];
    $comentario = $_POST['comentario'];
    $imagen = $_POST['codigo_imagen'];
    $sql = "CALL sp_comentarios('$usuario','$comentario','$imagen',1)";
    $resultado = mysqli_query($conexion,$sql);

    echo json_encode(array('data' => 1));

}else{
     echo json_encode(array('data' => 0));
}

?>
