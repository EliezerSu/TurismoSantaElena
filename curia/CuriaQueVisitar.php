<?php include("head.php"); ?>

<?php include("boton.php"); ?>
<section class="section section-sm section-first bg-default text-md-left" id='playa'>
  <div class="container">
    <div class="row row-50 justify-content-center align-items-xl-center">
      <div class="col-md-10 col-lg-5">

        <div class="slider">
          <ul>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0490_playacuria_6.JPG">
                <img src="imagenes\curia\0490_playacuria_6.JPG" alt="" width="519" />
              </a>
            </li>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0489_playacuria_5.JPG">
                <img src="imagenes\curia\0489_playacuria_5.JPG" alt="" width="519" />
              </a>
            </li>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0487_playacuria_3.JPG">
                <img src="imagenes\curia\0487_playacuria_3.JPG" alt="" width="519" />
              </a>
            </li>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0486_playacuria_2.jpg">
                <img src="imagenes\curia\0486_playacuria_2.jpg" alt="" width="519" />
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-10 col-lg-7">

        <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["que_visitar"][0] ?></b></h1>

        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][1] ?></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][2] ?></a></li>
            <!--
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Mission</a></li> -->
          </ul>
          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-4-1">

              <p style="text-align: justify; font-size: 17px;">
                <?php echo $texto_traducido["que_visitar"][3] ?>
              </p>

            </div>

            <div class="tab-pane fade" id="tabs-4-2">
              <div class="row row-40 justify-content-center text-center inset-top-10">
                <div class="">
                  <div class="mapouter">
                    <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31903.24449487143!2d-80.78321083280414!3d-1.7742241672039387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902c2b01fe38ce83%3A0xd60b80c4bcec7f46!2sPlaya%20Curia!5e0!3m2!1ses-419!2sec!4v1672604203788!5m2!1ses-419!2sec" width="500" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <style>
                      .mapouter {
                        position: relative;
                        text-align: right;
                        width: 400px;
                        height: 250px;
                      }

                      .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 400px;
                        height: 250px;
                      }

                      .gmap_iframe {
                        height: 250px !important;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<section class="section section-sm section-first bg-default text-md-left" id='iglesia'>
  <div class="container">
    <div class="row row-50 justify-content-center align-items-xl-center other">

      <div class="col-md-10 col-lg-7">

        <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["que_visitar"][4] ?></b></h1>
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1-2" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][1] ?></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2-2" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][2] ?></a></li>
          </ul>
          <!-- Tab panes-->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tabs-4-1-2">
              <p style="text-align: justify; font-size: 17px">
                <?php echo $texto_traducido["que_visitar"][5] ?>
              </p>
            </div>

            <div class="tab-pane fade" id="tabs-4-2-2">
              <div class="row row-40 justify-content-center text-center inset-top-10">
                <div class="mapa">
                  <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=-1.760778, -80.769925&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                    <style>
                      .mapouter {
                        position: relative;
                        text-align: right;
                        width: 400px;
                        height: 250px;
                      }

                      .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 400px;
                        height: 250px;
                      }

                      .gmap_iframe {
                        height: 250px !important;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-10 col-lg-5">

        <div class="slider">
          <ul>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0535_iglesia_mi.jpg">
                <img class='image' src="imagenes\curia\0535_iglesia_mi.jpg" alt="" width="519" />
              </a>
            </li>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0536_interior_iglesia.jpg">
                <img class='image' src="imagenes\curia\0536_interior_iglesia.jpg" alt="" width="519" />
              </a>
            </li>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0506_IglesiaMariaInmaculada_turistica.jpg">
                <img class='image' src="imagenes\curia\0506_IglesiaMariaInmaculada_turistica.jpg" alt="" width="519" />
              </a>
            </li>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0506_IglesiaMariaInmaculada_turistica.jpg">
                <img class='image' src="imagenes\curia\0506_IglesiaMariaInmaculada_turistica.jpg" alt="" width="519" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-sm section-first bg-default text-md-left" id='mirador'>
  <div class="container">
    <div class="row row-50 justify-content-center align-items-xl-center">
      <div class="col-md-10 col-lg-5">

        <div class="slider">
          <ul>
            <li>
              <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0540_miradorturistico5.jpg">
                <img src="imagenes\curia\0540_miradorturistico5.jpg" alt="" width="519" "/>
                  </a>
                </li>
                <li>
                  <a href=" ../PaginaComentarios.php?img=curia/imagenes/curia/0507_miradorturistico.jpg">
                <img src="imagenes\curia\0507_miradorturistico.jpg" alt="" width="519" "/>
                  </a>
                </li>
                <li>
                  <a href=" ../PaginaComentarios.php?img=curia/imagenes/curia/0508_miradorturistico.jpg">
                <img src="imagenes\curia\0508_miradorturistico.jpg" alt="" width="519" "/>
                  </a>
                </li>
                <li>
                  <a href=" ../PaginaComentarios.php?img=curia/imagenes/curia/0510_miradorturistico.jpg">
                <img src="imagenes\curia\0510_miradorturistico.jpg" alt="" width="519" "/>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=" col-md-10 col-lg-7">

                <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["que_visitar"][6] ?></b></h1>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1-3" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][1] ?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2-3" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][2] ?></a></li>

                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">

                    <div class="tab-pane fade show active" id="tabs-4-1-3">
                      <p style="text-align: justify; font-size: 17px">
                        <?php echo $texto_traducido["que_visitar"][7] ?>
                      </p>
                    </div>
                    <div class="tab-pane fade" id="tabs-4-2-3">
                      <div class="row row-40 justify-content-center text-center inset-top-10">
                        <div class="mapa">
                          <div class="mapouter">
                            <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.9537706157819!2d-80.76413559843499!3d-1.773305849415749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902c2b0191ee385b%3A0x248d60774ba489b5!2sCur%C3%ADa-Ruta%20Del%20Spondylus!5e0!3m2!1ses!2sec!4v1672867326057!5m2!1ses!2sec" width="500" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                            <style>
                              .mapouter {
                                position: relative;
                                text-align: right;
                                width: 400px;
                                height: 250px;
                              }

                              .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 400px;
                                height: 250px;
                              }

                              .gmap_iframe {
                                height: 250px !important;
                              }
                            </style>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
        </div>
      </div>
    </div>
