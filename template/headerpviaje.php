<?php session_start();

?>
<!doctype html>
<html lang="en">

<head>
<title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos_home.css"> 
    <link rel="stylesheet" href="css/punto.css">
    <link rel="stylesheet" href="css/menu.css">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">


    <link rel="stylesheet" href="csspv/bootstrap.css">
    <link rel="stylesheet" href="csspv/fonts.css">
    <link rel="stylesheet" href="csspv/footer.css">
    <link rel="stylesheet" href="csspv/lasnunez_slider.css">    
    <link rel="stylesheet" href="csspv/styleBotonesPdf.css">
    <link rel="stylesheet" href="csspv/comollegar.css">

    <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Icon & jquery  -->
    <script src="https://kit.fontawesome.com/86e925a6b7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


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
            background-image: url("imagenes/planifica_tu_viaje/portada.jpg");
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


    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Icon & jquery  -->
    <script src="https://kit.fontawesome.com/86e925a6b7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>

<body>
    <style>
        
       

    </style>
<header class="zindex-fixed">
  <div class="container_header">
      <div class="container_logo_title">
          <a href="index.php">
          <img class="logo"  src="imagenes/Logo.png" alt="logo" />
          </a>
      </div>
      <div class="container_menu">
        <span class="menu_icon" id="menu"> <i class="fa fa-bars"></i> </span>
          <nav class="menu" style="    background-color: #082032;
