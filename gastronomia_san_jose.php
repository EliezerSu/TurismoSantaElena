<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> <?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
 
  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/San_Jose/0845_Camarones_apanados_al_ajillo.jpg">
          
        <img src="imagenes/Gastronomia/San_Jose/0845_Camarones_apanados_al_ajillo.jpg" class="card-img-top" style="height:350px">
      </a>
    
      <div class="card-body card-body-3">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][12] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][13] ?>
       </div>
    </div>
    
  </div>
  <div class="col">
    <div class="card">
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/San_Jose/0846_Ceviche_mixto.jpg">
          
        <img src="imagenes/Gastronomia/San_Jose/0846_Ceviche_mixto.jpg" class="card-img-top" style="height:350px;">
        </a>
      
      <div class="card-body card-body-3">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][14] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][15] ?>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/San_Jose/0847_Pescado_apanado.jpg">
          
        <img src="imagenes/Gastronomia/San_Jose/0847_Pescado_apanado.jpg" class="card-img-top" style="height:350px">
      </a>
      
      <div class="card-body card-body-3">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][16] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][17] ?>
       </div>
    </div>
    
  </div>
  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/San_Jose/0848_Piqueo_marinero.jpg">
          
        <img src="imagenes/Gastronomia/San_Jose/0848_Piqueo_marinero.jpg" class="card-img-top" style="height:350px;">
      </a>
      
      <div class="card-body card-body-3">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][18] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][19] ?> </div>
    </div>
  </div>

</div>

<?php include_once './template/footer.php';?>