<?php include("head.php"); ?>

<div class="page">



  <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
    <div class="swiper-wrapper text-left">
      <div class="swiper-slide context-dark" data-slide-bg="imagenes/curia/0491_playacuria_6.jpg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["body"][0] ?></h6>
                <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span><?php echo $texto_traducido["body"][1] ?></span><span class="font-weight-bold"> Curía</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide context-dark" data-slide-bg="imagenes/curia/0501_playaturistica_1.jpg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["body"][2] ?></h6>
                <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span><?php echo $texto_traducido["body"][3] ?></span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide context-dark" data-slide-bg="imagenes/curia/0515_deporteyaventura_reservayexperiencia1.jpg">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"><?php echo $texto_traducido["body"][4] ?></h6>
                <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span><?php echo $texto_traducido["body"][5] ?></span></h2>
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
    <a style=" font-size:18px; color:white" href="../index.php"><?php echo $texto_traducido["body"][6] ?> </a>
  </div>

  <section class="section section-lg section-top-1 bg-gray-4">


    <!-- Discover New Horizons-->


    <div class="px-4 py-5 my-5 text-center container-fluid">
      <h2 style="text-align: center;color:#122638">Curía</h2>
      <hr class="w-50 d-block d-ms-none mx-auto" style="border-bottom: 3px solid #01b3a7; margin-bottom:35px;">
      <div class="row align-items-center">
        <div class="col-lg-8 text-center">
          <p id="texta" class="lead mb-4" style="font-size: 20px; ">
            <?php echo $texto_traducido["body"][7] ?>
          </p>
          <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
        </div>
        <div class="col-lg-3 btn-acercade">
          <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto " href="acercacuria.php"><?php echo $texto_traducido["body"][8] ?></a>
        </div>

      </div>
    </div>
  </section>


  <?php include("quevisitarmuestra.php"); ?>

  <?php include("carta.php"); ?>

  <br> <br>

  <section class="section bg-default text-center offset-top-50">
    <div class="parallax-container" data-parallax-img="imagenes\curia\0544_bannerCuria.jpg">
      <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
        <div class="container">
          <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold"></span><span class="d-block font-weight-light"></span></h2>
          <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"></p>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
      <h3 style="text-align: center;"><?php echo $texto_traducido["body"][9] ?>...</h3>

    </div>
  </section>

  <?php include("popup-curia.php"); ?>
  <br>
  <br>
</div>


<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php"); ?>