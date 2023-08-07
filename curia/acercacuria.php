<?php include("head.php"); ?>

<?php include("boton.php"); ?>
<section class="section section-sm section-first bg-default text-md-left">
  <div class="container">
    <h3 class="titulogente">Curía lugar paradisíaco</h3>
    <div class="row row-50 justify-content-center align-items-xl-center">
      <div class="col-md-10 col-lg-5 col-xl-6">
        <div class="slider1">
          <img class="crop" src="imagenes/curia/0541_historia_curia.jpg" alt="" />
        </div>
      </div>
      <div class="col-md-10 col-lg-7 col-xl-6">
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Playa virgen</b></h1>
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation"></li>
          </ul>
          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-4-1">
              <p style="text-align: justify; font-size: 17px;">
                La comuna Curía en la actualidad oferta el turismo de sol y playa, son varios los motivos por los que los turistas llegan a este destino como lo es el de esparcimiento y de descanso, ideal para pasarla en unión con toda la familia debido al ambiente tranquilo que hay en la zona, dentro de sus atractivos turísticos se encuentran la playa, el bosque, tradiciones y costumbres, la gastronomía y el mirador turístico natural que en la actualidad se está adecuado para la observación del paisaje de la zona, se destacan las aperturas de temporada, ferias artesanales, fiestas patronales y de la comunidad, atractivos con un índice de potencial alto, considerando así por su valor natural.
              </p>
              <p style="text-align: justify; font-size: 17px;">
                Además, cuenta con diferentes servicios complementarios de hospedaje y alimentación, a esto se le añade la amabilidad de su gente al momento de comunicarse con un turista o visitante que se interesa por conocer la localidad, estando siempre predispuestos a ayudar en diversas situaciones que se presenten durante la estancia de estos y a su vez brindándole la hospitalidad necesaria para hacerles sentir como en casa.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<style>
  .titulogente {
    text-align: center;
  }

  .galeria01 {
    font-family: "Montserrat", sans-serif, Arial, sans-serif;

  }

  .galeria01 h3 {
    text-align: center;
    margin: 20px 0 15px 0;

  }

  .slider1 {
    width: 30rem;
    height: 30rem;
    overflow: hidden;
    margin: 10px;
    position: relative;
  }

  .crop {
    position: absolute;
    left: -100%;
    right: -100%;
    top: -100%;
    bottom: -100%;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
  }

  .linea01 {
    margin-bottom: 40px;
  }

  .contenedor-imagenes01 {
    display: flex;
    width: 85%;
    margin: auto;
    justify-content: space-around;
    flex-wrap: wrap;
    border-radius: 3px;
  }

  .contenedor-imagenes01 .imagen01 {
    width: 32%;
    position: relative;
    height: 250px;
    margin-bottom: 5px;
    box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .75)
  }

  .imagen01 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .overlay01 {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.573);
    width: 100%;
    height: 0;
    overflow: hidden;
    transition: .5s ease;
  }

  .overlay01 h2 {
    color: #fff;
    font-weight: 300;
    font-size: 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
  }

  .imagen01:hover .overlay01 {
    height: 100%;
    cursor: pointer;
  }

  @media screen and (max-width:1000px) {
    .contenedor-imagenes01 {
      width: 95%;
    }
  }

  @media screen and (max-width:700px) {
    .titulogente {
      text-align: center;
      margin-top: 1.5rem;
    }

    .slider1 {
      width: 20rem;
      height: 20rem;
      overflow: hidden;
      margin: 10px;
      position: relative;
    }

    .crop {
      position: absolute;
      left: -100%;
      right: -100%;
      top: -100%;
      bottom: -100%;
      min-height: 100%;
      min-width: 100%;
      padding-left: 1rem;
    }
  }

  @media screen and (max-width:450px) {
    h1 {
      font-size: 22px;
    }

    .contenedor-imagenes01 {
      width: 98%;
    }

    .contenedor-imagenes01 .imagen01 {
      width: 80%;
    }
  }
</style>
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php"); ?>