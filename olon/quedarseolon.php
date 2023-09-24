<?php include("head.php");?>
  <div class="page">   
  <br>
      <?php include("boton.php");?>
      <br>
<br> 
<br>
<br>
<br>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" ></div>
          <!-- Section Box Categories-->
          <section class="section section-lg section-top-1 bg-gray-4" id="hotelerias"><!-- bg-gray-4 -->
        <br>
        <br>
        <br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["accommodation"] ?></b></h1>

        <br/>
      
          <div class="span12 h6 ">     	
              <!-- Gallery Thumbnails -->
              <div class="row">
                  <ul class="gallery-post-grid-3">
                      <!-- Gallery Item 1 -->
                      <li  class="span3 gallery-item galeriafiestas" >
                          <a href="hotelesolon.php"><img src="imagenes/olon/0231_hotel_1.jpg" style="border:1px solid black"></a>
                          
                          <span class="project-details"><span class="material-symbols-outlined">
                          </span><a href="hotelesolon.php"><?php echo $texto_traducido["hotels"][1] ?></a></span>
                      </li>

                      <!-- Gallery Item 2 -->
                      <li class="span3 gallery-item galeriafiestas">
                          <a href="hostalesolon.php"><img src="imagenes/olon/0236_hostal_1.jpg" style="border:1px solid black"></a>
                            
                          <span class="project-details"><span class="material-symbols-outlined">
                          </span><a href="hostalesolon.php"><a href="hotelesolon.php"><?php echo $texto_traducido["hotels"][2] ?></a></span>
                      </li>

                      <!-- Gallery Item 3 -->
                      <li class="span3 gallery-item galeriafiestas">
                          <a href="hosteriaolon.php"><img src="imagenes/olon/0250_hosteria_1.jpg"style="border:1px solid black"></a>
                            
                          <span class="project-details"><span class="material-symbols-outlined">
                          </span><a href="hosteriaolon.php"><a href="hotelesolon.php"><?php echo $texto_traducido["hotels"][3] ?></a></span>
                      </li>
                  </ul>
              </div>
          </div>
      </section>
      <br>
      <br>
      <br>
      <br>
      <!-- Page Footer-->
      <?php include("footer.php") ?>