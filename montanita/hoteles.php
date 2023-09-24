<?php include("head.php");?>  
  <div>
    <div class="page">     
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
          <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="imagenes/montanita/0574_comollegar2.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <div class="row">
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold"><?php echo $texto_traducido["ir"][0] ?></span></h2>

          
                  </div>
                </div>
              </div>
            </div>
            </div>
        </section>
      
        <section class="boto"> 
        <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>

        </section>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination" ></div>
        </section>

        <section class="section section-lg section-top-1 bg-gray-4" id="hotelerias"><!-- bg-gray-4 -->
          <br>
          <br>
          <br>
          <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["ir"][1] ?></b></h1>

          <br/>
        
            <div class="span12">     	
                <!-- Gallery Thumbnails -->
                <div class="row">
                    <ul class="gallery-post-grid-3">
                        <!-- Gallery Item 1 -->
                        <li  class="span3 gallery-item galeriafiestas" >
                            <a href="montanita_hoteles.php"><img src="imagenes/montanita/0575_hotel_dharma.jpeg" style="border:1px solid black"></a>
                            
                            <span class="project-details"><span class="material-symbols-outlined">
                            </span><a href="montanita_hoteles.php">Hoteles</a></span>
                        </li>

                        <!-- Gallery Item 2 -->
                        <li class="span3 gallery-item galeriafiestas">
                            <a href="montanita_hostales.php"><img src="imagenes/montanita/0576_hotel_estaciondelsol.jpg"style="border:1px solid black"></a>
                              
                            <span class="project-details"><span class="material-symbols-outlined">
                            </span><a href="montanita_hostales.php">Hostales</a></span>
                        </li>

                        <!-- Gallery Item 3 -->
                        <li class="span3 gallery-item galeriafiestas">
                            <a href="montanita_hosteleria.php"><img src="imagenes/montanita/0577_hotel_toronche.jpg"style="border:1px solid black"></a>
                              
                            <span class="project-details"><span class="material-symbols-outlined">
                            </span><a href="montanita_hosteleria.php">Hostería</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <br><br>
  </div>    
    <!-- Page Footer-->
    <?php include("footer.php");?>