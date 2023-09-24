<?php include("head.php");?>  
  <div>
    <div class="page">  
      <section class="boto">  
          <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
      </section>
      <br><br>
    
      <!-- Breadcrumbs -->
      <h2 style="color: #162e44;margin-top: 60;margin-top: 60px;"><?php echo $texto_traducido["header"][0] ?></h2>
  
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["histo"][0] ?></b></h1>
          <div class="row row-50 justify-content-center align-items-xl-end">
            <div class="col-md-10 col-lg-5 col-xl-6">
              
            <div class="">
                  <a href="../PaginaComentarios.php?img=montanita/imagenes/montanita/0565_playa2.jpg">
                    <img src="imagenes/montanita/0565_playa2.jpg" alt="" width="540" height="564"/>                
                  </a>  
            </div>
          </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
                
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
  
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    
                    <p style = "text-align: justify; font-size: 17px;">
                    <?php echo $texto_traducido["histo"][1] ?> 
                    </p>

                    
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br><br><br>


      <!--Seccion 3-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["histo"][2] ?></b></h1>
          <div class="row row-50 justify-content-center align-items-xl-center">

            <div class="col-md-10 col-lg-5 col-xl-6">
              
            <div class="">
                    <img src="imagenes/montanita/0566_visitantes.jpg" alt="" width="600" height="564"/>
                    <p style = "text-align: center;">    
                    <?php echo $texto_traducido["histo"][3] ?>
                    </p>               
              </div>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
                    
              <!--Bootstrap tabs-->
             <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    
                    
                    <p style = "text-align: justify; font-size: 17px;
                    ">
                    <?php echo $texto_traducido["histo"][4] ?>

                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Seccion 2-->      
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <h4 class="title-cards"><?php echo $texto_traducido["histo"][5] ?></h4>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div  class="thumbnail-mary-figure"><a ><img src="imagenes\montanita\0563_hotel_selina.jpg" alt=""width="270" height="195"/></a>
              </div>
              
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div  class="thumbnail-mary-figure"><a ><img src="imagenes/montanita/0554_playa_montanita.jpg" alt="" width="270" height="195"/></a>
              </div>
              
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div  class="thumbnail-mary-figure"><a ><img src="imagenes/montanita/0555_iglesia_catolica1.jpg"alt="" width="270" height="195"/></a>
              </div>
              
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><a ><img src="imagenes\montanita\0557_monumento_surfista.jpg"alt="" width="270" height="195"/></a>
              </div>              
            </article>
            
          </div>
        </div>
      </section>

      
    
  </div>
    <!-- Page Footer-->
    <?php	include("footer.php");?>    