<?php include_once './template/header.php' ?>
<div class=" contenido ">
  <figure class="figure position-absolute " style="top:0; left: 0; right:0; ">
    <img src="imagenes/imagen1.jpg" class="figure-img img-fluid rounded" style="width:100%; height:80vh; object-fit:cover;" id="logo">
    <figcaption class="position-absolute" style="top:200px; left: 40px;  ">
      <h2 class="Texto  text-center"><?php echo $texto_traducido["body"][0] ?></h2>
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

    <h3 class="fw-bold    mt-5 text-center titulo__busqueda"><?php echo $texto_traducido["body"][1] ?>
    </h3>
    <section id="contenedor-main">

      <div id="altura">
        <div class="input-wrapper">
          <input type="text" name="buscador" id="buscador" placeholder="Buscar..." class="w-50">

        </div>
        <ul id="listaArticulos">
          <li class="articulo"><a style="text-decoration: none; color:black" href="gastronomia_curia.php"><?php echo $texto_traducido["articulos"][0] ?> Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="galeria_turistica_santa_elena.php"><?php echo $texto_traducido["articulos"][1] ?> Santa Elena</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="tradiciones_santa_elena.php"><?php echo $texto_traducido["articulos"][2] ?> Santa Elena</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="galeria__gastronomia.php"><?php echo $texto_traducido["articulos"][0] ?> Santa Elena</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\ancon.php">Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito\anconcito.php">Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\curia.php">Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon\olon.php">olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjose.php">San José</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\montanita.php">Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunez.php">Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\la_entrada.php">La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\deportes.php"><?php echo $texto_traducido["articulos"][3] ?> en Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\gastronomia_laentrada.php"><?php echo $texto_traducido["articulos"][0] ?> La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\deportes.php"><?php echo $texto_traducido["articulos"][3] ?> en Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunezgaleriasenderos.php">Rutas de las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\anconcomollegar.php"><?php echo $texto_traducido["articulos"][4] ?> Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\comollegar_laentrada.php"><?php echo $texto_traducido["articulos"][4] ?> La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunez_planificatuviaje_comollegar.php"><?php echo $texto_traducido["articulos"][4] ?> Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\como_llegar_curia.php"><?php echo $texto_traducido["articulos"][4] ?> Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\olon\comollegarolon.php"><?php echo $texto_traducido["articulos"][4] ?> Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjosecomollegar.php"><?php echo $texto_traducido["articulos"][4] ?> San José</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\comollegar.php"><?php echo $texto_traducido["articulos"][4] ?> Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito\hotelesanconcito.php"><?php echo $texto_traducido["articulos"][5] ?> Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\hospedaje_la_entrada.php"><?php echo $texto_traducido["articulos"][5] ?> La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\quedarse_curia.php"><?php echo $texto_traducido["articulos"][5] ?> Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunez_planificatuviaje_hoteles.php"><?php echo $texto_traducido["articulos"][5] ?> Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\hoteles.php"><?php echo $texto_traducido["articulos"][5] ?> Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon\quedarseolon.php"><?php echo $texto_traducido["articulos"][5] ?> Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjosequedarse.php"><?php echo $texto_traducido["articulos"][5] ?> San José</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\anconquedarse.php"><?php echo $texto_traducido["articulos"][5] ?> Ancón</a></li>

          <li class="articulo"><a style="text-decoration: none; color:black" href="fiestas_febrero.php"><?php echo $texto_traducido["articulos"][6] ?> febrero</a></li>



          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\cultura_laentrada.php"><?php echo $texto_traducido["articulos"][6] ?> La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunezculturatradiciones.php"><?php echo $texto_traducido["articulos"][6] ?> Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="curia\cultura.php"><?php echo $texto_traducido["articulos"][6] ?> Curía</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon\cultura.php"><?php echo $texto_traducido["articulos"][6] ?> Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito\culturaanconcito.php"><?php echo $texto_traducido["articulos"][6] ?> Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon\cultura.php"><?php echo $texto_traducido["articulos"][6] ?> Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita\cultura.php"><?php echo $texto_traducido["articulos"][6] ?> Montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose\sanjosecultura.php"><?php echo $texto_traducido["articulos"][6] ?> San José</a></li>


          <li class="articulo"><a style="text-decoration: none; color:black" href="La_Entrada\restaurantes_laentrada.php"><?php echo $texto_traducido["articulos"][7] ?> La Entrada</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="lasnunez\lasnunezreservadeexperiencias.php"><?php echo $texto_traducido["articulos"][8] ?> Las Nuñez</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="ancon/anconfolletos.php"><?php echo $texto_traducido["articulos"][8] ?> Ancón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="anconcito/itinerariosanconcito.php"><?php echo $texto_traducido["articulos"][9] ?> Anconcito</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="olon/reserva.php"><?php echo $texto_traducido["articulos"][8] ?> Olón</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="montanita/reservadeexperiencia.php"><?php echo $texto_traducido["articulos"][9] ?> montañita</a></li>
          <li class="articulo"><a style="text-decoration: none; color:black" href="sanjose/sanjoserestaurantes.php"><?php echo $texto_traducido["articulos"][7] ?> San José</a></li>




        </ul>
      </div>
    </section>
  </div>
</div>

