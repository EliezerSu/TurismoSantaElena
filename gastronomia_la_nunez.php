<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a>
</div>

<section>

  <div id="carouselExampleCaptions" class="carousel slide col-12 pb-4 pt-4 mx-auto slider-responsive" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/la_nunes/0836_langostinoenmanjardetagua3.jpg">
          <img src="imagenes/Gastronomia/la_nunes/0836_langostinoenmanjardetagua3.jpg" class="d-block w-100" alt="...">
        </a>
        
        <div class="carousel-caption d-md-block">
          <p>Langostino en manjar de tagua.</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/la_nunes/0837_arrozmarinero2.jpg">
          <img src="imagenes/Gastronomia/la_nunes/0837_arrozmarinero2.jpg" class="d-block w-100" alt="...">
        </a>
        
        <div class="carousel-caption d-md-block">
          <p>Arroz marinero.</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/la_nunes/0838_arroznorteno1.jpeg">
          <img src="imagenes/Gastronomia/la_nunes/0838_arroznorteno1.jpeg" class="d-block w-100" alt="...">
        </a>
        
        <div class="carousel-caption d-md-block">
          <p>Arroz norteño.</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/la_nunes/0840_sopadecamaron2.jpg">
          <img src="imagenes/Gastronomia/la_nunes/0840_sopadecamaron2.jpg" class="d-block w-100" alt="...">
        </a>
       
        <div class="carousel-caption d-md-block">
          <p>Sopa de camarón.</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/la_nunes/0839_camaronesalajillo1.jpg">
          <img src="imagenes/Gastronomia/la_nunes/0839_camaronesalajillo1.jpg" class="d-block w-100" alt="...">
        </a>
        
        <div class="carousel-caption d-md-block">
          <p>Camarón en salsa de ajillo</p>
        </div>
      </div>
    
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden shadow">Previous</span>
    </button>
    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden shadow">Next</span>
    </button>
  </div>

</section>

<style>
  .h5, p{
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
    font-size: 24px;
  }
  .slider-responsive{
    width: 70%;
  }
  @media screen and (max-width: 600px) {
    .slider-responsive{
      width: 100%;
    }
    .h5, p{
      font-size: 18px;
    }
  }
</style>

<?php include_once './template/footer.php';?>