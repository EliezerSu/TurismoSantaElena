<?php include("head.php"); ?>


<div class="page">

  <section class="boto">
    <button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button>
    <script type="text/javascript">
      function back() {
        history.back();
      }
    </script>
  </section>


  <br><br>
  <br><br>



  <center>
    <div class="col-lg-6 wow fadeInRight">
      <h2><?php echo $texto_traducido["ruta"][0] ?></h2>
    </div>
  </center>


  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">

        <div class="col-md-10 col-lg-7 col-xl-6">

          <h1 class="text-spacing-25 font-weight-normal title-opacity-9 Titu__color"><b><?php echo $texto_traducido["ruta"][1] ?></b></h1>

          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">

            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1">

                <p style="font-size: 19px;text-align: justify;" class="contente__font1"><?php echo $texto_traducido["ruta"][2] ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-5 col-xl-6" style="padding-left: 6%;">

          <div>
            <ul>
              <li>
                <a href="../PaginaComentarios.php?img=anconcito/imagenes/anconcito/0152_rutaPaloSanto.png">
                  <img style="width: 600px;height: 450px;" src="imagenes/anconcito/0152_rutaPaloSanto.png" id="Ruta del Palo Santo" alt="" class="image" />
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

          <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["ruta"][3] ?></b></h1>

          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <!-- Nav tabs-->

            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1-2">
                <p style="font-size: 19px;text-align: justify;" class="contente__font1"><?php echo $texto_traducido["ruta"][4] ?></p>

              </div>

              <div class="tab-pane fade" id="tabs-4-2-2">
                <div class="row row-40 justify-content-center text-center inset-top-10">
                  <div class="mapa">
                    <img src="images/quevisitar/2_IGLESIA SAN ISIDRO.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-lg-5 col-xl-6" style="padding-left: 6%;">

          <div>
            <ul>
              <li>
                <a href="../PaginaComentarios.php?img=anconcito/imagenes/anconcito/0153_rutaPescador.png">
                  <img style="width: 500px;height: 420px;" src="imagenes/anconcito/0153_rutaPescador.png" id="Ruta del Pescador" alt="" class="image" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>





</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php"); ?>