<?php include_once './template/header.php' ?>
<div class=" contenido ">
  <figure class="figure position-absolute " style="top:0; left: 0; right:0; ">
    <img src="imagenes/imagen1.jpg" class="figure-img img-fluid rounded" style="width:100%; height:80vh; object-fit:cover;" id="logo">
    <figcaption class="position-absolute" style="top:200px; left: 40px;  ">
      <h2 class="Texto  text-center">Vive la Experiencia... Turismo Santa Elena</h2>
    </figcaption>
  </figure>

  <figure id="Wrapper">
    <figure class="d-flex">
      <figure class="Card__Wrapper">
        <img src="imagenes/imagen2.jpg" alt="imagen1" class="img-fluid imagen_wrapper" id="ImagenWrapper__1">
      </figure>

      <figure class="Card__Wrapper">
        <img src="imagenes/imagen3.jpg" alt="imagen2" class="figure-img img-fluid imagen_wrapper" id="ImagenWrapper__2">
      </figure>

      <figure class="Card__Wrapper">
        <img src="imagenes/imagen4.jpg" alt="imagen3" class="figure-img img-fluid imagen_wrapper" id="ImagenWrapper__3">
      </figure>

      <figure class="Card__Wrapper">
        <img src="imagenes/imagen5.jpg" alt="imagen4" class="figure-img img-fluid imagen_wrapper" id="ImagenWrapper__4">
      </figure>

      <figure class="Card__Wrapper">
        <img src="imagenes/imagen.jpg" alt="imagen5" class="figure-img img-fluid imagen_wrapper" id="ImagenWrapper__5">
      </figure>
    </figure>
  </figure>
  <div class="carousel-indicators position-absolute controles ">
    <button id="Left" class=" btn_control">
      <span class="fa fa-arrow-left " aria-hidden="true"></span>
    </button>

    <span id="number1"> - </span>

    <button id="Right" class="btn_control ">
      <span class="fa fa-arrow-right" aria-hidden="true"></span>
    </button>
  </div>
</div>


<style>
  .imagen {
    background-image: url('./imagenes/senderos.jpg');
  }
</style>


<div class="base">
  <div class="imagen">

    <h3 class="fw-bold    mt-5 text-center titulo__busqueda">Explora nuestro sitio
    </h3>
    <section id="contenedor-main">

      <div id="altura">
        <div class="input-wrapper">
          <input type="text" name="buscador" id="buscador" placeholder="Buscar..." class="w-50">

        </div>
        <ul id="listaArticulos">
          <li class="articulo"><a style="text-decoration: none; color:black" href="gastronomia_curia.php">Gastronomía Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="galeria_turistica_santa_elena.php">Turismo Santa Elena</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="tradiciones_santa_elena.php">Cultura Santa Elena</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="galeria__gastronomia.php">Gastronomía Santa Elena</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\ancon.php">Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito\anconcito.php">Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\curia.php">Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon\olon.php">olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjose.php">San José</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\montanita.php">Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunez.php">Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\la_entrada.php">La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\deportes.php">Deportes en Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\gastronomia_laentrada.php">Gastronomia La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\deportes.php">Deportes en Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunezgaleriasenderos.php">Rutas de las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\anconcomollegar.php">Como llegar a Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\comollegar_laentrada.php">Como llegar a La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunez_planificatuviaje_comollegar.php">Como llegar a Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\como_llegar_curia.php">Como llegar a Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\olon\comollegarolon.php">Como llegar a Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjosecomollegar.php">Como llegar a San José</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\comollegar.php">Como llegar a Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito\hotelesanconcito.php">Hoteles en Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\hospedaje_la_entrada.php">Hoteles La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\quedarse_curia.php">Hoteles de Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunez_planificatuviaje_hoteles.php">Hoteles de Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\hoteles.php">Hoteles de Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon\quedarseolon.php">Hoteles de Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjosequedarse.php">Hoteles de San José</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\anconquedarse.php">Hoteles en Ancón</a></li>

          <li class="articulo"><a style="text-decoration: none; color:black" href="fiestas_febrero.php">Fiestas en febrero</a></li>



          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\cultura_laentrada.php">Fiestas La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunezculturatradiciones.php">Fiestas en Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\cultura.php">Fiestas en Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\cultura.php">Fiestas en Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito\culturaanconcito.php">Fiestas en Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon\cultura.php">Fiestas en Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\cultura.php">Fiestas en Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjosecultura.php">Fiestas en San José</a></li>


          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\restaurantes_laentrada.php">Restaurantes La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunezreservadeexperiencias.php">Folletos de Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon/anconfolletos.php">Folletos Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito/itinerariosanconcito.php">Itinerario de Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon/reserva.php">Folletos de Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita/reservadeexperiencia.php">Iterinario de montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose/sanjoserestaurantes.php">Restaurantes en San José</a></li>




        </ul>
      </div>
    </section>
  </div>
