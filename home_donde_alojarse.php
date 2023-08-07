<?php include("./template/headerpviaje.php")?>
  <div class="page">      
    <section class="section ">
      <div style="text-align: center;" class="banner-tiempo">
        <div>
          <br><br>
          <h3 style="text-align: center;" class="titulo-llegar">¿Dónde alojarse?</h3>
        </div>
      </div>
    </section>
    <section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <section>
      <div class="swiper-pagination" ></div>
    </section>
    <section class="section section-lg section-top-1 bg-gray-4" id="hotelerias"><!-- bg-gray-4 -->
      <div>
        <br>
        <br>
        <br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b>¿Dónde Alojarse?</b></h1>
      
        <div class="container mb-5"  >
          <div class="row row-cols-1  mt-5 row-cols-md-4 g-4" style="justify-content: center;justify-items: center;">
              <div class="container-card" style="width: 350px;">
                  <a class="card h-100 text-decoration-none" href="home_donde_alojarse_hoteles.php">
                      <img src="imagenes/donde_alojarse/anconcito/hotel_playa_punta_canela.jpg" class="card-img-top" style="width:100%; height:100%">
                  <div class="card-header">
                      <h3 class="text-center fs-5">Hoteles</h3>
                  </div>
                  </a>
              </div>
              <div class="container-card" style="width: 350px;">
                  <a class="card h-100 text-decoration-none" href="home_donde_alojarse_hostales.php">
                      <img src="imagenes/donde_alojarse/lasnunez/hostal_estaciondelsol1.jpg" class="card-img-top" style="width:100%; height:100%">
                  <div class="card-header">
                          <h3 class="text-center fs-5">Hostales</h3>
                  </div>
                  </a>
              </div>
              <div class="container-card" style="width: 350px;">
                  <a class="card h-100 text-decoration-none" href="home_donde_alojarse_hosterias.php">
                      <img src="imagenes/donde_alojarse/anconcito/hosteria_el_faro1.jpg" class="card-img-top" style="width:100%; height:100%">
                  <div class="card-header">
                          <h3 class="text-center fs-5">Hosterías</h3>
                  </div>
                  </a>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div><br><br>
  <!-- Page Footer-->
  <?php include("./template/footer.php") ?>