<?php include("head.php")?>
  <div class="page">      
    <section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br>
    <section class="platillos">
    <section>
        <section id="su_gente">
          <br><br><br>
          <h2 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["routes"][0]?></b></h2>
          <br>
          <p><?php echo $texto_traducido["routes"]["subtitle-1"]?></p>
          <br>
          <br>       
        </section>
        <div class="imgaling1">
          <div class="comida">
              <div class="com" id="comida">
                <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0389_senderos2.jpg">
                  <img id="imcom" src="imagenes/las_nunez/0389_senderos2.jpg" alt="">
                </a>
                <!-- <div class="overlay">
                    <h2>Playa Las Nuñez</h2>
                </div> -->
              </div>
          </div>
          <div class="comida">
              <div class="com" id="comida">
                <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0390_senderos3.jpg">
                  <img id="imcom" src="imagenes/las_nunez/0390_senderos3.jpg" alt="">
                </a>
                <!-- <div class="overlay">
                    <h2>Playa Las Nuñez</h2>
                </div> -->
              </div>
          </div>
          <div class="comida">
              <div class="com" id="comida">
                <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0392_senderos5.jpg">
                  <img id="imcom" src="imagenes/las_nunez/0392_senderos5.jpg" alt="">
                </a>
                <!-- <div class="overlay">
                    <h2>Playa Las Nuñez</h2>
                </div> -->
              </div>
          </div>
        </div>
        <section id="su_gente">
          <br>
          <br>
          <p><?php echo $texto_traducido["routes"]["subtitle-2"]?></p>
          <br>
        </section>
    </section>

    
    <br>
    <br>
    <section class="platillos">
    <section>
        <section id="su_gente">
          <br>
          <h2 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["routes"][1]?></b></h2>
          <br>
          <p><?php echo $texto_traducido["routes"]["subtitle-3"]?></p>
          <br>
          <br>       
        </section>
        <div class="imgaling1">
          <div class="comida">
              <div class="com" id="comida">
                <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0427_fincadonctormigelreyes.jpg">
                  <img id="imcom" src="imagenes/las_nunez/0427_fincadonctormigelreyes.jpg" alt="">
                </a>
                <!-- <div class="overlay">
                    <h2>Playa Las Nuñez</h2>
                </div> -->
              </div>
          </div>
          <div class="comida">
              <div class="com" id="comida">
                <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0428_fincadonctormigelreyes1.jpg">
                  <img id="imcom" src="imagenes/las_nunez/0428_fincadonctormigelreyes1.jpg" alt="">
                </a>
                <!-- <div class="overlay">
                    <h2>Playa Las Nuñez</h2>
                </div> -->
              </div>
          </div>
          <div class="comida">
              <div class="com" id="comida">
                <a href="../PaginaComentarios.php?img=lasnunez/imagenes/las_nunez/0429_fincadonctormigelreyes2.jpg">
                  <img id="imcom" src="imagenes/las_nunez/0429_fincadonctormigelreyes2.jpg" alt="">
                </a>
                <!-- <div class="overlay">
                    <h2>Playa Las Nuñez</h2>
                </div> -->
              </div>
          </div>
        </div>
        <section id="su_gente">
          <br>
          <br>
          <p style="font-weight: bold;"><?php echo $texto_traducido["routes"][2]?></p><?php echo $texto_traducido["routes"]["subtitle-4"]?></p>
          <p style="font-weight: bold;"><?php echo $texto_traducido["routes"][3]?></p>
          <p><?php echo $texto_traducido["routes"]["subtitle-5"]?></p>
          <br>
        </section>
    </section>
    <br>
    <br>
  </div>
  <!-- Page Footer-->
  <?php include("footer.php") ?>