<?php include("head.php")?>
  <div class="page">      
    <section class="boto">
    <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br><br><br><br>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["culture"][0]?></b></h1>
    <br>

    <section class="platillos">
    <section>
      <section id="su_gente">
        <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["culture"]["subtitle-1"]?>
        </p>
        <br>
        <br>
      </section>
      <div class="imgaling1">
        <div class="comida">
            <div class="com" id="comida">
              <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0449_culturatradicionesancestrales.png">
                <img id="imcom" src="imagenes/las_nunez/0449_culturatradicionesancestrales.png" alt="">
              </a>                
            </div>
        </div>
        <div class="comida">
            <div class="com" id="comida">
              <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0450_culturatradicionesancestrales1.jpg">
                <img id="imcom" src="imagenes/las_nunez/0450_culturatradicionesancestrales1.jpg" alt="">
              </a>
            </div>
        </div>
        <div class="comida">
            <div class="com" id="comida">
              <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0451_culturatradicionesancestrales2.jpg">
                <img id="imcom" src="imagenes/las_nunez/0451_culturatradicionesancestrales2.jpg" alt="">
              </a>
            </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
      <div class="container">
      <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["culture"][1]?></b></h1>
      <div class="row row-50 justify-content-center align-items-xl-center">
          <div class="col-md-10 col-lg-5 col-xl-6">              
            <div class="slider">
              <ul>
                <li>
                  <img src="imagenes/las_nunez/0412_fiestapatronal.jpg" alt="" width="550" height="400"/>
                </li>
                <li>
                  <img src="imagenes/las_nunez/0413_fiestapatronal1.jpg" alt="" width="550" height="400"/>
                </li>
                <li>
                  <img src="imagenes/las_nunez/0414_fiestapatronal2.jpg" alt="" width=550" height="400"/>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["culture"]["subtitle-2"]?>
                  <br>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
      <div class="container">
      <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["culture"][2]?></h1>
      <div class="row row-50 justify-content-center align-items-xl-center">
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-4-1">
                <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["culture"]["subtitle-3"]?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-lg-5 col-xl-6">
            <div>
              <ul>
                <li>
                  <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0448_fundacioncomunalasnunez.jpg">
                    <img src="imagenes/las_nunez/0448_fundacioncomunalasnunez.jpg" alt="" style="width: 550px; height: 400px;"/>
                  </a>
                </li>
                <li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
      <div class="container">
      <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["culture"][3]?></b></h1>          
        <div class="row row-50 justify-content-center align-items-xl-center">
          <div class="col-md-10 col-lg-5 col-xl-6">
            <div>
              <ul>
                <li>
                  <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0415_leyenda_matapalo.jpg">
                    <img src="imagenes/las_nunez/0415_leyenda_matapalo.jpg" alt="" width="550" height="400"/>
                  </a>
                </li>
                <li>
              </ul>
            </div>
          </div>
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-4-1">
                <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["culture"]["subtitle-4"]?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
  </div>
  <!-- Page Footer-->
  <?php include("footer.php") ?>