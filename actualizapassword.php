<?php
require_once './models/db.php';
$new_password = mysqli_real_escape_string($conexion, $_POST['psw']);
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT); // Genera el hash

if (!$conexion) {
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conexion, $_POST['correo']);

$sql = "SELECT * FROM Usuarios WHERE correo = '$email'";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result) == 1) {
    // El correo electrónico existe en la base de datos
    // Actualiza la contraseña
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
    $sql = "UPDATE Usuarios SET clave = '$hashed_password' WHERE correo = '$email'";
    mysqli_query($conexion, $sql);
    echo json_encode(array('data' => 1));
} else {
    // El correo electrónico no existe en la base de datos
    echo json_encode(array('data' => 0));
}
mysqli_close($conexion);
?>
