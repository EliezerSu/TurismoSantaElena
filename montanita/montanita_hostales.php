<?php include("head.php");?>  
  <div>
    <div class="page"> 
    </section>
      <section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>

      </section>   <br><br><br><br>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b>Hostales</b></h1>
    <br>
  
    
        <!--Seccion1-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
        <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["ir"][8] ?></b></h1>
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6">
                <a href="../PaginaValoraciones.php?img=montanita/imagenes/montanita/0584_hostal_alebrijes.jpg">           
                  <img src="imagenes/montanita/0584_hostal_alebrijes.jpg">
                </a>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
             
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs" >
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1-3" data-toggle="tab" ><?php echo $texto_traducido["ir"][4] ?></a></li>
                  
                  
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1-3">
                    <p style = "text-align: justify; font-size: 17px">
                    <?php echo $texto_traducido["ir"][9] ?>
                    </p>
                  
                  </div>
                  
                  
            </div>
          </div>
        </div>
      </section>
      <br><br>
  </div>    
    <!-- Page Footer-->
    <?php include("footer.php");?>