<?php
include_once("../language/script.php");
$texto_traducido = GetTextoTraducido("../language/la_nunez");
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="Chrome">
    <meta charset="utf-8">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lasnunezcuestionario.css">   
    <link rel="stylesheet" href="css/lasnunezregresar.css">
    <link rel="stylesheet" href="css/lasnunez_slider.css">    
    <link rel="stylesheet" href="css/stylegalerias.css">  
    <link rel="stylesheet" href="css/lasnunezstylegalerias1.css">  
    <link rel="stylesheet" href="css/styleBotonesPdf.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/lasnunesgaleriasabiertas.css">
    <link rel="stylesheet" href="css/lasnunezestilogalerias.css">
    <link rel="stylesheet" href="css/comollegar.css">
    <link rel="stylesheet" href="css/tiempo.css">
    <script src="https://kit.fontawesome.com/5a6bd3463f.js" crossorigin="anonymous"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}   .modal-dialog-2 {
         margin-top: 200px;
        }
</style>
    <title>Las Núñez</title>

    <style>
        @font-face {
            font-family: "Mega Fresh";
            src: url("./fonts/fonts-meds/52fc208a45b0ba23c86a7e911f266901.eot");
            src: url("./fonts/fonts-meds/52fc208a45b0ba23c86a7e911f266901.eot?#iefix") format("embedded-opentype"),
            url("./fonts/fonts-meds/52fc208a45b0ba23c86a7e911f266901.woff2") format("woff2"),
            url("./fonts/fonts-meds/52fc208a45b0ba23c86a7e911f266901.woff") format("woff"),
            url("./fonts/fonts-meds/52fc208a45b0ba23c86a7e911f266901.ttf") format("truetype"),
            url("./fonts//fonts-meds/52fc208a45b0ba23c86a7e911f266901.svg#Mega Fresh") format("svg");
        }
        /*-- POSICION Y MARGENES DE LA IMAGEN--*/

        .banner-tiempo {
            background-image: url("imagenes/las_nunez/0463_tiempo.jpg");
            width: 100%;
            height: 460px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-size: cover;
            line-height: 50px;
            text-align: center;
        }
        /*-- TITULO DENTRO DE LA IMANGEN*/
        .titulo-llegar {
            background-image: linear-gradient(#ffffff);
            color: #ffffff;
            font-family: 'Mega Fresh';
            font-size: 155px;
            font-weight: 500;
            line-height: 160px;
            padding: 0px 0px;
            text-align: center;
            text-shadow: #000000 0px 2px 4px;
        }
        @media screen and (max-width:800px) {

            .titulo-llegar {
                font-size: 100px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav style="background-color: #082032; " class="navbar navbar-expand-md navbar-dark">
            <div style="background-color: #082032;" class="container-fluid">
                <!-- icono o nombre -->

                <a style="background-color: #082032;" class="navbar-brand" href="../index.php">
                    <img style="background-color: #082032;padding:0px 0px;" src="imagenes/SantaElena11.png">
                    <a class="rd-nav-link" class="enlace"><img style="width: 150px; height:55px; padding:0px 0px ;" src="imagenes/logoLasNunez.png"></a>
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
                            <a class="nav-link active" aria-current="page" href="lasnunez.php"><?php echo $texto_traducido["header"][0] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lasnunezgaleriaquevisitar.php"><?php echo $texto_traducido["header"][1] ?></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texto_traducido["header"][2] ?>
                            </a>

                            <ul class="dropdown-menu bg-secondary text-center bg-light" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="lasnunezdeportesaventuras.php"><?php echo $texto_traducido["header"]["subtitle-3"][0] ?></a>
                            </li>
                                <li><a class="dropdown-item" href="lasnunezculturatradiciones.php"><?php echo $texto_traducido["header"]["subtitle-3"][1] ?></a>
                                <li>
                                <li><a class="dropdown-item" href="lasnunezgastronomia.php"><?php echo $texto_traducido["header"]["subtitle-3"][2] ?></a>
                                <li>
                                <li><a class="dropdown-item" href="lasnunezrutasyexcursiones.php"><?php echo $texto_traducido["header"]["subtitle-3"][3] ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $texto_traducido["header"][3] ?>
                            </a>

                            <ul class="dropdown-menu bg-secondary text-center bg-light" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="lasnunez_planificatuviaje_comollegar.php"><?php echo $texto_traducido["header"]["subtitle-4"][0] ?></a>
                                </li>
                                <li><a class="dropdown-item" href="lasnunez_planificatuviaje_hoteles.php"><?php echo $texto_traducido["header"]["subtitle-4"][1] ?></a>
                                <li>
                                <!-- <li><a class="dropdown-item" href="lasnunezreservadeexperiencias.php"><?php echo $texto_traducido["header"]["subtitle-4"][2] ?></a> -->
                                </li>
                                <li><a class="dropdown-item" href="tiempolasnunez.php"><?php echo $texto_traducido["header"]["subtitle-4"][3] ?></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="d-flex">
                            <?php GetSelectLanguage() ?>
                        </li>
                    </ul>
                    <?php GetScriptSelectLanguage() ?>
                    <hr style="background-color: #082032;" class="d-md-none text-white-50">
                        <ul class="list-inline list-inline-md rd-navbar-corporate-list-social mx-auto text-center pt-4 pb-4">
                            <li><a class="icon fa fa-facebook" href="https://www.facebook.com/lasnunezturistica" target="_blank"></a></li>
                            <li><a class="icon fa fa-instagram" href="https://www.instagram.com/lasnunezturistica/" target="_blank"></a></li>
                        </ul>
                    <!-- enlaces redes sociales -->   
                    
                          <button type="button" class="btnLogin text-white  " style="background: none; border:none; cursor:pointer; font-size:18px" data-bs-toggle="modal"  data-bs-target="#staticBackdropLogin" >
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </button>
                    <span class="usuario" style="display:none"  ></span>
                      <?php
                      if (isset($_SESSION['user'])) {
                          $usuarioIngresado = $_SESSION['user'];
                          echo ' 
                        <script >
                        let btn = document.querySelector(".btnLogin")
                        btn.style.display= "none";
                        </script>
                        ';
                          echo "<span class='usuario text-white'  style='display:initial;'>" . $usuarioIngresado . "</span>";
                          echo '<a href="cerrar.php " style="margin-left:20px;"  class="cerrar "> <i class="fa-solid fa-right-from-bracket"></i> <span>salir</span> </a>';
                      } ?>

                    <!--boton Informacion -->
                </div>
            </div>
        </nav>
    </header>




  <!-- Modal -->
  <div class="modal fade mt-5 position-fixed"   id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-2" id="staticBackdropLabel">Login</h5>
        <button type="button" class="fa fa-close" style="background: none; font-size:20px; border:none;color:black; cursor:pointer;"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="post" id="Login" autocomplete="off">
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