">
              <ul >
                <li  > Dónde ir  <span class="fa-solid fa-caret-down"> </span>
                     <!-- aqui va el codigo del submenu del mapa -->
                    <div class=" menu_map submenu">
                      <ul class="list_show ">
                        <li ><a href="La_Entrada/la_entrada.php" class=" nav_item  "  id="Id_Nunez" onmouseover="mostrar_1()" onmouseout="No_mostrar_1()">La Entrada</a></li>
                        <li><a href="lasnunez/lasnunez.php" class="nav_item " id="Id_La_Entrada" onmouseover="mostrar_2()" onmouseout="No_mostrar_2()">Las Núñez</a>            
                        </li>
                        <li ><a href="sanjose/sanjose.php" class="nav_item " id="Id_Curia"onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" >San José</a>            
                        </li>
                        
                        
                        
                        <li ><a href="curia/curia.php" class="nav_item " id="Id_San_Jose" onmouseover="mostrar_4()" onmouseout="No_mostrar_4()">Curía</a>                 
                        </li>
                        <li ><a href="olon/olon.php" class="nav_item "  id="Id_Olon" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()">Olón</a>                      
                        </li>
                        <li><a href="montanita/montanita.php" class="nav_item " id="Id_Montanita" onmouseover="mostrar_6()" onmouseout="No_mostrar_6()">Montañita</a>                     
                        </li>
                        <li><a href="anconcito/anconcito.php" class="nav_item " id="Id_Anconcito" onmouseover="mostrar_7()" onmouseout="No_mostrar_7()">Anconcito</a>
                        </li>
                        <li><a href="ancon/ancon.php" class="nav_item  " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()" id="Id_Ancon">Ancón</a>            
                        </li>
                    
                      </ul>

                      <img src="imagenes/Map.svg" alt="" srcset="">
                       <ul class="localizador_mapa" >
                            <li  title="Entrada"id="Circle_Nuñez" class="Circle C1"    onmouseover="mostrar_1()" onmouseout="No_mostrar_1()" ></li>
                            
                                 <li  >
                                <a href="La_Entrada/la_entrada.php" class="Text Text1 " id="Text_Box_Nuñez" onmouseover="mostrar_1()" onmouseout="No_mostrar_1()"> La Entrada</a>
                            </li> 
                            
                            

                            <li title="La Nuñez" id="Circle_La_Entrada" class="Circle C2 "  onmouseover="mostrar_2()" onmouseout="No_mostrar_2()" ></li>
                            <li  >
                            <a href="lasnunez/lasnunez.php" id="Text_Box_La_Entrada"  onmouseover="mostrar_2()" onmouseout="No_mostrar_2()"  class="Text Text2">Las Nuñez</a>
                            </li> 
                            
                            
                       
                            <li title="Curía" id="Circle_Curía" class="Circle C3" onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" ></li>
                            
                              <li  >
                            <a href="sanjose/sanjose.php" class="Text Text3" id="Text_Box_Curía"  onmouseover="mostrar_3()" onmouseout="No_mostrar_3()">San José </a>
                            </li> 
                            
                            <li title="San Jose" id="Circle_San_José" class="Circle C4" onmouseover="mostrar_4()" onmouseout="No_mostrar_4()" ></li>
                            
                            
                            <li  >
                            <a href="curia/curia.php" class="Text Text4 " id="Text_Box_San_José"  onmouseover="mostrar_4()" onmouseout="No_mostrar_4()"> Curía</a>
                            </li> 

                            <li title="Olon" id="Circle_Olón" class="Circle C5" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()" ></li>
                            <li  >
                            <a href="olon/olon.php" class="Text Text5" id="Text_Box_Olón"  onmouseover="mostrar_5()" onmouseout="No_mostrar_5()"> Olon</a>
                            </li> 
                            <li title="Montañita" id="Circle_Montañita" class="Circle C6" onmouseover="mostrar_6()" onmouseout="No_mostrar_6()" ></li>
                            <li  >
                            <a href="montanita/montanita.php" class="Text Text6 " id="Text_Box_Montañita"   onmouseover="mostrar_6()" onmouseout="No_mostrar_6()"> Montañita</a>
                            </li> 
                            <li title="Aconcito" id="Circle_Anconcito" class="Circle C7" onmouseover="mostrar_7()" onmouseout="No_mostrar_7()" ></li>
                            <li  >
                            <a href="anconcito/anconcito.php" class="Text Text7 " id="Text_Box_Anconcito"  onmouseover="mostrar_7()" onmouseout="No_mostrar_7()"> Aconcito</a>
                            </li> 
                            <li  title="Ancon" id="Circle_Ancon" class="Circle C8 " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()"  ></li>
                            <li   >
                            <a href="ancon/ancon.php" class="Text Text8" id="Text_Box_Ancón"  onmouseover="mostrar_8()" onmouseout="No_mostrar_8()"> Ancon</a>
                            </li> 
                        </ul>
                    </div>
                    
                </li>

                  <li class="nav-item"><span> </span><a class="nav-link" href="agenda_fiestas.php">Agenda de Fiesta</a></li>
                  
                  <li>Galeria Turística <span class="fa-solid fa-caret-down"> </span>
                    <ul class=" submenu submenu2">
                      <li><span class="fa-solid fa-caret-right"></span><a href="galeria_turistica_santa_elena.php"> Atractivos Turísticos</a></li>
                      <li><span class="fa-solid fa-caret-right"></span><a href="tradiciones_santa_elena.php"  >Leyendas y tradiciones</a></li>
                      <li><span class="fa-solid fa-caret-right"></span><a href="galeria__gastronomia.php">Gastronomía</a></li>
                    </ul>
                  </li>

                  <li>Planifica tu viaje <span class="fa-solid fa-caret-down"> </span>
                  
                  <ul class=" submenu submenu2">
                      <li><span class="fa-solid fa-caret-right"></span><a href="home_como_llegar.php">  ¿Cómo llegar?  </a></li>
                      <li><span class="fa-solid fa-caret-right"></span><a href="home_donde_alojarse.php"  >¿Dónde alojarse? </a></li>
                      
                      <li><span class="fa-solid fa-caret-right"></span><a href="home_itinerarios.php">Itinerario</a></li>
                      
                      <li><span class="fa-solid fa-caret-right"></span><a href="home_tiempo.php">Tiempo    </a></li>
                    </ul>
                 </li>
                  
                 
                  
                  
                  <li>
                    <button type="button" class="btnLogin" data-bs-toggle="modal"  data-bs-target="#staticBackdropLogin" >
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
                        echo  "<span class='usuario'  style='display:initial'>" .$usuarioIngresado."</span>" ;
                        echo  '<a href="cerrar.php"   class="cerrar"> <i class="fa-solid fa-right-from-bracket"></i> <span>salir</span> </a>' ;
                      }?>
                      
                  </li>

              </ul>
          </nav>
      </div>
  </div>
</header>

<!-- Modal -->
<div class="modal fade mt-5 position-fixed"   id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="post" id="Login" autocomplete="off">
                    <span style="color: red;font-size: 10px;margin-bottom: 5px;text-align: center;font-weight: 500;"><?php if(isset($errorLogin)){   echo $errorLogin;} ?></span>

          <div class="mb-3">
            <label for="" class="form-label"> <i class="fa fa-user" aria-hidden="true"></i> Usuario</label>
           <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
          </div>

          <div class="mb-3">
            <label for="" class="form-label"> <i class="fa fa-key" aria-hidden="true"></i> Password</label>
            <input type="text" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña">
          </div>
        <div class="form-group-item" align="center">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </div>
      <div class="form-group-item" align="center">
          <br><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdropcrecuperarContra" >¿Olvidaste tu contraseña?</a><br>
      </div>
      <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropRegistro" >Registrarse</button>
          
          <a>Para ingresar a la Administración de la página</a><a href="adminsite/login.php" >pulsa aqui</a>
      </div>
      
      <div id="alerta__info"> </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdropcrecuperarContra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Contraseña</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="nuevopassword" autocompleted="off">
            <div class="mb-3">
                <label for="" class="form-label"> <i class="fa fa-envelope" aria-hidden="true"></i> Correo electronico</label>
                <input type="email" class="form-control" name="correo" id="correo2" aria-describedby="emailHelpId" placeholder="abc@gmail.com">
            </div>
          
          <div class="mb-3">
            <label for="" class="form-label"> <i class="fa fa-key" aria-hidden="true"></i> nueva contraseña</label>
            <input type="password" class="form-control" name="psw" id="psw2" aria-describedby="emailHelpId" placeholder="123456">
          </div>
          
          <div class="mb-3">
                <span id="info__psw" ></span>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle    ="modal"  data-bs-target="#staticBackdropLogin" >Regresar</button>
            <button type="submit" class="btn btn-primary">Guardar </button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<style >
    
    #psw ,
    #contrasenia{
   -webkit-text-security: disc; /* Safari y algunos navegadores basados en WebKit */
   text-security: disc; /* Navegadores que soportan la propiedad text-security */
}

