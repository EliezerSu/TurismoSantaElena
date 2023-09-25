<?php include("head.php"); ?>

<div class="page">


  <div style="text-align: center;" class="banner-hoteles">

    <div>
      <br><br>
      <h3 style="text-align: center;" class="titulo-llegar">Hoteles</h3>

    </div>

  </div>


  <section class="boto">
    <button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button>
    <script type="text/javascript">
      function back() {
        history.back();
      }
    </script>
  </section>



  <br>

  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">
        <div class="col-md-10 col-lg-7 col-xl-6">
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Hotel<br>Colón Salinas</b></h1>
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1-2">
                <p style="font-size: 19px;" class="contente__font1">
                  <?php echo $texto_traducido["hotel"][0] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-5 col-xl-6" style="padding-left: 6%;">
          <div>
            <ul>
              <li>
                <a href="../PaginaValoraciones.php?img=anconcito/imagenes/anconcito/0922_colon_salinas.png">
                  <img style="width: 500px;height: 420px;" src="imagenes/anconcito/0922_colon_salinas.png" id="El Descanso del Lobo" alt="" class="image" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">
        <div class="col-md-10 col-lg-7 col-xl-6">
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Hotel<br>Blue Bay</b></h1>
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1-2">
                <p style="font-size: 19px;" class="contente__font1">
                  <?php echo $texto_traducido["hotel"][1] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-5 col-xl-6" style="padding-left: 6%;">
          <div>
            <ul>
              <li>
                <a href="../PaginaValoraciones.php?img=anconcito/imagenes/anconcito/0923_blue_bay.png">
                  <img style="width: 500px;height: 420px;" src="imagenes/anconcito/0923_blue_bay.png" id="El Descanso del Lobo" alt="" class="image" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">
        <div class="col-md-10 col-lg-7 col-xl-6">
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Hotel<br>Riviera Del Sol</b></h1>
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1-2">
                <p style="font-size: 19px;" class="contente__font1">
                  <?php echo $texto_traducido["hotel"][2] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-5 col-xl-6" style="padding-left: 6%;">
          <div>
            <ul>
              <li>
                <a href="../PaginaValoraciones.php?img=anconcito/imagenes/anconcito/0924_rivera_sol.png">
                  <img style="width: 500px;height: 420px;" src="imagenes/anconcito/0924_rivera_sol.png" id="El Descanso del Lobo" alt="" class="image" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>

<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php"); ?>