</div>

<h3 class="fw-bold fs-1 mb-5 text-center mt-5">Descubre Nuestros Destinos
</h3>
<div class="row">
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 " style="max-width: 25rem;border:none;">
      <div class="card-header">
        <h5 class="card-title text-center fs-3" id="NombreComuna">Montañita</h5>

      </div>
      <img src="imagenes/montanita.jpg" class="card-img-top" style="width: 100%; height:40vh;" alt="ImgCambiante" id="ImgCambiante">
      <div class="card-body text-bg-light">
        <p class="card-text text-dark" id="DescripcionComuna">sitio turístico que atrae a miles de turistas mensualmente, por su encanto en las olas para realizar surfing y todo tipo de deportes extremos, cuenta con excelentes hoteles, restaurantes, bares y discotecas.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <figure class="MapaInteractivo">
      <img src="./imagenes/Map.svg" alt="mapa de santa elena" class="Mapa " style="width:100%;height:100vh;">
      <ul class="MapaInteractivo__Localizador">
        <li id="PuntoNunez" onmousemove="Ver__Comuna__E()">
          <span class="Circle C1"></span>
          <a href="La_Entrada/la_entrada.php" class="Text Text1"> La Entrada</a>
        </li>

        <li id="PuntoEntrada" onmousemove="Ver__Comuna__N()">
          <span class="Circle  C2"></span>
          <a href="lasnunez/lasnunez.php" class="Text Text2"> Las Núñez </a>
        </li>

        <li id="PuntoCuria" onmousemove="Ver__Comuna__SJ()">
          <span class="Circle C3 C3__map"></span>
          <a href="sanjose/sanjose.php" class="Text Text3"> San José </a>
        </li>

        <li id="PuntoSanJose" onmousemove="Ver__Comuna__C()">
          <span class="Circle C4 C4__map"></span>
          <a href="curia/curia.php" class="Text Text4">Curía </a>
        </li>

        <li id="PuntoOlon" onmousemove="Ver__Comuna__O()">
          <span class="Circle C5"></span>
          <a href="olon/olon.php" class="Text Text5"> Olón</a>
        </li>

        <li id="PuntoMontanita" onmousemove="Ver__Comuna__M()">
          <span class="Circle C6"></span>
          <a href="#" class="Text Text6"> Montañita</a>
        </li>

        <li id="PuntoAconcito" onmousemove="Ver__Comuna__AC()">
          <span class="Circle  C7 C7__Mapa"></span>
          <a href="anconcito/anconcito.php" class="Text Text7 Text7__Mapa"> Aconcito</a>
        </li>

        <li id="PuntoAcon" onmousemove="Ver__Comuna__A()">
          <span class="Circle  C8 C8__Mapa"></span>
          <a href="ancon/ancon.php" class="Text Text8 Text8__Mapa"> Ancón</a>
        </li>
      </ul>
    </figure>
  </div>
</div>
</div>

<div class="card mb-3  ">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="imagenes/santaElena.jpg" class="img-fluid rounded-start imagen_map" alt="santa elena" style="width:100%; height:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title fs-1 text-center mb-3">¡Conoce Santa Elena!</h5>
        <p class="card-text fs-4" style="text-align: justify;">Santa Elena es una provincia de la costa de Ecuador creada el 7 de noviembre de 2007, la más joven de las 24 actuales, con territorios que anterior a esa fecha formaban parte de la provincia del Guayas, al oeste de esta. Su capital es la ciudad de Santa Elena. En esta provincia se encuentra una gran infraestructura hotelera, una refinería de petróleo, aeropuerto y puerto marítimo. Se encuentra conformado por sus ocho comunas principales: Las Núñez, La Entrada y Rinconada, San José, Curía, Olón, Montañita, Anconcito, Ancón.</p>

      </div>
    </div>
  </div>
