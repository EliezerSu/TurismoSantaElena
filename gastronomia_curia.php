<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> <?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
 
  <div class="col">
    <div class="card tarjeta-gastro">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Curia/0831_coctel_de_almejas.jpg">
       <img src="imagenes/Gastronomia/Curia/0831_coctel_de_almejas.jpg" class="card-img-top" style="height:350px;">
      </a>

      <div class="card-body card-body-2">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][1] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][2] ?>
      </p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card tarjeta-gastro">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Curia/0830_Ceviche_de_Camaron.jpg">
        <img src="imagenes/Gastronomia/Curia/0830_Ceviche_de_Camaron.jpg" class="card-img-top" style="height:350px;">
      </a>
     
      <div class="card-body card-body-2">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][3] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][4] ?>
        </div>
    </div>
  </div>
  <div class="col mx-auto">
    <div class="card tarjeta-gastro">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Curia/0829_Camaotillo_frito.jpg">
        <img src="imagenes/Gastronomia/Curia/0829_Camaotillo_frito.jpg" class="card-img-top" style="height:350px;">
      </a>
     
      
      <div class="card-body">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][5] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][6] ?>      </div>
    </div>
  </div>
</div>

<?php include_once './template/footer.php';?>