<h3 class="fw-bold fs-1 mb-5 text-center mt-5"><?php echo $texto_traducido["body"][2] ?>
</h3>
<div class="row">
  <div class="col-sm-6">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card shadow p-3 mb-5 " style="max-width: 38rem;border:none;">
          <div class="card-header">
            <h5 class="card-title text-center fs-3" id="NombreComuna">Montañita</h5>
          </div>
          <img class="card-img-top" style="width: 100%; height:40vh;" alt="ImgCambiante" id="ImgCambiante">
          <div class="card-body text-bg-light">
            <p class="card-text text-dark" id="DescripcionComuna"><?php echo $texto_traducido["carousel"][0] ?></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <script>
      // Array de objetos con la información de cada slide
      const slides = [{
          nombre: "Montañita",
          descripcion: "<?php echo $texto_traducido["carousel"][0] ?>",
          imagen: "imagenes/montanita.jpg"
        },
        {
          nombre: "La Nuñez",
          descripcion: "<?php echo $texto_traducido["carousel"][1] ?>",
          imagen: "imagenes/nunez.jpg"
        },
        {
          nombre: "La Entrada",
          descripcion: "<?php echo $texto_traducido["carousel"][2] ?>",
          imagen: "imagenes/imagen.jpg"
        },
        {
          nombre: "Curia",
          descripcion: "<?php echo $texto_traducido["carousel"][3] ?>",
          imagen: "imagenes/curia.jpg"
        },
        {
          nombre: "San jose",
          descripcion: "<?php echo $texto_traducido["carousel"][4] ?>",
          imagen: "imagenes/sanjose.jpg"
        },
      ];

      // Función para cambiar el contenido del slide
      function cambiarContenido(slide) {
        document.querySelector("#NombreComuna").textContent = slide.nombre;
        document.querySelector("#DescripcionComuna").textContent = slide.descripcion;
        document.querySelector("#ImgCambiante").src = slide.imagen;
      }

      let currentIndex = 0; // Índice actual del slide

      // Función para avanzar al siguiente slide
      function mostrarSiguienteSlide() {
        currentIndex = (currentIndex + 1) % slides.length; // Avanzar al siguiente, y volver al principio si es el último
        cambiarContenido(slides[currentIndex]);
      }

      // Agregar evento de click al botón Next para mostrar el siguiente slide
      document.querySelector(".carousel-control-next").addEventListener("click", mostrarSiguienteSlide);

      // Cambiar el contenido al primer slide al cargar la página
      cambiarContenido(slides[currentIndex]);
    </script>
  </div>
  <div class="col-sm-6">
    <div class="MapaInteractivo">
      <img src="./imagenes/NuevoMapaSantaElena.png" alt="mapa de santa elena" class="Mapa">
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
        <h5 class="card-title text-center fs-4"> <?php echo $texto_traducido["subheader"][7] ?><h5>
      </div>
      <img src="imagenes/senderos2.jpg" class="card-img" style="height:250px; object-fit:cover;">

    </a>
  </div>

  <div class="col ">
    <a href="./galeria__gastronomia.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4"><?php echo $texto_traducido["subheader"][2] ?><h5>
      </div>
      <img src="imagenes/naturaleza_olon.jpg" class="card-img" style="height:250px; object-fit:cover;">


    </a>
  </div>

  <div class="col">
    <a href="./montanita/montanita.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4"><?php echo $texto_traducido["subheader"][8] ?><h5>
      </div>
      <img src="imagenes/surf.jpg" class="card-img" style="height:250px; object-fit:cover;">

    </a>
  </div>

  <div class="col mx-auto">
    <a href="./tradiciones_santa_elena.php" class="card " style="text-decoration: none;">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title text-center fs-4"><?php echo $texto_traducido["subheader"][1] ?><h5>
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
    <h5 class="text-center display-5 fw-semibold text-dark text-center">Santa Elena</h5>

  </figcaption>
</figure>

<div class="row position-relative bottom-100">

  <div class="card   h-100" style="border: none;">
    <img src="imagenes/imagenFondo.jpg" class="card-img" style="width:100%; height:230px; object-fit:cover">
    <div class="card-img-overlay" style="top:10px; left:0">
      <h5 class="card-title fs-1 fw-semibold text-dark text-center">&nbsp;</h5>
    </div>
  </div>
  <div class="card-group   mb-5">


    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_anconcito.php">
        <img src="imagenes/Gastronomia/Anconcito/0826_arroz_marinero_2.jpg" class="card-img-top" style="width:100%; height:250px">
        <div class="card-body">
          <h5 class="card-title"><?php echo $texto_traducido["gastronomia-card"][0] ?></h5>
          <p class="card-text" style="text-align: justify;"><?php echo $texto_traducido["gastronomia-card"][1] ?></p>
        </div>

      </a>
    </div>

    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_san_jose.php">
        <img src="imagenes/Arroz_con_mariscos.jpg" class="card-img-top" style="width:100%; height:250px; ">
        <div class="card-body">
          <h5 class="card-title"><?php echo $texto_traducido["gastronomia-card"][2] ?></h5>
          <p class="card-text" style="text-align: justify;"><?php echo $texto_traducido["gastronomia-card"][3] ?></p>
        </div>

      </a>
    </div>

    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_curia.php">
        <img src="imagenes/gastronomia_c.jpg" class="card-img-top" style="width:100%; height:250px; ">
        <div class="card-body">
          <h5 class="card-title"><?php echo $texto_traducido["gastronomia-card"][4] ?></h5>
          <p class="card-text" style="text-align: justify;"><?php echo $texto_traducido["gastronomia-card"][5] ?></p>
        </div>

      </a>
    </div>

    <div class="col">
      <a class="card w-100 text-decoration-none text-dark " href="./gastronomia_montanita.php">
        <img src="imagenes/Gastronomia/Montanita/0841_arroz_marinero_4.jpg" class="card-img-top" style="width:100%; height:250px; ">
        <div class="card-body">
          <h5 class="card-title"><?php echo $texto_traducido["gastronomia-card"][6] ?></h5>
          <p class="card-text" style="text-align: justify;"><?php echo $texto_traducido["gastronomia-card"][7] ?></p>
        </div>

      </a>
    </div>
  </div>
</div>

<?php include_once './template/footer.php'  ?>