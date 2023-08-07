<?php  session_start(); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
  <title>Curía</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=0.9">
  <!-- <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
  <meta http-equiv="X-UA-Compatible" content="Chrome">
  <meta charset="utf-8">
  <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/submenu.css">
  <link rel="stylesheet" href="css/main2.css">
  <link rel="stylesheet" href="css/quevisitar.css">
  <link rel="stylesheet" href="css/EstiloContenido.css">
  <link rel="stylesheet" href="css/nav_responsive.css">
  <link rel="stylesheet" href="css/tabla.css">
  <link rel="stylesheet" href="css/tablita.css">
  <link rel="stylesheet" href="css/tiempo.css">
  <link rel="stylesheet" href="css/footer.css">



  <style>
        .modal-dialog {
         margin-top: 200px;
        }
      #psw ,
    #contrasenia{
   -webkit-text-security: disc; /* Safari y algunos navegadores basados en WebKit */
   text-security: disc; /* Navegadores que soportan la propiedad text-security */
}
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    .regresar {
      display: block;
      position: absolute;
      margin-top: 40px;
      margin-left: 40px;
      background-color: #162E44;
      color: #fff;
      text-decoration: none;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border-radius: 50%;
      font-size: 30px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <header>
    <nav style="background-color: #082032; " class="navbar navbar-expand-md navbar-dark bg-dark">
      <div style="background-color: #082032;" class="container-fluid">
        <!-- icono o nombre -->

        <a style="background-color: #082032;" class="navbar-brand" href="../index.php">
          <img style="background-color: #082032;padding:0px 0px;" src="imagenes\santaelena11.png">
          <a class="rd-nav-link" class="enlace"><img style="width: 7rem; height:2.8rem; padding:0px 0px ;" src="imagenes\curia\0543_logoCuria.png"></a>
        </a>
        <br>

        <!-- boton del menu -->

        <button style="background-color: #082032;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span style="background-color: #082032;" class="navbar-toggler-icon"></span>
        </button>

        <!-- elementos del menu colapsable -->

        <div style="background-color: #082032;" class="collapse navbar-collapse" id="menu">
          <ul style="background-color: #082032;" class="navbar-nav d-flex mx-auto justify-content-between text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="curia.php">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CuriaQueVisitar.php">¿Qué visitar?</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ¿Qué hacer?
              </a>

              <ul class="dropdown-menu bg-secondary text-center" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="deportes.php">Deportes y aventuras</a></li>
                <li><a class="dropdown-item" href="cultura.php">Culturas y tradiciones</a>
                <li>
                <li><a class="dropdown-item" href="gastronomia.php">Gastronomía</a>
                <li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Planifica tu viaje
              </a>

              <ul class="dropdown-menu bg-secondary text-center" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="como_llegar_curia.php">¿Cómo llegar?</a></li>
                <li><a class="dropdown-item" href="quedarse_curia.php">¿Dónde alojarse?</a>
                <li>
                <li><a class="dropdown-item" href="exemples\Triptico_Folleto_Comuna_Curia.pdf" target="_blank">Itinerario</a></li>
                <li><a class="dropdown-item" href="tiempocuria.php">Tiempo</a></li>
              </ul>
            </li>
          </ul>

          <hr style="background-color: #082032;" class="d-md-none text-white-50">
          <ul class="list-inline list-inline-md rd-navbar-corporate-list-social mx-auto text-center pt-4 pb-4">
            <li>
              <a class="icon fa fa-facebook" href="https://www.facebook.com/profile.php?id=100083613400073" target="_blank"></a>
            </li>
            <li>
              <a class="icon fa fa-instagram" href="https://www.instagram.com/curia.turistica/?igshid=YmMyMTA2M2Y%3D" target="_blank"></a>
            </li>
            <li>
              <a href="https://comunacuria.blogspot.com/" target="_blank "><i class="fab fa-blogger" style="color: #ffffff;"></i></a>
            </li>
          </ul>
          <button type="button" class="btnLogin text-white  " style="background: none; border:none; cursor:pointer; font-size:18px" data-bs-toggle="modal"  data-bs-target="#staticBackdropLogin" >
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </button>
                    <span class="usuario" style="display:none"  ></span>
                      <?php
                        if(isset($_SESSION['user'])){
                        $usuarioIngresado= $_SESSION['user'];
                        echo ' 
                        <script >
                        let btn = document.querySelector(".btnLogin")
                        btn.style.display= "none";
                        </script>
                        ';
                        echo  "<span class='usuario text-white'  style='display:initial;'>" .$usuarioIngresado."</span>" ;
                        echo  '<a href="cerrar.php " style="margin-left:20px;"  class="cerrar "> <i class="fa-solid fa-right-from-bracket"></i> <span>salir</span> </a>' ;
                      }?>
        </div>
      </div>
    </nav>

  </header>

    <!-- Modal -->
<div class="modal fade mt-5 position-fixed"   id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
        <button type="button" class="fa fa-close  " style="background: none; font-size:50px; border:none; "  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="post" id="Login" autocomplete="off">
                    <span style="color: red;font-size: 10px;margin-bottom: 5px;text-align: center;font-weight: 500;"><?php if(isset($errorLogin)){   echo $errorLogin;} ?></span>

          <div class="mb-3">
           <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="contrasenia" id="contrasenia" placeholder="contrasenia">
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropRegistro" >crear Cuenta</button>
          <button type="submit" class="btn btn-primary">Ingresar</button>
        
      </div>
      <div id="alerta__info"> </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade " id="staticBackdropRegistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro </h1>
      </div>
      <div class="modal-body">
        <form  method="post" id="Registro" autocomplete="off" >
          <div class="mb-3">
            <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelpId" placeholder="Nombres Completos">
          </div>
          
          <div class="mb-3">
           <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="psw" id="psw" aria-describedby="emailHelpId" placeholder="Contraseña">
          </div>

          <div class="mb-3">
            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo">
          </div>
          
          <div class="mb-3">
            <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="emailHelpId" placeholder="">
          </div>

          <select class="form-control mb-3" name="ciudad" id="ciudad"  aria-label="Default select example">
            <option selected>seleccione un pais</option>
            <?php  
                include_once '../models/db.php';
                // echo $img_path;
                $sql = "SELECT * FROM pais ";
                $result = $conexion->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                    
                    
            ?>
              <option value="<?php  echo $row['id'];?>"  ><?php   echo  $row['nombre']; ?></option>                  
            <?php
                    }
                    
                  } 
              ?>
          </select>

          <style>
            .contenedor28{
                display: flex;
                flex-direction: column;
            }



          </style>
          <div class="mb-3 contenedor28 ">
            <label for="" class=""> <i class="fa fa-venus-mars" aria-hidden="true"></i> Sexo</label>       
            <div class="form-group">
              <input id="gender_M" class="" type="radio" name="gender" value="M" checked>
              <label for="my-input">Hombre</label>
            </div>      
            <div class="form-group">
              <input id="gender_F" class="" type="radio" name="gender" value="F">
              <label for="my-input">Mujer</label>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">regresar</button>
            <button type="submit" class="btn btn-primary">Crear Cuenta</button>
          </div>
              <div id="alerta__error" ></div>
        </form>
      </div>
      
    </div>
  </div>
</div>
