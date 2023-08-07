<?php include("head.php") ?>
<div class="page">
  <section class="boto">
    <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
  </section>
  <br><br><br><br>
  <section>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Hoteles</b></h1>
    <br>
    <br>
    <div class="container">
      <div class="row row-50 justify-content-center align-items-xl-center">
        <div class="col-md-10 col-lg-5 col-xl-6">



          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="../PaginaValoraciones.php?img=lasnunez/imagenes/las_nunez/0431_hotel_elcuysurfista.jpg">
                  <img src="imagenes/las_nunez/0431_hotel_elcuysurfista.jpg" alt="" class="w-100"  />
                </a>
              </div>
              <div class="carousel-item">
                <a href="../PaginaValoraciones.php?img=lasnunez/imagenes/las_nunez/0432_hotel_elcuysurfista1.jpg">
                  <img src="imagenes/las_nunez/0432_hotel_elcuysurfista1.jpg" alt="" class="w-100" />
                </a>
              </div>
              <div class="carousel-item">
                <a href="../PaginaValoraciones.php?img=lasnunez/imagenes/las_nunez/0433_hotel_elcuysurfista2.jpg">
                  <img src="imagenes/las_nunez/0433_hotel_elcuysurfista2.jpg" alt="" class="w-100" />
                </a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-10 col-lg-7 col-xl-6">

          <h1 class="text-spacing-25 font-weight-normal title-opacity-9"><b>Hotel El Kuy Surfista</b></h1>
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <!-- Nav tabs-->
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1">

                <p style="text-align: justify; font-size: 17px;">Cuenta con qué servicio de: a/c, wifi, SmarTV, discoteca, restaurante, piscina, habitaciones: matrimoniales, triple y familiares.</p>
                <p style="text-align: justify; font-size: 17px;">Horarios de atención: En la recepción de 8 am hasta 17 pm, sin embargo, puede llamar a cualquier hora será atendido.</p>
                <p style="text-align: justify; font-size: 17px;">Dirección: Calle 9 de octubre, al lado del puerto pesquero.</p>
                <p style="text-align: justify; font-size: 17px;">Número de teléfono: 0984771131</p>

              </div>
              <div class="tab-pane fade" id="tabs-4-2">
                <div class="row row-40 justify-content-center text-center inset-top-10">
                  <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.9752887753452!2d-80.779344403455!3d-1.7415829987301006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902c2a3aa65e89dd%3A0x6333c66629c575a6!2sEl%20Kuy%20Surfista!5e0!3m2!1ses!2sec!4v1672819566574!5m2!1ses!2sec" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <br>
  <br>
</div>
<!-- Page Footer-->
<?php include("footer.php") ?>