<?php include("headsanjose.php");?>

<div>
<section class="section swiper-container" >
          <div>
          <img src="imagenes/sanjose/0341_itinerario.jpg" alt="" class="image"/> 
          </div>
    
      </section>
<?php include("botonsanjose.php");?>
  <body>
    <br></br>
    <br></br>   
   <div class="container"> <p style="font-size: 17px; text-align: center;"><?php echo $texto_traducido["plani"][0] ?><br></p>
   <br></br></div> 
  
<h3 style="justify-content: center; display: flex;" ><?php echo $texto_traducido["plani"][1] ?> &#128197;</h3>
<br></br> 

<table class="table-fill">
<thead>
<tr>
<th class="text-left"><?php echo $texto_traducido["plani"][2] ?></th>
<th class="text-left"><?php echo $texto_traducido["plani"][3] ?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">7:30</td>
<td class="text-left"><?php echo $texto_traducido["plani"][4] ?></td>
</tr>
<tr>
<td class="text-left">9:00-10:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][5] ?></td>
</tr>
<tr>
<td class="text-left">10:00-11:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][6] ?></td>
</tr>
<tr>
<td class="text-left">11:00-14:30</td>
<td class="text-left"><?php echo $texto_traducido["plani"][7] ?></td>
</tr>
<tr>
<td class="text-left">14:30-15:30</td>
<td class="text-left"><?php echo $texto_traducido["plani"][8] ?></td>
</tr>
<tr>
<td class="text-left">15:30-17:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][9] ?></td>
</tr>
<tr>
<td class="text-left">17:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][10] ?></td>
</tr>
</tbody>
</table>

<br></br>   
  
<h3 style="justify-content: center; display: flex;" ><?php echo $texto_traducido["plani"][11] ?> &#128197;</h3>
<br></br> 

<table class="table-fill">
<thead>
<tr>
<th class="text-left"><?php echo $texto_traducido["plani"][2] ?></th>
<th class="text-left"><?php echo $texto_traducido["plani"][3] ?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">7:30</td>
<td class="text-left"><?php echo $texto_traducido["plani"][12] ?></td>
</tr>
<tr>
<td class="text-left">7:30</td>
<td class="text-left"><?php echo $texto_traducido["plani"][13] ?></td>
</tr>
<tr>
<td class="text-left">7:30-8:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][14] ?></td>
</tr>
<tr>
<td class="text-left">8:00-13:00</td>
<td class="text-left">
    <ul>
        <li>&#10148; <?php echo $texto_traducido["plani"][15] ?></li>
        <li>&#10148; <?php echo $texto_traducido["plani"][16] ?></li>
        <li>&#10148; <?php echo $texto_traducido["plani"][17] ?></li>
    </ul>
</td>
</tr>
<tr>
<td class="text-left">13:30-14:30</td>
<td class="text-left"><?php echo $texto_traducido["plani"][18] ?></td>
</tr>
<tr>
<td class="text-left">15:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][19] ?></td>
</tr>
<tr>
<td class="text-left">17:00</td>
<td class="text-left"><?php echo $texto_traducido["plani"][20] ?></td>
</tr>
</tbody>
</table>
<br></br>
  
<section style="display: flex; justify-content:space-evenly">
<div style="margin-bottom: 40px;"><a class="button button-lg button-primary button-ujarak" href="imagenes/itinerario.pdf" target="_blank"><?php echo $texto_traducido["plani"][21] ?></a></div>

<div><a class="button button-lg button-primary button-ujarak" href="imagenes/itinerario.pdf" download="itinerario_san_jose"><?php echo $texto_traducido["plani"][22] ?></a></div>
</section>
</div>
      <!-- Page Footer-->
    <?php
	    include("footersanjose.php");
	    ?>
