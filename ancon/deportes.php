  <?php include("head.php")?>     
  <?php include("boton.php");?>

  <br>

  <section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
      <div class="container">
        <center><h2><?php echo $texto_traducido["title-1"] ?> y Aventuras</h2></center>
      </div>
      <div class="row row-50 justify-content-center align-items-xl-center">
        <div class="col-md-10 col-lg-5 col-xl-6">
          <div>
            <ul>
              <li>
                <a href="../PaginaComentarios.php?img=ancon/imagenes/ancon/0018_deportes.jpeg">
                <img src="imagenes/ancon/0018_deportes.jpeg" alt="" width="519" height="564"/>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-10 col-lg-7 col-xl-6">
          
          <h1 class="text-spacing-25 font-weight-normal title-opacity-9" ><b><?php echo $texto_traducido["title-1"] ?> en Ancón</b></h1>
          
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs" style="border-bottom: 3px solid #01b3a7" >
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab" ><?php echo $texto_traducido["swapper"][8] ?></a></li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-4-1">
                
                <p style = "text-align: justify; font-size: 17px; font-family: 'Montserrat';
                "><?php echo $texto_traducido["desc"] ?>
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br>
  <br>

  <div class="imagenes">
      <div class="galeria">         
          <div class="contenedor-imagenes">
              <div class="imagen">
                <a href="../PaginaComentarios.php?img=ancon/imagenes/ancon/0019_deportes.jpg">
                  <img src="imagenes/ancon/0019_deportes.jpg" alt="">
                  <div class="overlay">
                      <h2><?php echo $texto_traducido["title-1"] ?></h2>
                  </div>
                </a>
              </div>
              <div class="imagen">
                <a href="../PaginaComentarios.php?img=ancon/imagenes/ancon/0020_deportes.jpg">
                  <img src="imagenes/ancon/0020_deportes.jpg" alt="">
                  <div class="overlay">
                      <h2><?php echo $texto_traducido["title-1"] ?></h2>
                  </div>
                </a>
              </div>
              <div class="imagen">
                <a href="../PaginaComentarios.php?img=ancon/imagenes/ancon/0021_deportes.jpeg">
                  <img src="imagenes/ancon/0021_deportes.jpeg" alt="">
                  <div class="overlay">
                      <h2>Off Road</h2>
                  </div>
                </a>
              </div>
          </div>
      </div>
  </div>

  <br>
  <br>
  <!-- Page Footer-->
  <?php include("footer.php");?>