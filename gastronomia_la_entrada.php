<?php include_once './template/header.php';?>
<div class="mb-3">
<a href="./galeria__gastronomia.php" class=" flechas"  ><i class="fa-solid fa-circle-arrow-left"></i> <?php echo $texto_traducido["gale"][7] ?></a>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
  <div class="col">
    <div class="card tarjeta-gastro">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/La_entrada/0835_Paraiso_1.jpg">
        <img src="imagenes/Gastronomia/La_entrada/0835_Paraiso_1.jpg" class="card-img-top" style="height:350px; ">
      </a>
          

      <div class="card-body card-body-2 ">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][20] ?></h5>
        <p class="card-text" style="text-align:justify;"><?php echo $texto_traducido["gale"][21] ?></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card tarjeta-gastro ">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/La_entrada/0832_arroz_marinero_2.jpg">
        <img src="imagenes/Gastronomia/La_entrada/0832_arroz_marinero_2.jpg" class="card-img-top" style="height:350px; ">
      </a>
    
      <div class="card-body card-body-2">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][22] ?></h5>
        <p class="card-text" style="text-align:justify;">  <?php echo $texto_traducido["gale"][23] ?>
       </div>
    </div>
  </div>
  <div class="col">
    <div class="card tarjeta-gastro">
      <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/La_entrada/0833_ceviche_pulpo_1.jpg">
        <img src="imagenes/Gastronomia/La_entrada/0833_ceviche_pulpo_1.jpg" class="card-img-top" style="height:350px; ">
      </a>
          

      <div class="card-body card-body-2">
        <h5 class="card-title"><?php echo $texto_traducido["gale"][24] ?></h5>
        <p class="card-text"style="text-align:justify;">  <?php echo $texto_traducido["gale"][25] ?></div>
    </div>
  </div>

    <div class="col">
        <div class="card tarjeta-gastro">
          <a href="PaginaValoraciones.php?img=imagenes/Gastronomia/La_entrada/0834_Langosta_salsa_ajo.png">
          <img src="imagenes/Gastronomia/La_entrada/0834_Langosta_salsa_ajo.png" class="card-img-top" style="height:350px; ">
         </a>
          
        
        <div class="card-body card-body-2 ">
            <h5 class="card-title text-center"><?php echo $texto_traducido["gale"][26] ?></h5>
            <p class="card-text" style="text-align:justify;"><?php echo $texto_traducido["gale"][27] ?> </div>
        </div>
    </div>
</div>

<?php include_once './template/footer.php';?>