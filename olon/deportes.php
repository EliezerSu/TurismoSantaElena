<?php include("head.php")?>
    <div class="page">     
       <!--Titulo-->           
      <section class="section section-sm bg-default">
        <div class="container">
        
          <h2><?php echo $texto_traducido["header"]["subtitle-1"][0]?></h2>  
        </div>
       
      <?php include("boton.php")?>
      <br><br><br>
        <h4 class="title-cards"><?php echo $texto_traducido["header"]["types"][0]?></h4>
      </section>
        <!--section 1-->  
      <section class="section section-sm bg-default">
          <div class="container">
            <div class="row row-sm row-40 row-md-50">
              <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="../PaginaComentarios.php?img=olon/imagenes/olon/0214_qh_dya_1.jpg"><img src="imagenes/olon/0214_qh_dya_1.jpg" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="text-spacing-25 font-weight-normal title-opacity-9"><a href="#"><b> <?php echo $texto_traducido["header"]["subtitle-1"][5]?></b></a></h5>
                        <div class="row row-50 justify-content-center align-items-x1-center">
                        <p style = "text-align: justify; font-size:17px;font-family: 'Montserrat';">
                        <?php echo $texto_traducido["body"][4]?>
                        <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-md-12 wow fadeInLeft">
            </div>
          </div>
      </section>
        <!--section 2-->  
      <section class="section section-sm bg-default">
          <div class="container">
            <div class="row row-sm row-40 row-md-50">
              <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="../PaginaComentarios.php?img=olon/imagenes/olon/0215_qh_dya_2.jpg"><img src="imagenes/olon/0215_qh_dya_2.jpg" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                      <h5 class="text-spacing-25 font-weight-normal title-opacity-9"><a href="#"><b> <?php echo $texto_traducido["header"]["subtitle-1"][5] ?> <br> <?php echo $texto_traducido["header"]["subtitle-1"][5] ?> </b></a></h5>
                        <div class="row row-50 justify-content-center align-items-xl-center">
                        <p style = "text-align: justify; font-size: 17px;font-family: 'Montserrat';"><?php echo $texto_traducido["body"][5]?>
                        <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-md-12 wow fadeInLeft">
            </div>
          </div>
      </section>
        <!--section 3-->  
      <section class="section section-sm bg-default">
          <div class="container">
            <div class="row row-sm row-40 row-md-50">
              <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="../PaginaComentarios.php?img=olon/imagenes/olon/0216_qh_dya_3.jpg"><img src="imagenes/olon/0216_qh_dya_3.jpg" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                      <h5 class="text-spacing-25 font-weight-normal title-opacity-9"><a href="#"><b><?php echo $texto_traducido["header"]["subtitle-1"][6] ?></b></a></h5>
                        <div class="row row-50 justify-content-center align-items-xl-center">
                        <p style = "text-align: justify; font-size: 17px;font-family: 'Montserrat';"><?php echo $texto_traducido["body"][6]?>
                        <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-md-12 wow fadeInLeft">
            </div>
          </div>
      </section>
      <br> <br> 
      <!-- Page Footer-->
      <?php
	        include("footer.php");
	    ?>  