</style>

<!-- Modal -->
<div class="modal fade " id="staticBackdropRegistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro </h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="staticBackdrop" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
   <form  method="post" id="Registro" autocomplete="off" >
         <div class="d-flex  flex-row justify-content-between" >
              <div class=" p-2 flex-fill">
            <label for="" class="form-label mb-3"> <i class="fa fa-user-circle" aria-hidden="true"></i> Nombres Completo</label>
              <br> <br>
            <label for="" class="form-label mb-3"> <i class="fa fa-user" aria-hidden="true"></i> Usuario</label>
            <br> <br> 
            <label for="" class="form-label mb-3"> <i class="fa fa-key" aria-hidden="true"></i> contraseña</label>
            <br><br> 
            <label for="" class="form-label mb-3"> <i class="fa fa-envelope" aria-hidden="true"></i> Correo electronico</label>
            <br><br> 
            <label for="" class="form-label mb-3"> <i class="fa fa-calendar" aria-hidden="true"></i> Fecha Nacimiento</label>

                            <br>
            <label for="" class="form-label mb-3"> <i class="fa fa-venus-mars" aria-hidden="true"></i> Sexo</label>       
        <br><br> 
            <label for="" class="form-label mb-3"> <i class="fa  fa-earth-americas" aria-hidden="true"></i> Pais</label>       
        <br><br> 
            <label for="" class="form-label mb-3" id="provinciaTitle" style="display:none"> <i class="fa  fa-earth-americas" aria-hidden="true"  ></i> Provincia</label>       

          </div>
          
          <div class=" flex-fill ">
            <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelpId" placeholder="Jordan Alexander Castro Lino">
            <br>

            <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
            <br>

            <input type="text" class="form-control" name="psw" id="psw" aria-describedby="emailHelpId" placeholder="123456">
            <br>

            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="abc@gmail.com">
            <br>

            <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="emailHelpId" placeholder="abc@gmail.com">
            <br>
            
                        <div class="d-flex">
              <div class="form-group">
                <input id="gender_M" class="custom-range" type="radio" name="gender" value="M" checked>
                <label for="my-input">Hombre</label>
              </div>      
              <div class="form-group ms-5">
                <input id="gender_F" class="custom-range" type="radio" name="gender" value="F">
                <label for="my-input">Mujer</label>
              </div>
            </div>

 <br>
            <select class="form-select " name="ciudad" id="ciudad"  aria-label="Default select example" onclick="mostrarProvincia()">
              <option selected>seleccione un pais</option>
              <?php  
                  include_once './models/db.php';
                  // echo $img_path;
                  $sql = "SELECT * FROM pais ";
                mysqli_set_charset($conexion, "utf8mb4");

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
            <br>

            <select class="form-select " name="provincia" id="provincia"  aria-label="Default select example" style="display:none">
              <option value=0  selected>seleccione Provincia de origen</option>
            
              <?php  
                  $sql = "SELECT * FROM provincia ";
                  mysqli_set_charset($conexion, "utf8mb4");
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
    
            <script>
              function mostrarProvincia() {
                  var paisSeleccionado = document.getElementById("ciudad").value;
                  if (paisSeleccionado == "52") { // Cambiar "52" por el ID del país específico
                      document.getElementById("provincia").style.display = "block";
                      document.getElementById("provinciaTitle").style.display = "block";
                      
                  } else {
                      document.getElementById("provincia").style.display = "none";
                      document.getElementById("provinciaTitle").style.display = "none";
                  }
              }
            </script>
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


<main class="mainpv">

<style>
    .mainpv{
        margin-top:110px;
    }
    @media screen and (max-width:1020px ){
        .mainpv{
            margin-top:80px;
        }
    }
    @media screen and (max-width:898px ){
        .mainpv{
            margin-top:50px;
        }
    }
    @media screen and (max-width:759px ){
        .mainpv{
            margin-top:20px;
        }
    }
</style>
