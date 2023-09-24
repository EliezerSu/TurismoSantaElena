<?php include("head.php")?>
  <div class="page">      
    <section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br><br><br><br>
    <section>
      <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["hotels"][1]?></b></h1>
      <br>
      <br>
      <div class="container">
        <div class="row row-50 justify-content-center align-items-xl-center">
          <div class="col-md-10 col-lg-5 col-xl-6">
            <div class="slider">
              <ul>
                <li>
                  <a href="../PaginaValoraciones.php?img=lasnunez/imagenes/las_nunez/0434_hotel_estaciondelsol.jpg">
                    <img src="imagenes/las_nunez/0434_hotel_estaciondelsol.jpg" alt="" width="550" height="400"/>
                  </a>
                </li>
                <li>
                  <a href="../PaginaValoraciones.php?img=lasnunez/imagenes/las_nunez/0435_hotel_estaciondelsol1.jpg">
                    <img src="imagenes/las_nunez/0435_hotel_estaciondelsol1.jpg" alt="" width="550" height="400"/>
                  </a>
                </li>
                <li>
                  <a href="../PaginaValoraciones.php?img=lasnunez/imagenes/las_nunez/0436_hotel_estaciondelsol2.jpg">
                    <img src="imagenes/las_nunez/0436_hotel_estaciondelsol2.jpg" alt="" width=550" height="400"/>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-10 col-lg-7 col-xl-6">
            <h1 class="text-spacing-25 font-weight-normal title-opacity-9" style="font-size: 37px;"><b>Hostal Estación del Sol</b></h1>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
              <!-- Nav tabs-->
              <!-- Tab panes-->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-4-1-1">
                  <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["hotels"]["subtitle-1"]?></p>
                  <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["hotels"]["subtitle-2"]?></p>
                  <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["planyourtrip"][19]?>: Calle guayaquil, alado de la iglesia frente al mar.</p>
                  <p style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["planyourtrip"][20]?>: 0986721666</p>
                </div>
                <div class="tab-pane fade" id="tabs-4-2-1">
                  <div class="row row-40 justify-content-center text-center inset-top-10">
                    <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.9868740351376!2d-80.77737398503719!3d-1.742314036769918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902c2a307480f92f%3A0x415570520d516312!2sHosteria%20Estacion%20Del%20Sol!5e0!3m2!1ses!2sec!4v1672820124833!5m2!1ses!2sec" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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