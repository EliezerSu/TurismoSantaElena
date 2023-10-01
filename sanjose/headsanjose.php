<?php session_start();
include_once("../language/script.php");
$texto_traducido = GetTextoTraducido("../language/sanjose");
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>San José</title>
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="Chrome">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav_responsive.css">
  <link rel="stylesheet" href="css/main2.css">
  <link rel="stylesheet" href="css/quevisitar.css">
  <link rel="stylesheet" href="css/EstiloContenido.css">
  <link rel="stylesheet" href="css/sanjose.css">
  <script src="https://kit.fontawesome.com/d4a9ea1d32.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


  <style>
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

    .modal-dialog-2 {
      margin-top: 200px;
    }

    #psw,
    #contrasenia {
      -webkit-text-security: disc;
      /* Safari y algunos navegadores basados en WebKit */
      text-security: disc;
      /* Navegadores que soportan la propiedad text-security */
    }
  </style>

</head>

<body>
  <header>
    <div>
      <nav style="background-color: #082032; " class="navbar navbar-expand-md navbar-dark bg-dark">
        <div style="background-color: #082032;     padding-right: 15px;
    padding-left: 32px;" class="container-fluid">
          <!-- icono o nombre -->

          <a style="background-color: #082032;" class="navbar-brand" href="../index.php">
            <img style="background-color: #082032;padding:0px 0px;" class="img_S_E" src="imagenes/santaelena11.png">
            <a class="rd-nav-link" class="enlace"><img style="width: 150px; height:55px; padding:0px 0px ;" src="imagenes/logoSanJose.png" class="img_sanJose"></a>
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
                <a class="nav-link active" aria-current="page" href="sanjose.php"><?php echo $texto_traducido["header"][0] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sanjosequevisitar.php"><?php echo $texto_traducido["header"][1] ?></a>
              </li>


              <li class="nav-item dropdown ">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $texto_traducido["header"][2] ?></a>


                <ul class="dropdown-menu bg-secondary text-center " aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item " href="sanjosecultura.php"><?php echo $texto_traducido["header"]["subtitle-1"][0] ?></a>
                  <li>
                  <li><a class="dropdown-item " href="sanjosegastronomia.php"><?php echo $texto_traducido["header"]["subtitle-1"][1] ?></a>
                  <li>
                  <li><a class="dropdown-item " href="sanjoserutas.php"><?php echo $texto_traducido["header"]["subtitle-1"][2] ?></a></li>
                </ul>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $texto_traducido["header"][3] ?></a>

                <ul class="dropdown-menu bg-secondary text-center " aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " href="sanjosecomollegar.php"><?php echo $texto_traducido["header"]["subtitle-2"][0] ?></a></li>
                  <li><a class="dropdown-item " href="sanjosequedarse.php"><?php echo $texto_traducido["header"]["subtitle-2"][1] ?></a>
                  <li>
                  <li><a class="dropdown-item " href="sanjoseitinerario.php"><?php echo $texto_traducido["header"]["subtitle-2"][2] ?></a></li>
                  <li><a class="dropdown-item " href="tiemposanjose.php"><?php echo $texto_traducido["header"]["subtitle-2"][3] ?></a></li>
                </ul>
              </li>
              <li class="d-flex">
                <?php GetSelectLanguage() ?>
              </li>
            </ul>
            <?php GetScriptSelectLanguage() ?>

            <hr style="background-color: #082032;" class="d-md-none text-white-50">
            <ul class="list-inline list-inline-md -navbar-corporate-list-social mx-auto text-center pt-4 pb-4">



              <li><a class="icon fa fa-facebook" href="https://facebook.com/profile.php?id=100083971591922" target="_blank
            " style="color: #ffffff;"></a></li>

              <li><a class="icon fa fa-instagram" href="https://www.instagram.com/turismocomunasanjose/" target="_blank
            " style="color: #ffffff;"></a></li>

              <a href="https://san-jose-turistico3.webnode.ec/" target="_blank "><i class="fab fa-blogger" style="color: #ffffff;"></i></a>

            </ul>


            <button type="button" class="btnLogin text-white  " style="background: none; border:none; cursor:pointer; font-size:18px" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">
              <i class="fa fa-user" aria-hidden="true"></i>
            </button>
            <span class="usuario" style="display:none"></span>
            <?php
            if (isset($_SESSION['user'])) {
              $usuarioIngresado = $_SESSION['user'];
              echo ' 
                        <script >
                        let btn = document.querySelector(".btnLogin")
                        btn.style.display= "none";
                        </script>
                        ';
              echo  "<span class='usuario text-white'  style='display:initial;'>" . $usuarioIngresado . "</span>";
              echo  '<a href="cerrar.php " style="margin-left:20px;"  class="cerrar "> <i class="fa-solid fa-right-from-bracket"></i> <span>salir</span> </a>';
            } ?>



          </div>

        </div>
      </nav>
    </div>
  </header>

  <!-- Modal -->
  <div class="modal fade mt-5 position-fixed" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-2" id="staticBackdropLabel">Login</h5>
          <button type="button" class="fa fa-close" style="background: none; font-size:20px; border:none;color:black; cursor:pointer;" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" id="Login" autocomplete="off">
            <span style="color: red;font-size: 10px;margin-bottom: 5px;text-align: center;font-weight: 500;"><?php if (isset($errorLogin)) {
                                                                                                                echo $errorLogin;
                                                                                                              } ?></span>

            <div class="mb-3">
              <label for="" class=""> <i class="fa fa-user" aria-hidden="true"></i> Usuario</label>

              <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
            </div>

            <div class="mb-3">
              <label for="" class=""> <i class="fa-solid fa-key"></i>Contraseña</label>
              <input type="text" class="form-control" name="contrasenia" id="contrasenia" placeholder="contrasenia">
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn  text-white " style="background:#0d6efd; border-radius:5px;">Ingresar</button>


            </div>
            <div id="alerta__info"> </div>
          </form>
        </div>

      </div>
    </div>
  </div>