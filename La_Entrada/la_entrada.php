<?php include("head_la_entrada.php"); ?>



<div class="page">

  <!-- Swiper-->
  <section class="section swiper-container swiper-slider swiper-slider-corporate          swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
    <div class="swiper-wrapper text-left">
      <div class="swiper-slide context-dark" data-slide-bg="imagenes/la_entrada/principal/0684__carte_laentrada.JPG">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h6 class="text-uppercase text-shadow" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["swapper"][0] ?></h6>
                <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold text-shadow"><?php echo $texto_traducido["swapper"][1] ?></span><span class="font-weight-bold text-shadow"> La Entrada y Rinconada</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide context-dark" data-slide-bg="imagenes/la_entrada/principal/0682__la_entrada.JPG">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h6 class="text-uppercase text-shadow" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["swapper"][2] ?>...</h6>
                <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold text-shadow"><?php echo $texto_traducido["swapper"][3] ?></span><span class="font-weight-bold text-shadow"> <?php echo $texto_traducido["swapper"][4] ?></span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide context-dark" data-slide-bg="imagenes/la_entrada/principal/0683__restaurate_entrada.jpeg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h6 class="text-uppercase text-shadow" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["swapper"][5] ?></h6>
                <h2 class="oh font-weight-light text-shadow " data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold"><?php echo $texto_traducido["swapper"][6] ?></span><span class="font-weight-bold"> <?php echo $texto_traducido["swapper"][7] ?></span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination"></div>
  </section>

  <!-- Section Box Categories-->
  <section class="section section-lg section-top-1 bg-gray-4">


    <!-- Discover New Horizons-->


    <div class="px-4 py-5 my-5 text-center container-fluid">
      <h2 style="text-align: center;color:#122638">La Entrada y Rinconada</h2>
      <hr class="w-50 d-block d-ms-none mx-auto" style="border-bottom: 3px solid #01b3a7; margin-bottom:35px;">
      <div class="row align-items-center">
        <div class="col-lg-8 text-center">
          <p class="lead col-11 text-justify" style="font-size: 20px; ">
            <?php echo $texto_traducido["body"][0] ?>
            <br> <br>
            <?php echo $texto_traducido["body"][1] ?>
          </p>
          <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
        </div>
        <div class="col-lg-3 btn-acercade">
          <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto " href="acerca_de_laentrada.php"><?php echo $texto_traducido["button-A"] ?></a>
        </div>

      </div>
    </div>
  </section>


  <br>
  <!-- Hot tours-->


  <section class="section section-sm bg-default">
    <div class="container">
      <h3><?php echo $texto_traducido["cardlist"][0] ?></h3>
      <div class="row row-sm row-40 row-md-50">
        <div class="col-sm-6 col-md-12 wow fadeInLeft">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
              <div class="unit-left"><a class="product-big-figure" href="playas_la_entrada.php"><img src="imagenes/la_entrada/principal/0685__playa_home.jpg" alt="" width="600" height="366" /></a></div>
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="playas_la_entrada.php"> <b><?php echo $texto_traducido["cardlist"][1] ?></b> </a></h5>

                  <p class="product-big-text texto__quevisitar"><?php echo $texto_traducido["cardlist"][2] ?></p><a class="button button-black-outline button-ujarak" href="playas_la_entrada.php"><?php echo $texto_traducido["cardlist"][3] ?></a>
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
              <div class="unit-left"><a class="product-big-figure" href="atractivos_cultura_laentrada.php"><img src="imagenes/la_entrada/principal/0686__atra_cultura_home.jpg" alt="" width="600" height="366" /></a></div>
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="atractivos_cultura_laentrada.php"> <b><?php echo $texto_traducido["cardlist"][4] ?></b> </a></h5>

                  <p class="product-big-text texto__quevisitar"><?php echo $texto_traducido["cardlist"][5] ?></p><a class="button button-black-outline button-ujarak mx-auto" href="atractivos_cultura_laentrada.php"><?php echo $texto_traducido["cardlist"][3] ?></a>
                  <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                </div>
              </div>
            </div>
          </article>
        </div>


      </div>
    </div>
  </section>
  <section class="Contenedor">
    <section class="cuestionario">
      <h3><?php echo $texto_traducido["CardBottom"][0] ?></h3>
      <div class="contenedor">
        <div class="tabla hover" style="cursor: default;">
          <h2><?php echo $texto_traducido["CardBottom"][1] ?></h2>
          <img src="imagenes/la_entrada/principal/0687__cultura_home.jpg" alt="" />
          <p><?php echo $texto_traducido["CardBottom"][2] ?></p>
          <a href="cultura_laentrada.php" class="boton"><?php echo $texto_traducido["CardBottom"][3] ?></a>
        </div>
        <div class="tabla" style="cursor: default;">
          <h2><?php echo $texto_traducido["CardBottom"][4] ?></h2>
          <img src="imagenes/la_entrada/principal/0688__gastro_home.jpg" alt="" />
          <p><?php echo $texto_traducido["CardBottom"][5] ?></p>
          <a href="gastronomia_laentrada.php" class="boton"><?php echo $texto_traducido["CardBottom"][3] ?></a>
        </div>
        <div class="tabla" style="cursor: default;">
          <h2><?php echo $texto_traducido["CardBottom"][6] ?></h2>
          <img src="imagenes/la_entrada/principal/0689__rutas_home.jpg" alt="" />
          <p><?php echo $texto_traducido["CardBottom"][7] ?></p>
          <a href="rutas_la_entrada.php" class="boton"><?php echo $texto_traducido["CardBottom"][3] ?></a>
        </div>
      </div>
    </section>



    <br> <br> <br>
    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
      <div class="parallax-container" data-parallax-img="imagenes/la_entrada/principal/0690__slider_entrada.jpg">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
          <div class="container">
            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold"></span><span class="d-block font-weight-light"></span></h2>
            <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"></p>
          </div>
        </div>
      </div>
    </section>









    <!--	Instagrram wondertour-->
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
      <div class="container-fluid">
        <h3 class="gallery-title" style="font-size: 20px;"><?php echo $texto_traducido["text"] ?></h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0645__galeria_o_1.jpg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption">
              <a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0645__galeria_o_1.jpg" data-lightgallery="item">
                <img src="imagenes/la_entrada/galeria/0645__galeria_o_1.jpg" alt="" class="image2" />

              </a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0646__galeria_o_2.jpg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0646__galeria_o_2.jpg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0646__galeria_o_2.jpg" alt="" class="image2" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0647__galeria_o_3.jpg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0647__galeria_o_3.jpg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0647__galeria_o_3.jpg" alt="" class="image2" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0648__galeria_o_4.JPG" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0648__galeria_o_4.JPG" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0648__galeria_o_4.JPG" alt="" class="image2" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0649__galeria_o_5.jpeg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0649__galeria_o_5.jpeg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0649__galeria_o_5.jpeg" alt="" class="image2" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0650__galeria_o_6.jpeg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0650__galeria_o_6.jpeg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0650__galeria_o_6.jpeg" alt="" class="image2" /></a>
            </div>
          </article>
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0670__galeria_o_7.jpg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/670__galeria_o_7.jpg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/670__galeria_o_7.jpg" alt="" class="image2" /></a>
            </div>
          </article>
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0671__galeria_o_8.JPG" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0671__galeria_o_8.JPG" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0671__galeria_o_8.JPG" alt="" class="image2" /></a>
            </div>
          </article>
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0672__galeria_o_9.jpg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0672__galeria_o_9.jpg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0672__galeria_o_9.jpg" alt="" class="image2" /></a>
            </div>
          </article>
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="imagenes/la_entrada/galeria/0701__galeria_o_10.jpg" alt="" class="image2" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imagenes/la_entrada/galeria/0701__galeria_o_10.jpg" data-lightgallery="item"><img src="imagenes/la_entrada/galeria/0701__galeria_o_10.jpg" alt="" class="image2" /></a>
            </div>
          </article>

          <!-- Thumbnail Classic-->


        </div>
      </div>

    </section>

    <!-- Page Footer-->
    <?php include("footer.php"); ?>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>