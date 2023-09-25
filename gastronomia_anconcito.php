<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> <?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
 
  <div class="col">
   <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Anconcito/0828_Ceviche_mixto.jpg">
        <img src="imagenes/Gastronomia/Anconcito/0828_Ceviche_mixto.jpg" class="card-img-top" style="height:350px;">
      </a>
      
     
      <div class="card-body card-body">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][32] ?></h5>
        <p class="card-text mb-5"><?php echo $texto_traducido["gale"][33] ?> </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
     <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Anconcito/0827_Ceviche_de_Camaron.jpg">
        <img src="imagenes/Gastronomia/Anconcito/0827_Ceviche_de_Camaron.jpg" class="card-img-top" style="height:350px;">
      </a>
      
      <div class="card-body">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][34] ?></h5>
        <p class="card-text mb-5"><?php echo $texto_traducido["gale"][35] ?></p>
      </div>
    </div>
  </div>
  

  <div class="col mx-auto">
 
        <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Anconcito/0826_arroz_marinero_2.jpg">
       <img src="imagenes/Gastronomia/Anconcito/0826_arroz_marinero_2.jpg" class="card-img-top" style="height:350px;">
      </a>
     
      <div class="card-body">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][36] ?></h5>
        <p class="card-text">  <?php echo $texto_traducido["gale"][37] ?></p>
      </div>
    </div>
  </div>

<?php include_once './template/footer.php';?>