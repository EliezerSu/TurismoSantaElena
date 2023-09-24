<?php include("head.php")?>
  <div class="page"> 

    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-corporate" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
      <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="imagenes/las_nunez/0377_playa.jpg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["swapper"][0] ?></h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span><?php echo $texto_traducido["swapper"][1] ?></span><span class="font-weight-bold"> LAS NÚÑEZ</span></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="imagenes/las_nunez/0378_playa1.jpg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["swapper"][2] ?>...</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span><?php echo $texto_traducido["swapper"][3] ?></span><span class="font-weight-bold"><?php echo $texto_traducido["swapper"][4] ?></span></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="imagenes/las_nunez/0379_playa2.jpg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["swapper"][5] ?></h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span><?php echo $texto_traducido["swapper"][6] ?></span><span class="font-weight-bold"><?php echo $texto_traducido["swapper"][7] ?></span></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
    </section>
  <div style="width:100%;background-color: rgba(8, 32, 50,.9); padding:15px 25px">
    <a style=" font-size:18px; color:white;display:flex; justify-content:center;" href="../index.php">Inicio </a>
    </div>
    <br>

    <section class="section section-lg section-top-1 bg-gray-4" >
      <!-- Discover New Horizons-->
      <div class="px-4 py-5 my-5 text-center container-fluid" >
        <h2 style="text-align: center;color:#122638">Las Núñez</h2>
        <hr  class="w-50 d-block d-ms-none mx-auto" style="border-bottom: 3px solid #01b3a7; margin-bottom:35px;"> 
        <div class="row align-items-center">
          <div class="col-lg-8 text-center">
            <p class="lead mb-4" style="font-size: 20px; text-align: justify; margin: 0 10% 0 10%;">
             <?php echo $texto_traducido["body"][0] ?>
              <br><br>
              <?php echo $texto_traducido["body"][1] ?>
            </p>
            <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
          </div>
          <div class="col-lg-3 btn-acercade">
            <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto " href="lasnunez_acercade.php" ><?php echo $texto_traducido["button-A"] ?></a>
          </div> 
        </div>
      </div>
    </section>


    <!-- <section class="section section-sm bg-default">
      <div class="container">
        <h3 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Acerca de...</b></h3>
        <div class="row row-sm row-40 row-md-50">
          <div class="col-sm-6 col-md-12 wow fadeInRight">
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left">
                  <a class="product-big-figure" href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0385_playalasnunez4.jpg">
                    <img src="imagenes/las_nunez/0385_playalasnunez4.jpg" alt="" width="600" height="366"/>
                  </a>
                </div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="lasnunez_acercade.php">Las Núñez</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"></div><a class="product-big-reviews" href="lasnunez_acercade.php"></a>
                    </div>
                    <p style="text-align: justify; font-size: 17px;"" class="product-big-text">La comuna San Francisco de Las Núñez pertenece a la parroquia Manglaralto, está ubicada en la ruta del Spondylus a 67,5 km de la provincia de Santa Elena, se creó el 8 de diciembre de 1853</p><a class="button button-black-outline button-ujarak" href="lasnunez_acercade.php">Leer más</a>
                    <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Discover New Horizons-->
    
    <!-- Hot tours-->
    <section id="quevisitar" class="section section-sm bg-default">
      <div class="container">
        <h3 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["title-1"] ?></b></h3>
        <div class="row row-sm row-40 row-md-50">
          <div class="col-sm-6 col-md-12 wow fadeInRight">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left">
                  <a class="product-big-figure" href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0384_playalasnunez3.jpg">
                    <img src="imagenes/las_nunez/0384_playalasnunez3.jpg" alt="" width="600" height="366"/>
                  </a>
                </div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="lasnunezgaleriaplayas.php">Las Núñez <?php echo $texto_traducido["beach"] ?></a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"></div><a class="product-big-reviews" href="diversion.html"></a>
                    </div>
                    <p style="text-align: justify; font-size: 17px;" class="product-big-text"> <?php echo $texto_traducido["options"][0] ?></p><a class="button button-black-outline button-ujarak" href="lasnunezgaleriaplayas.php"><?php echo $texto_traducido["button-A"] ?></a>
                    <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left">
                  <a class="product-big-figure" href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0387_senderos.jpg">
                    <img src="imagenes/las_nunez/0387_senderos.jpg" alt="" width="600" height="366"/>
                  </a>
                </div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="lasnunezgaleriasenderos.php">Ruta Ecológica Matapalo <?php echo $texto_traducido["trail"] ?></a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"></div><a class="product-big-reviews" href="lasnunezgaleriasenderos.php"></a>
                    </div>
                    <p style="text-align: justify; font-size: 17px;" class="product-big-text"><?php echo $texto_traducido["options"][1] ?></p><a class="button button-black-outline button-ujarak" href="lasnunezgaleriasenderos.php"><?php echo $texto_traducido["button-A"] ?></a>
                    <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left">
                  <a class="product-big-figure" href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0393_santisimatrinidad.jpg">
                    <img src="imagenes/las_nunez/0393_santisimatrinidad.jpg" alt="" width="600" height="366"/>
                  </a>
                </div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="lasnunezgaleriasantisimatrinidad.php"> Santísima Trinidad <?php echo $texto_traducido["church"] ?></a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"></div><a class="product-big-reviews" href="lasnunezgaleriasantisimatrinidad.php"></a>
                    </div>
                    <p style="text-align: justify; font-size: 17px;" class="product-big-text"><?php echo $texto_traducido["options"][2] ?></p><a class="button button-black-outline button-ujarak" href="lasnunezgaleriasantisimatrinidad.php"><?php echo $texto_traducido["button-A"] ?></a>
                    <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- CARTAS -->
    <section class="cuestionario">
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["title-2"] ?></b></h1>
        <br>
        <br>
      <div class="contenedor">
          <div class="tabla">
              <h2><?php echo $texto_traducido["header"]["subtitle-3"][0] ?></h2>
              <img src="imagenes/las_nunez/0401_seurf_lasnunez.jpg" alt="" />
              <p class="tamPar"><?php echo $texto_traducido["types"][0] ?></p>
              <a href="lasnunezdeportesaventuras.php" class="boton"><?php echo $texto_traducido["button-A"] ?></a>
          </div>
          <div class="tabla hover">
              <h2><?php echo $texto_traducido["header"]["subtitle-3"][1] ?></h2>
              <img src="imagenes/las_nunez/0402_santisimatrinidad.jpeg" alt="" />
              <p class="tamPar"><?php echo $texto_traducido["types"][1] ?></p>
              <a href="lasnunezculturatradiciones.php" class="boton"><?php echo $texto_traducido["button-A"] ?></a>
          </div>
          <div class="tabla">
              <h2 id="gas"><?php echo $texto_traducido["header"]["subtitle-3"][2] ?></h2>
              <img src="imagenes/las_nunez/0403_santisimatrinidad.jpg" alt="" />
              <p class="tamPar"><?php echo $texto_traducido["types"][2] ?></p>
              <a href="lasnunezgastronomia.php" class="boton"><?php echo $texto_traducido["button-A"] ?></a>
          </div>
          <div class="tabla">
              <h2><?php echo $texto_traducido["header"]["subtitle-3"][3] ?></h2>
              <img src="imagenes/las_nunez/0404_santisimatrinidad6.jpg" alt="" />
              <p class="tamPar"><?php echo $texto_traducido["types"][3] ?></p>
              <a href="lasnunezrutasyexcursiones.php" class="boton"><?php echo $texto_traducido["button-A"] ?></a>
          </div>
      </div>
    </section>
    <!-- --------------------------------------------------------------------------------- -->
    <br>
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
      <div class="container-fluid">
        <h6 class="gallery-title" style="font-size: 17px;"><?php echo $texto_traducido["know-more"] ?></h6>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
          <!-- Thumbnail Classic-->
          </article>
          <!-- Thumbnail Classic-->
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezgaleriasenderos.php"><img src="imagenes/las_nunez/0387_senderos.jpg" alt="" width="270" height="195"/></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezgaleriasantisimatrinidad.php"><img src="imagenes/las_nunez/0393_santisimatrinidad.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezgaleriaplayas.php"><img src="imagenes/las_nunez/0384_playalasnunez3.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunez_acercade.php"><img src="imagenes/las_nunez/0386_playalasnunez5.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezculturatradiciones.php"><img src="imagenes/las_nunez/0395_santisimatrinidad1.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezgastronomia.php"><img src="imagenes/las_nunez/0421_arroznorteno.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezdeportesaventuras.php"><img src="imagenes/las_nunez/0401_seurf_lasnunez.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><a href="lasnunezrutasyexcursiones.php"><img src="imagenes/las_nunez/0428_fincadonctormigelreyes1.jpg" alt="" width="270" height="195"/></a>
            </div>              
          </article>
        </div>
      </div>
    </section>
  </div>
  <!-- Page Footer-->
  <?php include("footer.php") ?>