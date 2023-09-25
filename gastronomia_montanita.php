<?php include_once './template/header.php';?>
<div class="mb-3 mt-5 ">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> <?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
 
  <div class="col" >
    <div class="card" >
        <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Montanita/0842_dona_elena.jpg">
          
         <img src="imagenes/Gastronomia/Montanita/0842_dona_elena.jpg" class="card-img-top" style="height:350px;">
        </a>
        
      
      <div class="card-body card-body-1">
        <h5 class="card-title">3.1.1.	<?php echo $texto_traducido["gale"][8] ?> </h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][9] ?>
      </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/Montanita/0841_arroz_marinero_4.jpg">
          
        <img src="imagenes/Gastronomia/Montanita/0841_arroz_marinero_4.jpg" class="card-img-top" style="height:350px;">
      </a>

      <div class="card-body card-body-1 ">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][10] ?></h5>
        <p class="card-text"><?php echo $texto_traducido["gale"][11] ?>
      </p>
      </div>
    </div>
  </div>
</div>

<?php include_once './template/footer.php';?>