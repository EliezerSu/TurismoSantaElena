<?php include("head.php");?>
   <div class="page">  
      <br>
      <?php include("boton.php");?>
      <br><br>
    <!--Seccion 1 viajes dia 1-->
      <section>
      <br><br>
          <h6 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra container" style="text-align: center;color:#122638" ><b><?php echo $texto_traducido["itinerario"][0] ?></b></h6>
      <br><br>
      <center><h2 style='color:#122638'><?php echo $texto_traducido["itinerario"][1] ?> 1 <i class="far fa-calendar-alt"></i></h2></center><br>
        <table class="table table-striped col-10 mx-auto text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Hora</th>
              <th scope="col">Actividad</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>7:00</td>
              <td><?php echo $texto_traducido["itinerario"][2] ?></td>
            </tr>
            <tr>
              <td>8:00</td>
              <td><?php echo $texto_traducido["itinerario"][3] ?></td>
            </tr>
            <tr>
              <td>9:30</td>
              <td><?php echo $texto_traducido["itinerario"][4] ?> El Salto</td>
            </tr>
            <tr>
              <td>10:00</td>
              <td><?php echo $texto_traducido["itinerario"][4] ?> El Encanto</td>
            </tr>
            <tr>
              <td>10:40</td>
              <td>Lunch(Recreo)</td>
            </tr>
            <tr>
              <td>11:00</td>
              <td><?php echo $texto_traducido["itinerario"][4] ?> de Alex</td>
            </tr>
            <tr>
              <td>12:30</td>
              <td><?php echo $texto_traducido["itinerario"][5] ?></td>
            </tr>
            <tr>
              <td>14:00</td>
              <td>Bosque Húmedo Tropical Comuna Olón</td>
            </tr>
            <tr>
              <td>17:00</td>
              <td><?php echo $texto_traducido["itinerario"][6] ?></td>
            </tr>
            <tr>
              <td>18:30</td>
              <td><?php echo $texto_traducido["itinerario"][7] ?></td>
            </tr>
            <tr>
              <td>19:00</td>
              <td><?php echo $texto_traducido["itinerario"][8] ?></td>
            </tr>
          </tbody>
        </table>
      </section>   
            <br>
    <!--Seccion 2 dia 2-->
      <section>
      <br><br>
      <center><h2 style='color:#122638'><?php echo $texto_traducido["btn-1"] ?> 2 <i class="far fa-calendar-alt"></i></h2></center><br>
      <br>
        <table class="table table-striped col-10 mx-auto text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Hora</th>
              <th scope="col">Actividad</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>8:00</td>
              <td><?php echo $texto_traducido["itinerario"][3] ?></td>
            </tr>
            <tr>
              <td>9:00</td>
              <td>Bosque protector "el Cangrejal de Olón"</td>
            </tr>
            <tr>
              <td>11:00</td>
              <td>Iglesia Misericordia de Dios</td>
            </tr>
            <tr>
              <td>12:30</td>
              <td>Almuerzo en el Restaurante "Recetas de la Abuela"</td>
            </tr>
            <tr>
              <td>14:00</td>
              <td><?php echo $texto_traducido["itinerario"][11] ?></td>
            </tr>
            <tr>
              <td>16:00</td>
              <td><?php echo $texto_traducido["itinerario"][12] ?></td>
            </tr>
            <tr>
              <td>17:00</td>
              <td><?php echo $texto_traducido["itinerario"][13] ?></td>
            </tr>
            <tr>
              <td>14:00</td>
              <td><?php echo $texto_traducido["itinerario"][14] ?></td>
            </tr>
          </tbody>
        </table>
      </section>   
      <br><br>
      <div class="botonesPdf ">
          <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/Itinerario_Viajes.pdf" 
          target="_blank"><?php echo $texto_traducido["btn-1"] ?></a>
          <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/Itinerario_Viajes.pdf"  
          download="Itinerario_Viajes.pdf"><?php echo $texto_traducido["itinerario"][1] ?></a>      
      </div>
      <br>
    <!--Seccion 3 full day-->
       <section>
<br><br>
    <h6 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra container" style="text-align: center;color:#122638" ><b>Itinerario full day</b></h6>
    <br><br>
    <center><h2 style='color:#122638'><?php echo $texto_traducido["btn-1"] ?> 1 <i class="far fa-calendar-alt"></i></h2></center><br>
<br>
  <table class="table table-striped col-10 mx-auto text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Hora</th>
        <th scope="col">Actividad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>9:00 </td>
        <td>Salida del terminal terrestre amantes de Sumpa</td>
      </tr>
      <tr>
        <td>10:00</td>
        <td>Llegada al santuario católico maría blanca estrella del mar</td>
      </tr>
      <tr>
        <td>10:05</td>
        <td><?php echo $texto_traducido["itinerario"][11] ?></td>
      </tr>
      <tr>
        <td>11:30</td>
        <td><?php echo $texto_traducido["itinerario"][19] ?></td>
      </tr>
      <tr>
        <td>11:45</td>
        <td><?php echo $texto_traducido["itinerario"][20] ?></td>
      </tr>
      <tr>
        <td>12:00</td>
        <td><?php echo $texto_traducido["itinerario"][22] ?></td>
      </tr>
      <tr>
        <td>13:00</td>
        <td><?php echo $texto_traducido["itinerario"][23] ?></td>
      </tr>
      <tr>
        <td>16:00</td>
        <td><?php echo $texto_traducido["itinerario"][24] ?></td>
      </tr>
      <tr>
        <td>16:30</td>
        <td><?php echo $texto_traducido["itinerario"][20] ?></td>
      </tr>
      <tr>
        <td>17:30</td>
        <td><?php echo $texto_traducido["itinerario"][21] ?></td>
      </tr>
      <tr>
        <td>19:00</td>
        <td><?php echo $texto_traducido["itinerario"][22] ?></td>
      </tr>
    </tbody>
  </table>
</section>   
      <br><br>
    <div class="botonesPdf ">
          <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/Itinerario_Full_Day.pdf" 
          target="_blank"><?php echo $texto_traducido["btn-1"] ?></a>
          <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3"  href="pdf/Itinerario_Full_Day.pdf"  
          download="Itinerario_Full_Day.pdf"><?php echo $texto_traducido["btn-d"] ?></a>      
    </div>
<br><br><br>
<?php include("reserva.php")?>
<br>
      <!-- Page Footer-->
      <?php include("footer.php") ?>