<?php include './template/headerpviaje.php' ?>
  <div class="page">
    <section class="section ">
      <div style="text-align: center;" class="banner-tiempo">
        <div>
          <br><br>
          <h3 style="text-align: center;" class="titulo-llegar">Itinerarios</h3>
        </div>
      </div>
    </section>
    <section class="boto">
    <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    </section>
    <br>
    <br>
    <br>
    <br>
    <section>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Reserva de Experiencias</b></h1>
        <br>
        <p class="paAe" style="text-align: justify; font-size: 17px;">
          En la provincia de Santa Elena vivirás una experiencia única, donde podrás conocer más sobre su gente, sus atractivo naturales y culturales, las diferentes actividades y degustar sabores únicos, con nuestros folletos podrás descubrir lo mejor de esta bella provincia.        </p>
        </p>
        <br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Generalidades "Las Núñez"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_lasnunez1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_lasnunez2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center ">
        <a class="btn btn-primary btn-lg" style="height:50px; font-size:18px;padding-top:12px ; margin-right:12px" href="pdf/lasnunez/las_nunez.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
        <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo "     <a class='btn btn-primary btn-lg' href='pdf/lasnunez/atractivos_naturales_culturales.pdf' download='Atractivos naturales y culturales.pdf'>Descargar</a>  ";
          }
        ?>
    </section>

    <section>
    <br><br><br><br>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Atractivos naturales y culturales "Las Núnez"</b></h1>
    <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_culturales_lasnunez1.png" alt="" class="img-fluid rounded">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_culturales_lasnunez2.png" alt="" class="img-fluid rounded">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
        <a class="btn btn-primary btn-lg" href="pdf/lasnunez/atractivos_naturales_culturales.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
        <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo "<a class='btn btn-primary btn-lg' href='pdf/lasnunez/atractivos_naturales_culturales.pdf' download='Atractivos naturales y culturales.pdf'>Descargar</a>  
            ";
          }
      ?>        
      </div>
    </section>


    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Actividades, gastronomía y cultura "Las Núñez"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/actividades_gastronomia_cultura_lasnunez1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/actividades_gastronomia_cultura_lasnunez2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/lasnunez/actividades_gastronomia_cultura.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo "          <a class='btn btn-primary btn-lg' href='pdf/lasnunez/actividades_gastronomia_cultura.pdf' download='Actividades, gastronomía y cultura.pdf'>Descargar</a>

            ";
          }
        ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Tríptico - Las Núñez</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/triptico_lasnunez1.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/triptico_lasnunez2.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/lasnunez/triptico_las_nunez.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo ' <a class="btn btn-primary btn-lg" href="pdf/lasnunez/triptico_las_nunez.pdf" download="Triptico - Las Núñez.pdf">Descargar</a>';
          }
        ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Atractivos naturales y culturales "Anconcito"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivosNaturales_anconcito1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivosNaturales_anconcito2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/anconcito/Atractivos_naturales_culturales.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '    <a class="btn btn-outline-success btn-lg" href="pdf/anconcito/Atractivos_naturales_culturales.pdf" download="Atractivos naturales y culturales Anconcito.pdf">Descargar</a>';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Generalidades "Anconcito"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_anconcito1.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_anconcito2.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/anconcito/Actividades_culturas.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '<a class="btn btn-primary btn-lg" href="pdf/anconcito/Actividades_culturas.pdf" download="Generalidades Anconcito.pdf">Descargar</a>
            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Actividades, gastronomía y cultura "Anconcito"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_anconcito1.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_anconcito2.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/anconcito/Gastronomia_Anconcito.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '
            <a class="btn btn-outline-success btn-lg" href="pdf/anconcito/Gastronomia_Anconcito.pdf" download="Actividades, gastronomía y cultura Anconcito.pdf">Descargar</a>            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Atractivos naturales y culturales "Montañita"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_culturales_montanita.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/montanita/atractivos-naturales-montanita.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '
            <a class="btn btn-outline-success btn-lg" href="pdf/montanita/atractivos-naturales-montanita.pdf" download="Atractivos naturales y culturales Montañita.pdf">Descargar</a>
            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Generalidades "Montañita"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_montanita.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/montanita/generalidades-montanita.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '
            <a class="btn btn-outline-success btn-lg" href="pdf/montanita/generalidades-montanita.pdf" download="Generalidades Montañita.pdf">Descargar</a>
            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Actividades, gastronomía y cultura "Montañita"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/actividades_gastronomia_cultura_montanita.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/montanita/gastronomia-montanita.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '          <a class="btn btn-outline-success btn-lg" href="pdf/montanita/gastronomia-montanita.pdf" download="Actividades, gastronomía y cultura Montañita.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Atractivos naturales y culturales "Olón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_olon1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_olon2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/olon/Atractivos_Naturales_Culturales.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '         
            <a class="btn btn-outline-success btn-lg" href="pdf/olon/Atractivos_Naturales_Culturales.pdf" download="Atractivos naturales y culturales Olón.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Generalidades "Olón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_olon1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/generalidades_olon2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/olon/Generalidades_Olón.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '          
            <a class="btn btn-outline-success btn-lg" href="pdf/olon/Generalidades_Olón.pdf" download="Generalidades Olón.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Actividades, gastronomía y cultura "Olón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/gastronomia_olon.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/olon/Gastronomía.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '                   <a class="btn btn-outline-success btn-lg" href="pdf/olon/Gastronomía.pdf" download="Actividades, gastronomía y cultura Olón.pdf">Descargar</a>


            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Cultura "Olón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/cultura_olon1.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/cultura_olon2.jpeg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/olon/Cultura.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '         
            <a class="btn btn-outline-success btn-lg" href="pdf/olon/Cultura.pdf" download="Cultura Olón.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Itinerario full day "Olón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/Itinerario_full_day_olon.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/olon/Itinerario_Full_Day.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '          
            <a class="btn btn-btn-outline-success btn-lg" href="pdf/olon/Itinerario_Full_Day.pdf" download="Itinerario Full Day Olón.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Itinerario Viajes "Olón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/Itinerario_viajes_olon.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/olon/Itinerario_Viajes.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '         
            <a class="btn btn-outline-success btn-lg" href="pdf/olon/Itinerario_Viajes.pdf" download="Itinerario Viajes Olón.pdf">Descargar</a>


            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Atractivos naturales y culturales "La Entra y La Rinconada"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_entrada_y_rinconada1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_entrada_y_rinconada2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/laentrada/atractivos_naturales_culturales.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '         
            <a class="btn btn-outline-success btn-lg" href="pdf/laentrada/atractivos_naturales_culturales.pdf" download="Atractivos naturales y culturales La Entra y La Rinconada.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Actividades, gastronomía y cultura "La Entra y La Rinconada"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/gastronomia_entada_y_rinconada1.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/gastronomia_entada_y_rinconada2.png" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/laentrada/gastronomia_cultura.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '         
            <a class="btn btn-outline-success btn-lg" href="pdf/laentrada/gastronomia_cultura.pdf" download="Actividades, gastronomía y cultura La Entra y La Rinconada.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Triptico "Curía"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/Triptico_Folleto_Comuna_Curia1.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/Triptico_Folleto_Comuna_Curia2.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/curia/Triptico_Folleto_Comuna_Curia.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '          
            <a class="btn btn-outline-success btn-lg" href="pdf/curia/Triptico_Folleto_Comuna_Curia.pdf" download="Triptico Curía.pdf">Descargar</a>

            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Itinerario "San José"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/itinerario_sanjose1.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/itinerario_sanjose2.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/sanjose/itinerario_sanjose.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
          if(!isset($_SESSION['user'])) {
            echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
          }else{ 
            $usuarioIngresado = $_SESSION['user'];
            echo '         
            <a class="btn btn-outline-success btn-lg" href="pdf/sanjose/itinerario_sanjose.pdf" download="Itinerario San José.pdf">Descargar</a>


            ';
          }
      ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Atractivos Naturales y Culturales "Ancón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/atractivos_naturales_ancon1.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/ancon/atractivos_naturales_culturales.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
            if(!isset($_SESSION['user'])) {
              echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
            }else{ 
              $usuarioIngresado = $_SESSION['user'];
              echo '          
              <a class="btn btn-outline-success btn-lg" href="pdf/ancon/atractivos_naturales_culturales.pdf" download="Atractivos Naturales y Culturales Ancón.pdf">Descargar</a>

              ';
            }
          ?>
        </div>
    </section>

    <section>
        <br><br><br><br>
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Establecimientos turísticos "Ancón"</b></h1>
        <br>
        <div class="mx-auto text-center">
            <img src="imagenes/planifica_tu_viaje/establecimientos_turisticos_ancon.jpg" alt="" style="width: 80%; border-radius: 15px;">
        </div>
        <br><br>
        <div class="botonesPdf text-center">
          <a class="btn btn-primary btn-lg" href="pdf/ancon/establecimientos_turisticos.pdf" target="_blank">Ver en línea</a><br class="espacio"><br class="espacio">
          <?php 
            if(!isset($_SESSION['user'])) {
              echo "<a class='btn btn-primary btn-lg' style='color: #fff;' onclick='verificarSesion()'>Descargar archivo</a>";
            }else{ 
              $usuarioIngresado = $_SESSION['user'];
              echo '          
              <a class="btn btn-outline-success btn-lg" href="pdf/ancon/establecimientos_turisticos.pdf" download="Establecimientos turísticos Ancón.pdf">Descargar</a>
              
              ';
            }
            ?>
        </div>
    </section>

    <script>
      function verificarSesion() {
          alert("Debes iniciar sesión para realizar esta acción.");
      }
    </script>

    <br><br>
    <br><br>
  </div>
  <!-- Page Footer-->
<?php include './template/footer.php' ?>
