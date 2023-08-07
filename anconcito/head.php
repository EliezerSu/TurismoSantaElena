<?php session_start(); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Anconcito</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="Chrome">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/estilosNecesarios.css">
    <link rel="stylesheet" href="css/estiloComoLlegar.css">
    <link rel="stylesheet" href="css/estiloAnconcito.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nav_responsive.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styleBotonesPdf.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilossecciones.css">

    <style>
      .modal-dialog {
         margin-top: 200px;
        }
        /* Estilos del footer --- No funciona dentro de un archivo .css*/
        .pie-pagina {
            width: 100%;
            background-color: rgb(8, 32, 50);
        }

        .red-social {
            font-size: 21px;
        }

        .pie-pagina .grupo-1 {
            width: 100%;
            grid-template-columns: repeat(1, 1fr);
            grid-gap: 30px;
            padding: 15px 0px;
        }

        .pie-pagina .grupo-1 .box figure {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pie-pagina .grupo-1 .box figure img {
            width: 100px;
        }

        .pie-pagina .grupo-1 .box h2 {
            color: #fff;
            margin-bottom: 25px;
            font-size: 20px;
        }

        .pie-pagina .grupo-1 .box p {
            color: #efefef;
            margin-bottom: 10px;
        }

        .pie-pagina .grupo-1 .red-social a {
            display: inline-block;
            text-decoration: none;
            width: 45px;
            height: 45px;
            line-height: 45px;
            color: #fff;
            margin-right: 10px;
            background-color: #0d2033;
            text-align: center;
            transition: all 300ms ease;
        }

        .pie-pagina .grupo-1 .red-social a:hover {
            color: aqua;
        }

        .pie-pagina .grupo-2 {
            background-color: #0a1a2a;
            padding: 15px 10px;
            text-align: center;
            color: #fff;
        }

        .pie-pagina .grupo-2 small {
            font-size: 15px;
        }

        @media screen and (max-width:800px) {
            .pie-pagina .grupo-1 {
                width: 100%;
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 30px;
                padding: 35px 0px;
            }

            .pie-pagina .grupo-2 small {
                font-size: 13px;
            }
        }

        /* Estilos de los titulos de Planifica tu vaije --- No funciona dentro de un css*/
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
        .banner-como-llegar {
            background-image: url("imagenes/anconcito/0076_como_llegar.jpg");
            width: 100%;
            height: 460px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-size: cover;
            line-height: 50px;
            text-align: center;

        }

        .banner-hoteles {
            background-image: url("imagenes/anconcito/0126_hoteles.jpg");
            width: 100%;
            height: 460px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-size: cover;
            line-height: 50px;
            text-align: center;

        }

        .banner-itinerarios {
            background-image: url("imagenes/anconcito/0129_itinerario.jpg");
            width: 100%;
            height: 460px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            background-size: cover;
            line-height: 50px;
            text-align: left;

        }

        .banner-tiempo {
            background-image: url("imagenes/anconcito/0154_tiempo.jpg");
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

        /* Estilo para hacer responsivo un iframe */
        .responsiveContent {
            position: relative;
            text-align: center;
            height: 0;
            overflow: hidden;
            padding-bottom: 56.2%;
            margin-bottom: 20px;
        }

        .responsiveContent iframe {

            text-align: center;
            top: 0%;
            left: 0%;
            width: 650px;
            height: 300px;
            margin: 0 auto;
            display: block;
        }

        /* Estilos de mi tabla */
        th,
        td {
            padding: 2px;
            font-size: 19px
        }

        .cuestionario {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .contenedor {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background-color: #63d0c8;
        }

        .tabla {
            width: 25%;
            height: 450px;
            margin: auto;
            border: 1px solid #ffffff;
            border-radius: 4px;
            box-shadow: 0px 0px 4px 0px #162e44;
            padding: 5px;
            text-align: center;
            flex-grow: 1;
            color: #000;
            background-image: linear-gradient(0deg, #162E44 7%, #162E44 51%, #ffffff 100%);
        }

        .tabla h2 {
            margin-top: 10px;
            font-size: 25px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .tabla img {
            width: 220px;
            height: 180px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .tabla p {
            display: block;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .boton {
            display: inline-block;
            width: 150px;
            padding: 12px;
            background: #ffffff;
            text-decoration: none;
            color: #162e44;
            border-radius: 50px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            margin: auto;
            box-shadow: 0px 0px 4px 2px #162e44;
        }

        .tabla:hover {
            color: #000;
            background-color: #63d0c8;
            background-image: linear-gradient(0deg, #162E44 37%, #ccdcdc 100%);
            transition: 0.5s all;
            transform: scaleX(1.4) scaleY(1.2);
            cursor: pointer;
        }


        #gas {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        @media screen and (max-width: 1000px) {
            .tabla {
                width: 45%;
                max-width: none;
            }

            .tabla:hover {
                color: #000;
                background-color: #63d0c8;
                background-image: linear-gradient(0deg, #162E44 37%, #ccdcdc 100%);
                transition: 0.5s all;
                transform: scaleX(1.1) scaleY(1.2);
                cursor: pointer;
            }
        }

        @media screen and (max-width: 700px) {
            .tabla {
                width: 45%;
            }

            .tabla>h2 {
                margin-top: 5px;
            }
        }

        @media screen and (max-width: 550px) {
            .tabla {
                width: 85%;
                padding: 20px;
            }

            .tabla:hover {
                color: #000;
                background-color: #63d0c8;
                background-image: linear-gradient(0deg, #162E44 37%, #ccdcdc 100%);
                transition: 0.5s all;
                transform: scaleX(1.1) scaleY(1.1);
                cursor: pointer;
            }
        }
    </style>
</head>

<body>

    <header>

        <nav style="background-color: #082032; " class="navbar navbar-expand-md navbar-dark bg-dark">
            <div style="background-color: #082032;" class="container-fluid">
                <!-- icono o nombre -->

                <a style="background-color: #082032;" class="navbar-brand" href="../index.php">
                    <img style="background-color: #082032;padding:0px 0px;" src="imagenes/logo.png" width="70" height="70">
                </a>
                    <span class="rd-nav-link" class="enlace"><img style="width: 150px; height:55px; padding:0px 0px ;" src="imagenes/logoAconcito.png"></span>
                
                <br>

                <!-- boton del menu -->

                <button style="background-color: #082032;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="background-color: #082032;" class="navbar-toggler-icon"></span>
                </button>

                <!-- elementos del menu colapsable -->

                <div style="background-color: #082032;" class="collapse navbar-collapse" id="menu">
                    <ul style="background-color: #082032;" class="navbar-nav d-flex mx-auto justify-content-between text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="anconcito.php">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quevisitaranconcito.php">¿Qué visitar?</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ¿Qué hacer?
                            </a>

                            <ul class="dropdown-menu bg-secondary text-center" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="desportesanconcito.php">Deportes y aventuras</a>
                                </li>
                                <li><a class="dropdown-item" href="culturaanconcito.php">Culturas y tradiciones</a>
                                <li>
                                <li><a class="dropdown-item" href="gastronomiaanconcito.php">Gastronomía</a>
                                <li>
                                <li><a class="dropdown-item" href="rutasanconcito.php">Rutas y excursiones</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Planifica tu viaje
                            </a>

                            <ul class="dropdown-menu bg-secondary text-center" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="comollegaranconcito.php">¿Cómo llegar?</a>
                                </li>
                                <li><a class="dropdown-item" href="hotelesanconcito.php">¿Dónde alojarse?</a>
                                <li>
                                <li><a class="dropdown-item" href="itinerariosanconcito.php">Itinerarios</a>
                                </li>
                                <li><a class="dropdown-item" href="tiempoanconcito.php">Tiempo</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <hr style="background-color: #082032;" class="d-md-none text-white-50">
                      <ul class="list-inline list-inline-md rd-navbar-corporate-list-social mx-auto text-center pt-4 pb-4">
                        <li><a class="icon fa fa-facebook" href="https://www.facebook.com/profile.php?id=100083639490727&mibextid=ZbWKwL" target="_blank"></a></li>
                        <li><a class="icon fa fa-instagram" href="https://www.instagram.com/anconcito_turistico/" target="_blank"></a></li>
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
        <h5 class="modal-title fs-2" id="staticBackdropLabel">Login</h5>
        <button type="button" class="fa fa-close" style="background: none; font-size:20px; border:none;color:black; cursor:pointer;"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="post" id="Login" autocomplete="off">
                    <span style="color: red;font-size: 10px;margin-bottom: 5px;text-align: center;font-weight: 500;"><?php if(isset($errorLogin)){   echo $errorLogin;} ?></span>

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
