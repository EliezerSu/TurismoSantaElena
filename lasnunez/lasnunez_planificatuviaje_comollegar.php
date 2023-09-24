  <?php include("head.php")?>
  <div class="page">      
    <section class="section ">
      <div>
      <img src="imagenes/las_nunez/0453_comollegar.png" alt="" class="imageP"/> 
      </div>
    </section>
    <section class="boto">
    <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br><br><br><br>
    <section class="planifica">
      <div class="imgaling111">
        <div class="pViaje">
          <a class="cont" href="#aerolineas"><i class="fa-solid fa-plane"></i></a>
          <br>
          <a class="cont1" href="#aerolineas"><?php echo $texto_traducido["routes"][2]?></a>
        </div>
        <div class="pViaje">
          <a class="cont" href="#comoMoverse"><i class="fa-solid fa-car"></i></a>
          <br>
          <a class="cont1" href="#comoMoverse"><?php echo $texto_traducido["planyourtrip"][0]?></a>
        </div>
        <div class="pViaje">
          <a class="cont" href="#informacion"><i class="fa-sharp fa-solid fa-circle-info"></i></a>
          <br>
          <a class="cont1" href="#informacion"><?php echo $texto_traducido["planyourtrip"][1]?></a>
        </div>
      </div>
    </section>
    <div id="aerolineas"></div>
    <br><br><br><br>
      <section>
        <br><br>
        <h3 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["routes"][2]?></b></h3>
        <br>
        <p class="paAe" style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["planyourtrip"]["subtitle-1"]?> <!-- Las vías que conducen a la parroquia Manglaralto se encuentran en buen estado, las mismas que permiten la facilidad del ingreso a la comuna Las Núñez, el punto de partida puede hacerlo desde el terminal terrestre regional Sumpa donde las cooperativas de transporte son, Citud, 2 De Noviembre, Trans Manglaralto, pueden dejar a los turistas en la vía Manglaralto - Puerto López, el tiempo aproximado es de una hora con veintitrés minutos. --></p>
        <br><br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["planyourtrip"][2]?></b></h1>
        <br>
        <div class="container-card">
          <div class="card">
            <div class="contenido-card">
                <h3><b>Avianca</b></h3>
                <p>
                  <b><?php echo $texto_traducido["planyourtrip"][4]?>: </b><br>
                  <a href="https://www.avianca.com" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                  <b><?php echo $texto_traducido["planyourtrip"][6]?>: </b>1800 00 3434<br>
                  <b>WhatsApp: </b>+593 (9) 68555555<br>
                  <b><?php echo $texto_traducido["planyourtrip"][7]?>: </b>+593 (2) 3978216<br>
                  <b><?php echo $texto_traducido["planyourtrip"][8]?>: </b>Junín 440 y Córdova<br> 
                </p>
            </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>American Airlines</b></h3>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][4]?>: </b><br>
                    <a href="https://www.aa.com" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][6]?>: </b>1800-633-3711<br>
                    <b><?php echo $texto_traducido["planyourtrip"][7]?>:</b> +593 (4) 2169253 <br>
                    <b><?php echo $texto_traducido["planyourtrip"][8]?>:</b> Centro comercial<br>
                    Policentro, Cdla. Kennedy <br>
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>KLM</b></h3>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][4]?>: </b><br>
                    <a href="https://www.klm.com.ec" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][6]?>: </b>+593 18 000 00 944<br>
                    <b><?php echo $texto_traducido["planyourtrip"][9]?>:</b> 1-800-000944<br>
                    <b>WhatsApp:</b> +31 206490787 <br>
                  </p>
              </div>
          </div>
      </div>
      <div class="container-card">
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Latam</b></h3>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][6]?>: </b>1-800-000527<br>
                    <b><?php echo $texto_traducido["planyourtrip"][4]?>: </b><br>
                    <a href="https://www.latamairlines.com" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Equair</b></h3>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][6]?>: </b>1800-equair – 0963871680<br>
                    <b><?php echo $texto_traducido["planyourtrip"][4]?>: </b><br>
                    <a href="https://www.equair.com" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                  </p>
              </div>
          </div>
      </div>
      </section>
      
      <section>
        <br><br><br><br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["planyourtrip"][3]?></b></h1>
        <br>

        <div class="container-card">
          <div class="card">
            <div class="contenido-card">
                <h3><b>Terminal de Guayaquil cooperativa CLP</b></h3>
                <p>
                <b>Guayaquil a Montañita: </b>Pasaje - $6,25<br>
                <b>Montañita a Guayaquil: </b>Pasaje - $6,00.<br>
                </p>
            </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Terminal de Santa Elena cooperativa Manglaralto</b></h3>
                  <p>
                  <b><?php echo $texto_traducido["planyourtrip"][15]?>: </b>$2,25<br>
                  <b><?php echo $texto_traducido["planyourtrip"][14]?>:</b><br>1 h 30 m <?php echo $texto_traducido["planyourtrip"][10]?>.<br>
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Budget</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][13]?>: </b><br>
                    <a href="https://www.budget.com.ec" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][11]?>: </b>(02) 382-2340 <br>
                    <b><?php echo $texto_traducido["planyourtrip"][12]?>: </b>1 Día desde $50
                    <!-- <b>Económico- <?php echo $texto_traducido["planyourtrip"][12]?>: </b>$26/día <br>
                    <b>SUV superior – <?php echo $texto_traducido["planyourtrip"][12]?>: </b>$100/día <br>
                    <b>SUV tamaño estándar- <?php echo $texto_traducido["planyourtrip"][12]?>: </b>$25/día <br>
                    <b>SUV mediano – <?php echo $texto_traducido["planyourtrip"][12]?>: </b>$52/día <br>
                    <b>SUV compacto – <?php echo $texto_traducido["planyourtrip"][12]?>: </b>$56/día -->
                  </p>
              </div>
          </div>
        </div>
        <div class="container-card">
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Rent cars</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][13]?>: </b><br>
                    <a href="https://www.rentcars.com" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][12]?>: </b>1 Día desde $37
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Hertz</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][13]?>: </b><br>
                    <a href="https://www.hertz.com" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][11]?>: </b>+593-2-3829559 <br>
                    <b><?php echo $texto_traducido["planyourtrip"][12]?>: </b>1 Día desde $50
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Europcar</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][13]?>: </b><br>
                    <a href="https://www.europcar.es" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][11]?>: </b>911 505 000 <br>
                    <b><?php echo $texto_traducido["planyourtrip"][12]?>: </b>1 Día desde $37
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>kayak</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["planyourtrip"][13]?>: </b><br>
                    <a href="https://www.kayak.com.ec" target="_blank"><?php echo $texto_traducido["planyourtrip"][5]?></a><br>
                    <b><?php echo $texto_traducido["planyourtrip"][12]?>: </b>1 Día desde $40
                  </p>
              </div>
          </div>
        </div>
      </section>
      <div id="comoMoverse"></div>
    <br><br><br><br>

    <section>
      <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["planyourtrip"][0]?></b></h1><br>
      <p class="paAe" style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["planyourtrip"]["subtitle-2"]?>
      </p>
      <br>
      <table class="table-fill">
        <thead class="thead-dark">
          <tr>
            <th style="text-left"><?php echo $texto_traducido["planyourtrip"][16]?></th>
            <th style="text-left"><?php echo $texto_traducido["planyourtrip"][17]?></th>
            <th style="text-left"><?php echo $texto_traducido["planyourtrip"][17]?></th>
          </tr>
        </thead>
        <tbody class="table-hover">
        <tr>
            <td class="text-left">Cuenca</td>
            <td class="text-left">380 Km</td>
            <td class="text-left">6 h 13 min</td>
          </tr>
          <tr>
            <td class="text-left">Machala</td>
            <td class="text-left">367 Km</td>
            <td class="text-left">6 h 13 min</td>
          </tr>
          <tr>
            <td class="text-left">Esmeralda</td>
            <td class="text-left">507 Km</td>
            <td class="text-left">8 h 14 min</td>
          </tr>
          <tr>
            <td class="text-left">Guayaquil</td>
            <td class="text-left">186 Km</td>
            <td class="text-left">2 h 50 min</td>
          </tr>
          <tr>
            <td class="text-left">Babahoyo</td>
            <td class="text-left">257 Km</td>
            <td class="text-left">4 h 18 min</td>
          </tr>
          <tr>
            <td class="text-left">Portoviejo</td>
            <td class="text-left">141 Km</td>
            <td class="text-left">2 h 39 min</td>
          </tr>
          <tr>
            <td class="text-left">Quito</td>
            <td class="text-left">518 Km</td>
            <td class="text-left">8 h 48 min</td>
          </tr>
        </tbody>
      </table>

      <div id="informacion"></div>
      <br><br><br><br><br>

      <section>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["planyourtrip"][1]?></b></h1>
        <br>
        <p class="paAe" style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["planyourtrip"]["subtitle-3"]?>
        </p>
        <br>

        <div class="container-card">
          <div class="card">
            <div class="contenido-card"><br>
                <i class="fa-solid fa-suitcase-medical loHosp"></i>
                <h3><b>Hospital de Manglaralto</b></h3>
                <p>
                <b><?php echo $texto_traducido["planyourtrip"][19]?>: </b>47W4+G29, E15, Montañita <br>
                <b><?php echo $texto_traducido["planyourtrip"][20]?>: </b>(04) 290-1192 <br>
                <b><?php echo $texto_traducido["planyourtrip"][21]?>: </b>24 horas 
                </p><br>
                <i class="fa-solid fa-house-medical-circle-check loHosp"></i>
                <h3><b><?php echo $texto_traducido["planyourtrip"][23]?></b></h3>
                <p>
                <?php echo $texto_traducido["planyourtrip"][25]?> Hiperfarma - Olón <br>
                <?php echo $texto_traducido["planyourtrip"][25]?> Christian <br>
                <?php echo $texto_traducido["planyourtrip"][25]?> comunitaria 
                </p>
            </div>
          </div>
          <div class="card">
            <div class="contenido-card"><br>
                <i class="fa-solid fa-cash-register loHosp"></i>
                <h3><b><?php echo $texto_traducido["planyourtrip"][22]?></b></h3>
                <p>
                <?php echo $texto_traducido["planyourtrip"][26]?> Guayaquil <br>
                <?php echo $texto_traducido["planyourtrip"][26]?> Pichincha <br>
                <?php echo $texto_traducido["planyourtrip"][26]?> Bolivariano 
                </p>
            </div>
          </div>
          <div class="card">
            <div class="contenido-card"><br>
                <i class="fa-solid fa-building-shield loHosp"></i>
                <h3><b><?php echo $texto_traducido["planyourtrip"][23]?></b></h3>
                <p>
                <b><?php echo $texto_traducido["planyourtrip"][19]?>: </b>5792+546, Montañita <br>
                <b><?php echo $texto_traducido["planyourtrip"][21]?>: </b>24 horas
                </p><br>
                <i class="fas fa-shopping-cart loHosp"></i>
                <h3><b><?php echo $texto_traducido["planyourtrip"][23]?></b></h3>
                <p>
                  Hiper market center Aki <br>
                  Minimarket Nayelita
                </p>
            </div>
          </div>
        </div>
      </section>
    <br>
  </div>
  <!-- Page Footer-->
  <?php include("footer.php") ?>