</section>
<!--Seccion4-->
<section class="section section-sm section-first bg-default text-md-left" id='artesania'>
  <div class="container">
    <div class="row row-50 justify-content-center align-items-xl-center other">

      <div class="col-md-10 col-lg-7">

        <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["que_visitar"][8] ?></b></h1>
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1-4" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][1] ?></a></li>
            <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2-4" data-toggle="tab"><?php echo $texto_traducido["que_visitar"][2] ?></a></li> -->

          </ul>
          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-4-1-4">
              <p style="text-align: justify; font-size: 17px ">
                <?php echo $texto_traducido["que_visitar"][9] ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-lg-5" style="padding-left: 6%;">

        <div class="slider">
          <ul>
            <li>
              <img src="imagenes\curia\0549_imagen-no-disponible.jpg" alt="" width="519" height="564" />
            </li>
            <li>
              <img src="imagenes\curia\0549_imagen-no-disponible.jpg" alt="" width="519" height="564" />
            </li>
            <li>
              <img src="imagenes\curia\0549_imagen-no-disponible.jpg" alt="" width="519" height="564" />
            </li>
            <li>
              <img src="imagenes\curia\0549_imagen-no-disponible.jpg" alt="" width="519" height="564" />
            </li>
          </ul>
        </div>
      </div>
    </div>
    <style>
      @media screen and (max-width: 700px) {
        .container {
          padding-top: 2rem;
        }

        .other {
          display: flex;
          flex-wrap: wrap;
          margin-right: -15px;
          margin-left: -15px;
          flex-direction: column-reverse;
        }
      }
    </style>

  </div>
</section>




<div class="snackbars" id="form-output-global"></div>

<?php include("footer.php"); ?>