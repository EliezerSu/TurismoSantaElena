<?php include("head.php");?>  
  <div>
    <div class="page">
            <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
              <div class="swiper-wrapper text-left">
            <div class="swiper-slide context-dark" data-slide-bg="imagenes/montanita/0587_reservadeexperiencias.jpg" >
                  <div class="swiper-slide-caption section-md">
                    <div class="container">
                      <div class="row">
                      <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold"><?php echo $texto_traducido["exp"][0] ?></span></h2>
              
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </section>

            </header>

            <section class="boto">
            <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>

            </section>
          </section>
          <br>
          <br>
          <br>
          <br>
          <section>
      <br>

      <div class="container">
            <br>
            <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["exp"][0] ?></b></h1>
                    <br><br>
                    <p style = "text-align: justify; font-size: 17px;font-family: 'Montserrat';"> 
                    <?php echo $texto_traducido["exp"][1] ?>
                    </p>        
          </div>
          </section>
      <!--Seccion 1-->
          <section>
          <br><br><br>
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra" style="text-align: center;color:#122638" ><b><?php echo $texto_traducido["exp"][2] ?></b></h1>
          <br>
          <div class="d-flex justify-content-center align-items-center">
              <img src="imagenes/montanita/0586_folleto1.jpg" class="folleto img-fluid w-75 h-50"  alt="" style="width: 70%; border-radius: 15px;">
          </div>
          <br>
          <br><br>
          <div class="botonesPdf ">
              <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/folleto1.pdf" 
              target="_blank"><?php echo $texto_traducido["exp"][3] ?></a>
              <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/folleto1.pdf" 
              download="Atractivos naturales y culturales.pdf"><?php echo $texto_traducido["exp"][4] ?></a>      
          </div>
      </section>
          <br><br>
          <!--Seccion 2-->
          <section>
          <br><br>
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra" style="text-align: center;color:#122638" ><b><?php echo $texto_traducido["exp"][5] ?></b></h1>
          <br>
          <div class="d-flex justify-content-center align-items-center">
              <img src= "imagenes/montanita/0594_folleto2.jpg" class="folleto img-fluid w-75 h-50"  alt="" style="width: 70%; border-radius: 15px;">
          </div>
          <br>
          <div class="botonesPdf ">
              <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/folleto2.pdf"
              target="_blank"><?php echo $texto_traducido["exp"][3] ?></a>
              <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/folleto2.pdf"
              download="Generalidades de Montañita.pdf"><?php echo $texto_traducido["exp"][4] ?></a>      
          </div>
      </section>
      <br><br>
      <!--Seccion 3-->
      <section>
          <br><br>
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra" style="text-align: center;color:#122638" ><b><?php echo $texto_traducido["exp"][6] ?></b></h1>
          <br>
          <div class="d-flex justify-content-center align-items-center">
              <img src= "imagenes/montanita/0595_folleto3.jpg" class="folleto img-fluid w-75 h-50"  alt="" style="width: 70%; border-radius: 15px;">
          </div>
          <br>
          <div class="botonesPdf ">
              <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/folleto3.pdf"
              target="_blank"><?php echo $texto_traducido["exp"][3] ?></a>
              <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/folleto3.pdf"
              download="Actividades, gastronomía y cultura.pdf"><?php echo $texto_traducido["exp"][4] ?></a>      
          </div>
      </section>
      <br><br>
  </div>    
    <!-- Page Footer-->
    <?php include("footer.php") ?>