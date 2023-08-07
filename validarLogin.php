<?php
require_once 'models/db.php';

if (isset($_POST['user']) && !empty($_POST['user'])  && isset($_POST['contrasenia']) && !empty($_POST['contrasenia']) ) {
    session_start();
    $usuario = $_POST['user'];
    $clave = $_POST['contrasenia'];

    // Ciframos la contraseña introducida por el usuario
    $hashed_password = password_hash($clave, PASSWORD_DEFAULT);

    // Obtenemos la contraseña cifrada de la base de datos
    $sql = "SELECT clave FROM Usuarios WHERE username = '$usuario' AND estado = 1";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($result);
    $contrasenia_cifrada = $row['clave'];

    // Verificamos si la contraseña introducida coincide con la contraseña cifrada almacenada
    if (password_verify($clave, $contrasenia_cifrada)) {
        $_SESSION['user'] = $usuario;
        echo json_encode(array('success' =>1));
    } else {
        echo json_encode(array('success' =>0));
    }
}
?>

