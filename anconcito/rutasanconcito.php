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
      <h2>Rutas y excursiones</h2>
    </div>
  </center>


  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">

        <div class="col-md-10 col-lg-7 col-xl-6">

          <h1 class="text-spacing-25 font-weight-normal title-opacity-9 Titu__color"><b>Ruta del Palo Santo</b></h1>

          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">

            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1">

                <p style="font-size: 19px;text-align: justify;" class="contente__font1">Esta ruta permite disfrutar de un bosque de palo santo que se encuentra presente en la
                  parroquia Anconcito, donde se puede apreciar un paisaje acogedor y relajante, ideal para
                  la práctica de senderismo y ciclismo. <br><br>El Palo Santo ayuda a reducir el estrés y purificar
                  el ambiente, por tanto, esta ruta constituye una oportunidad de relax y disfrute de nuevas
                  vivencias dentro de las maravillas de la naturaleza.</p>
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

          <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Ruta del pescador</b></h1>

          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <!-- Nav tabs-->

            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1-2">
                <p style="font-size: 19px;text-align: justify;" class="contente__font1">Esta ruta se ejecuta una vez al año en honor a la Virgen del Pescador, donde a través de
                  un recorrido náutico se le agradece las bondades del mar y se bendice a los pescadores
                  con sus embarcaciones. Esta procesión inicia a las 9:00 am en conjunto con los familiares
                  y moradores en general, quienes complementan este recorrido con la preparación de
                  platos típicos de la parroquia.<br><br> Generalmente termina con el desembarque de pasajeros en
                  el muelle de Anconcito a la 13:00 pm, donde se puede disfrutar de una fiesta gratuita.</p>

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