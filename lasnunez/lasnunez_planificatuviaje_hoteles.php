<?php include("head.php")?>
  <div class="page">      
    <section class="section" >
      <div>
      <img src="imagenes/las_nunez/0452_dondequedarse.png" alt="" class="image"/> 
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
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["hotels"][0]?></b></h1>
      
        <div class="container mb-5"  >
          <div class="row row-cols-1  mt-5 row-cols-md-4 g-4" style="justify-content: center;justify-items: center;">
              <div class="container-card" style="width: 350px;">
                  <a class="card h-100 text-decoration-none" href="lasnunez_hoteles.php">
                      <img src="imagenes/las_nunez/0433_hotel_elcuysurfista2.jpg" class="card-img-top" style="width:100%; height:100%">
                  <div class="card-header">
                      <h3 class="text-center fs-5"><?php echo $texto_traducido["hotels"][1]?></h3>
                  </div>
                  </a>
              </div>
              <div class="container-card" style="width: 350px;">
                  <a class="card h-100 text-decoration-none" href="lasnunez_hostales.php">
                      <img src="imagenes/las_nunez/0434_hotel_estaciondelsol.jpg" class="card-img-top" style="width:100%; height:100%">
                  <div class="card-header">
                          <h3 class="text-center fs-5"><?php echo $texto_traducido["hotels"][2]?></h3>
                  </div>
                  </a>
              </div>
              <div class="container-card" style="width: 350px;">
                  <a class="card h-100 text-decoration-none" href="lasnunez_hosteleria.php">
                      <img src="imagenes/las_nunez/0439_hotel_toronche2.jpg" class="card-img-top" style="width:100%; height:100%">
                  <div class="card-header">
                          <h3 class="text-center fs-5"><?php echo $texto_traducido["hotels"][3]?></h3>
                  </div>
                  </a>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>      
  <!-- Page Footer-->
  <?php include("footer.php") ?>