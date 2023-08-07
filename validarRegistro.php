<?php
require_once './models/db.php';

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['psw']) && !empty($_POST['psw']) && isset($_POST['nombres']) && !empty($_POST['nombres']) && isset($_POST['fecha'])
 && !empty($_POST['fecha']) && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['gender']) && !empty($_POST['gender']) && isset($_POST['ciudad']) && !empty($_POST['ciudad'])   )
{
    $nombre_Completos = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $user = mysqli_real_escape_string($conexion, $_POST['username']);
    $pass = $_POST['psw'];
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $fecha =  $_POST['fecha'];
    $sexo = mysqli_real_escape_string($conexion, $_POST['gender']);
    $ciudad = mysqli_real_escape_string($conexion,$_POST['ciudad']);
    $provincia = mysqli_real_escape_string($conexion,$_POST['provincia']);

    // Verificamos si la contrasenia cumple con los requisitos necesarios
    $pass_regex = "/^[a-zA-Z0-9]+$/";
    if (!preg_match($pass_regex, $pass)) {
        echo json_encode(array('data' => 0));
        exit();
    }
    
    if($ciudad != '52' && $provincia == 0){
        $prov = 0;

    }else{
        
        $prov = $provincia;
    }
    
    // Ciframos la contrasenia
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO `Usuarios` (`nombres`, `username`, `clave`, `fecha_nacimiento`, `correo`, `sexo`, `id_pais`, `estado`, `fecha`, `id_provincia`) VALUES ('$nombre_Completos', '$user', '$hashed_password', '$fecha', '$correo', '$sexo', $ciudad, 1, NOW(), ";
    if ($prov === 0) {
        $sql .= '0';
    } else {
        $sql .= "'$prov'";
    }
    $sql .= ")";
    
    $resultado = mysqli_query($conexion, $sql);


    echo json_encode(array('data' => 1));
} else {
    echo json_encode(array('data' => 0));
}
?>