</div>



<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
  <div class="col">
    <a href="lasnunez/lasnunezrutasyexcursiones.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4"> Rutas y excursiones<h5>
      </div>
      <img src="imagenes/senderos2.jpg" class="card-img" style="height:250px; object-fit:cover;">

    </a>
  </div>

  <div class="col ">
    <a href="./galeria__gastronomia.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4">Gastronomía<h5>
      </div>
      <img src="imagenes/naturaleza_olon.jpg" class="card-img" style="height:250px; object-fit:cover;">


    </a>
  </div>

  <div class="col">
    <a href="./montanita/montanita.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4">Deportes y Aventura<h5>
      </div>
      <img src="imagenes/surf.jpg" class="card-img" style="height:250px; object-fit:cover;">

    </a>
  </div>

  <div class="col mx-auto">
    <a href="./tradiciones_santa_elena.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4">Cultura y Tradiciones<h5>
      </div>
      <img src="imagenes/cultura_nunez.jpeg" class="card-img" style="height:100%">

    </a>
  </div>


</div>

<figure class="figure position-relative  d-flex mt-5 justify-content-between" style="width:100%">
  <img class="img-fluid" src="imagenes/ruta_anconcito.jpg" alt="1" style="width:25%; object-fit:cover;">
  <img class="img-fluid" src="imagenes/ruta_montanita.jpg" alt="2" style="width:25%; object-fit:cover;">
  <img class="img-fluid" src="imagenes/complejo_deportivo.jpg" alt="3" style="width:25%; object-fit:cover;">
  <img class="img-fluid" src="imagenes/imagen.jpg" alt="4" style="width:25%; object-fit:cover;">
  <figcaption class="position-absolute " style="top:50px; left:0; right:0;">
    <h5 class="text-center display-5 fw-semibold text-dark text-center">Rutas de Santa Elena</h5>

  </figcaption>
</figure>

<div class="row position-relative bottom-100">

  <div class="card   h-100" style="border: none;">
    <img src="imagenes/imagenFondo.jpg" class="card-img" style="width:100%; height:230px; object-fit:cover">
    <div class="card-img-overlay" style="top:10px; left:0">
      <h5 class="card-title fs-1 fw-semibold text-dark text-center">Disfruta los Atractivos Turísticos de Santa Elena</h5>
    </div>
  </div>
  <div class="card-group   mb-5">


    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_anconcito.php">
        <img src="imagenes/Gastronomia/Anconcito/0826_arroz_marinero_2.jpg" class="card-img-top" style="width:100%; height:250px">
        <div class="card-body">
          <h5 class="card-title">Gastronomía Anconcito</h5>
          <p class="card-text" style="text-align: justify;">Venga a degustar los platos a la carta, ofrece los locales de san josé</p>
        </div>

      </a>
    </div>

    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_san_jose.php">
        <img src="imagenes/Arroz_con_mariscos.jpg" class="card-img-top" style="width:100%; height:250px; ">
        <div class="card-body">
          <h5 class="card-title">Gastronomía San José</h5>
          <p class="card-text" style="text-align: justify;">Venga a degustar los platos a la carta, ofrece los locales de san josé</p>
        </div>

      </a>
    </div>

    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_curia.php">
        <img src="imagenes/gastronomia_c.jpg" class="card-img-top" style="width:100%; height:250px; ">
        <div class="card-body">
          <h5 class="card-title">Gastronomía Curia</h5>
          <p class="card-text" style="text-align: justify;">Venga a degustar los platos típicos que ofrece la comuna curia.</p>
        </div>

      </a>
    </div>

    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_montanita.php">
        <img src="imagenes/Gastronomia/Montanita/0841_arroz_marinero_4.jpg" class="card-img-top" style="width:100%; height:250px; ">
        <div class="card-body">
          <h5 class="card-title">Gastronomía Montañita</h5>
          <p class="card-text" style="text-align: justify;">Venga a degustar los platos típicos que ofrece la comuna Montañita.</p>
        </div>

      </a>
    </div>
  </div>
</div>

<?php include_once './template/footer.php'  ?>