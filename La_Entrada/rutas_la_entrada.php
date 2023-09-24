<?php include("head_la_entrada.php"); ?>


<a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>

<div class="tabs-custom tabs-horizontal tabs-line mx-auto w-50" id="tabs-4">
  <ul style="border-bottom: 3px solid #01b3a7;">

    <li>
      <h2 style="text-align: center;color:#122638"><?php echo $texto_traducido["ruta"][0] ?></h2>
    </li>
  </ul>
</div>




<section class="section section-sm section-first bg-default text-md-left">
  <div class="container">
    <div class="tabs-custom tabs-horizontal tabs-line w-75 mx-auto" id="tabs-4">
      <ul>

        <li>
          <h2 style="text-align: center;color:#122638"><?php echo $texto_traducido["ruta"][1] ?></h2>
        </li>
      </ul>
    </div>
    <div class="row row-50 justify-content-center align-items-xl-center">
      <div class="col-md-10 col-lg-5 col-xl-6">
        <a href="../PaginaComentarios.php?img=La_Entrada/imagenes/la_entrada/rutas/0699__sendero_entrada.png">
          <img src="imagenes/la_entrada/rutas/0699__sendero_entrada.png" alt="">
        </a>


      </div>
      <div class="col-md-10 col-lg-7 col-xl-6">



        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->

          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-4-1">

              <p style="text-align: justify; font-size: 17px;
                    ">
                <?php echo $texto_traducido["ruta"][2] ?>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--Seccion 2-->
<section class="section section-sm section-first bg-default text-md-left" style="border-bottom: 450px;">
  <div class="container">
    <div class="tabs-custom tabs-horizontal tabs-line w-75 mx-auto" id="tabs-4">
      <ul>

        <li>
          <h2 style="text-align: center;color:#122638"><?php echo $texto_traducido["ruta"][3] ?> </h2>
        </li>
      </ul>
    </div>
    <div class="row row-50 justify-content-center align-items-xl-center">

      <div class="col-md-10 col-lg-7 col-xl-6">


        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
          <!-- Nav tabs-->

          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-4-1-2">

              <p style="text-align: justify; font-size: 17px">
                <?php echo $texto_traducido["ruta"][4] ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-lg-5 col-xl-6">
        <a href="../PaginaComentarios.php?img=La_Entrada/imagenes/la_entrada/rutas/0700__sendero_rinconada.png">
          <img src="imagenes/la_entrada/rutas/0700__sendero_rinconada.png" alt="">
        </a>



      </div>
    </div>

  </div>
</section>

<br> <br> <br>
<?php
include("footer.php");
?>


</div>