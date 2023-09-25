<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> <?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
 
  <div class="col">
         <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Ancon/0825_Ceviche_mixto.jpg">
       <img src="imagenes/Gastronomia/Ancon/0825_Ceviche_mixto.jpg" class="card-img-top" style="height:350px;">
      </a>
    
      <div class="card-body card-body-3">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][32] ?></h5>
        <p class="card-text" style="text-align:justify;"><?php echo $texto_traducido["gale"][33] ?></div>
    </div>

  </div>
  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Ancon/0824_Ceviche_de_Camaron.jpg">
       <img src="imagenes/Gastronomia/Ancon/0824_Ceviche_de_Camaron.jpg" class="card-img-top" style="height:350px;">
      </a>
  
      <div class="card-body card-body-3">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][34] ?></h5>
        <p class="card-text" style="text-align:justify;"><?php echo $texto_traducido["gale"][35] ?></div>
    </div>
  </div>
  

  <div class="col mx-auto">
     <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Ancon/0823_arroz_marinero_3.jpg">
        <img src="imagenes/Gastronomia/Ancon/0823_arroz_marinero_3.jpg" class="card-img-top" style="height:350px;">

      </a>
            <div class="card-body ">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][36] ?></h5>
        <p class="card-text" style="text-align:justify;">  <?php echo $texto_traducido["gale"][37] ?> </div>
    </div>
  </div>
</div>

<?php include_once './template/footer.php';?>