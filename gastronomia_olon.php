<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas mt-5"  ><i class="fa-solid fa-circle-arrow-left"></i><?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
 
  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Montanita/0844_volcan_marisco.jpg">
          
        <img src="imagenes/Gastronomia/Olon/0844_volcan_marisco.jpg" class="card-img-top" style="height:350px;">
      </a>

      <div class="card-body ">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][28] ?></h5>
        <p class="card-text mb-3" style="text-align:justify;"><?php echo $texto_traducido["gale"][29] ?>
</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Montanita/0843_ceviche.jpeg">
          
        <img src="imagenes/Gastronomia/Olon/0843_ceviche.jpeg" class="card-img-top" style="height:350px;">
      </a>
  
      <div class="card-body ">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][30] ?></h5>
        <p class="card-text mb-5" style="text-align:justify;"><?php echo $texto_traducido["gale"][31] ?></p>
      </div>
    </div>
  </div>
</div>

<?php include_once './template/footer.php';?>