<?php include("head.php");?>  
  <div>
    <div class="page"> 
      <section class="boto">
          <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
      </section>
      <br>
      <h2 style="color: #162e44;margin-top: 60;margin-top: 60px;"><?php echo $texto_traducido["header"]["subtitle-1"][3] ?></h2>

    
          <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
            <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b> <?php echo $texto_traducido["cult"][0] ?></b></h1>
              <div class="row row-50 justify-content-center align-items-xl-center">
                <div class="col-md-10 col-lg-5 col-xl-6" style="padding-right: 6%;">
                  
                <div class="">
                    <ul >
                      <li >
                      <a href="../PaginaComentarios.php?img=montanita/imagenes/montanita/0570_san_isidro.jpg">
                        <img src="imagenes/montanita/0570_san_isidro.jpg" alt="" width="519" height="564"/>
                      </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-6">
                
                  <!-- Bootstrap tabs-->
                  <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                    <!-- Nav tabs-->
                  
                    <!-- Tab panes-->
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="tabs-4-1">
                        <div class="product-big-rating">
                                <p style = "text-align: justify; font-size: 17px;"><?php echo $texto_traducido["cult"][1] ?>
                                <br>
                                </p>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- section 2-->
          <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
            <h1 class="text-spacing-25 font-weight-normal title-opacity-9 Titu__color" ><b> <?php echo $texto_traducido["cult"][2] ?></b></h1>
              <div class="row row-50 justify-content-center align-items-xl-center">
                <div class="col-md-10 col-lg-5 col-xl-6">
                  
                  <div class="">
                    
                      <a href="../PaginaComentarios.php?img=montanita/imagenes/montanita/0571_monserrat.jpg">
                        <img src="imagenes/montanita/0571_monserrat.jpg" alt="" class="image"/>
                      </a>  
                      
                  </div>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-6">
                
                  <!-- Bootstrap tabs-->
                  <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                  
                    <!-- Tab panes-->
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="tabs-4-2">
                        <div class="product-big-rating">
                                <p style = "text-align: justify; font-size: 17px; font-family: 'Montserrat';"
                                ><?php echo $texto_traducido["cult"][3] ?>
                                </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <br><br><br>
  </div>
    <!-- Page Footer-->
    <?php include("footer.php");?>   