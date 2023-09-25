<?php include("./template/headerpviaje.php")?>
  <div class="page">      
    <section class="section ">
    <div style="text-align: center;" class="banner-tiempo">
      <div>
        <br><br>
        <h3 style="text-align: center;" class="titulo-llegar"><?php echo $texto_traducido["plani"][0] ?></h3>
      </div>
    </div>
    </section>
    <section class="boto">
    <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br><br><br><br>
    <section class="planifica">
      <div class="imgaling111">
        <div class="pViaje" style="text-align: center;">
          <a class="cont" href="#aerolineas"><i class="fa-solid fa-plane"></i></a>
          <br>
          <a style="text-decoration: none;" class="cont1" href="#aerolineas"><?php echo $texto_traducido["plani"][0] ?></a>
        </div>
        <div class="pViaje" style="text-align: center;">
          <a class="cont" href="#comoMoverse"><i class="fa-solid fa-car"></i></a>
          <br>
          <a style="text-decoration: none;" class="cont1" href="#comoMoverse"><?php echo $texto_traducido["plani"][1] ?></a>
        </div>
        <div class="pViaje" style="text-align: center;">
          <a class="cont" href="#informacion"><i class="fa-sharp fa-solid fa-circle-info"></i></a>
          <br>
          <a style="text-decoration: none;" class="cont1" href="#informacion"><?php echo $texto_traducido["plani"][2] ?></a>
        </div>
      </div>
    </section>


    <div id="aerolineas"></div>
    <br><br><br><br>
      <section>
        <br><br>
        <h3 class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["plani"][0] ?></b></h3>
        <br>
        <p class="paAe" style="text-align: justify; font-size: 17px;"><?php echo $texto_traducido["plani"][3] ?></p>
        <br><br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["plani"][4] ?></b></h1>
        <br>
        <div class="container-card">
          <div class="card">
            <div class="contenido-card">
                <h3><b>Avianca</b></h3>
                <p>
                  <b><?php echo $texto_traducido["plani"][5] ?> </b><br>
                  <a href="https://www.avianca.com" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                  <b><?php echo $texto_traducido["plani"][7] ?> </b>1-800-003434<br>
                  <b>WhatsApp: </b>+593 (9)68555555<br>
                  <b><?php echo $texto_traducido["plani"][8] ?> </b>+593 (2) 3978216<br>
                  <b><?php echo $texto_traducido["plani"][9] ?> </b>Junín 440 y Córdova<br> 
                </p>
            </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>American Airlines</b></h3>
                  <p>
                    <b><?php echo $texto_traducido["plani"][5] ?> </b><br>
                    <a href="https://www.aa.com" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][7] ?></b> +539 (4) 2598800<br>
                    <b><?php echo $texto_traducido["plani"][8] ?></b> +593 (4) 2169253 <br>
                    <b><?php echo $texto_traducido["plani"][8] ?> </b> +593 (4) 6017439<br>
                    <b><?php echo $texto_traducido["plani"][9] ?></b> Centro comercial<br>
                    Policentro, Cdla. Kennedy <br>
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>KLM</b></h3>
                  <p>
                    <b><?php echo $texto_traducido["plani"][5] ?> </b><br>
                    <a href="https://www.klm.com.ec" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][7] ?></b> 1-800-000944<br>
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
                    <b><?php echo $texto_traducido["plani"][5] ?> </b><br>
                    <a href="https://www.latamairlines.com" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][7] ?> </b>1-800-000527<br>
                    <b><?php echo $texto_traducido["plani"][9] ?> </b>Mall del Sol, Planta<br>
                  </p>
              </div>
          </div>
      </div>
      </section>
      
      <div id="comoMoverse"></div>

      <section>
        <br><br><br><br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["plani"][10] ?></b></h1>
        <br>
        <div class="container-card">
          <div class="card">
            <div class="contenido-card">
                <h3><b><?php echo $texto_traducido["plani"][11] ?></b></h3>
                <h4><b>Cooperativa CLP</b></h4>
                <p>
                <b><?php echo $texto_traducido["plani"][12] ?> </b>- $4,90<br>
                <b><?php echo $texto_traducido["plani"][13] ?> </b>- $5,00.<br>
                </p>
            </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b><?php echo $texto_traducido["plani"][14] ?></b></h3>
                  <h4><b>Cooperativa para la zona norte - Manglaralto, CITUP, Reales Tamarindo.</b></h4>
                  <p>
                  <b><?php echo $texto_traducido["plani"][15] ?> </b>$2,00<br>
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b><?php echo $texto_traducido["plani"][14] ?></b></h3>
                  <h4><b>Cooperativa Intercantonales Trunsa – Horizonte – Trancisa – Salicel, Mar Azul</b></h4>
                  <p>
                  <b>Pacifico</b><br>
                  </p>
              </div>
          </div>
        </div>
      </section>

      <section>
        <br><br><br><br>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["plani"][16] ?></b></h1>
        <br>

        <div class="container-card">
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Budget</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["plani"][17] ?> </b><br>
                    <a href="https://www.budget.com.ec" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][9] ?> </b>(02) 382-2340 <br>
                    <b><?php echo $texto_traducido["plani"][18] ?> </b>1 Día desde $50
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Rent cars</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["plani"][17] ?> </b><br>
                    <a href="https://www.rentcars.com" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][9] ?> </b>0997634610<br>
                    <b><?php echo $texto_traducido["plani"][18] ?> </b>1 Día desde $37
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Hertz</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["plani"][17] ?> </b><br>
                    <a href="https://www.hertz.com" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][9] ?> </b>+593-2-3829559 <br>
                    <b><?php echo $texto_traducido["plani"][18] ?> </b>1 Día desde $50
                  </p>
              </div>
          </div>
        </div>
        <div class="container-card">
          <div class="card">
              <div class="contenido-card">
                  <h3><b>Europcar</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["plani"][17] ?> </b><br>
                    <a href="https://www.europcar.es" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][9] ?> </b>911 505 000 <br>
                    <b><?php echo $texto_traducido["plani"][18] ?> </b>1 Día desde $37
                  </p>
              </div>
          </div>
          <div class="card">
              <div class="contenido-card">
                  <h3><b>kayak</b></h3>
                  <p></p>
                  <p>
                    <b><?php echo $texto_traducido["plani"][17] ?> </b><br>
                    <a href="https://www.kayak.com.ec" target="_blank"><?php echo $texto_traducido["plani"][6] ?></a><br>
                    <b><?php echo $texto_traducido["plani"][9] ?> </b>+593 99 934 3898<br>
                    <b>info@kayakecuador.net</b><br>
                    <b><?php echo $texto_traducido["plani"][18] ?> </b>1 Día desde $40
                  </p>
              </div>
          </div>
        </div>
      </section>

    <br><br><br><br>

    <section>
      <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["plani"][1] ?></b></h1><br>
      <p class="paAe" style="text-align: justify; font-size: 17px;">
      <?php echo $texto_traducido["plani"][19] ?>
      </p>
      <br>
      <table class="table-fill">
        <thead class="thead-dark">
          <tr>
            <th style="text-left"><?php echo $texto_traducido["plani"][20] ?></th>
            <th style="text-left"><?php echo $texto_traducido["plani"][21] ?></th>
            <th style="text-left"><?php echo $texto_traducido["plani"][22] ?></th>
          </tr>
        </thead>
        <tbody class="table-hover">
        <tr>
            <td class="text-left">Azuay</td>
            <td class="text-left">324.5 Km</td>
            <td class="text-left">5 h 2 min</td>
          </tr>
          <tr>
            <td class="text-left">El Oro</td>
            <td class="text-left">310.0 Km</td>
            <td class="text-left">4 h 46 min</td>
          </tr>
          <tr>
            <td class="text-left">Esmeralda</td>
            <td class="text-left">491.2 Km</td>
            <td class="text-left">7 h 11 min</td>
          </tr>
          <tr>
            <td class="text-left">Galápagos</td>
            <td class="text-left">1091.1 Km</td>
            <td class="text-left">12 h 27 min</td>
          </tr>
          <tr>
            <td class="text-left">Guayas</td>
            <td class="text-left">156.4 Km</td>
            <td class="text-left">2 h 22 min</td>
          </tr>
          <tr>
            <td class="text-left">Imbabura</td>
            <td class="text-left">662.1 Km</td>
            <td class="text-left">10 h 7 min</td>
          </tr>
          <tr>
            <td class="text-left">Los Ríos</td>
            <td class="text-left">304.2 Km</td>
            <td class="text-left">4 h 21 min</td>
          </tr>
          <tr>
            <td class="text-left">Manabí</td>
            <td class="text-left">210.6 Km</td>
            <td class="text-left">3 h 50 min</td>
          </tr>
          <tr>
            <td class="text-left">Pichincha</td>
            <td class="text-left">555.6 Km</td>
            <td class="text-left">8 h 35 min</td>
          </tr>
          <tr>
            <td class="text-left">Sucumbíos</td>
            <td class="text-left">820.2Km</td>
            <td class="text-left">14 h 11 min</td>
          </tr>
          <tr>
            <td class="text-left">Tungurahua</td>
            <td class="text-left">400.7 Km</td>
            <td class="text-left">6 h 38 min</td>
          </tr>
          <tr>
            <td class="text-left">Zamora - Chinchipe</td>
            <td class="text-left">585.0 Km</td>
            <td class="text-left">9 h 24 min</td>
          </tr>
        </tbody>
      </table>

      <div id="informacion"></div>
      <br><br><br><br><br>

      <section>
        <h1  class="text-spacing-25 font-weight-normal title-opacity-9"><b><?php echo $texto_traducido["plani"][2] ?></b></h1>
        <br>
        <p class="paAe" style="text-align: justify; font-size: 17px;">
        <?php echo $texto_traducido["plani"][23] ?></p>
        <br>

        <div class="container-card">
          <div class="card">
            <div class="contenido-card"><br>
                <i class="fa-solid fa-suitcase-medical loHosp"></i>
                <h3><b><?php echo $texto_traducido["plani"][24] ?> Dr. Liborio Panchana Sotomayor</b></h3>
                <p>
                  <b><?php echo $texto_traducido["plani"][33] ?> </b>Q49W+FRP, Santa Elena<br>
                  <b><?php echo $texto_traducido["plani"][34] ?> </b>24 horas
                </p>
            </div>
          </div>
          
          <div class="card">
            <div class="contenido-card"><br>
                <i class="fa-solid fa-suitcase-medical loHosp"></i>
                <h3><b><?php echo $texto_traducido["plani"][24] ?> de Salinas "Dr. José Garcés Rodríguez"</b></h3>
                <p>
                  <b><?php echo $texto_traducido["plani"][33] ?> </b>Q2MV+X6Q, Salinas<br>
                  <b><?php echo $texto_traducido["plani"][34] ?> </b>24 horas
                </p>
            </div>
          </div>
          
          <div class="card">
            <div class="contenido-card"><br>
                <i class="fa-solid fa-house-medical-circle-check loHosp"></i>
                <h3><b><?php echo $texto_traducido["plani"][25] ?></b></h3>
                <p>
                <?php echo $texto_traducido["plani"][25] ?> Cruz Azul<br>
                <?php echo $texto_traducido["plani"][25] ?> Sana Sana<br>
                <?php echo $texto_traducido["plani"][25] ?> 911<br>
                <?php echo $texto_traducido["plani"][25] ?> Santa Martha<br>
                <?php echo $texto_traducido["plani"][25] ?> Comunitaria
                </p>
            </div>
          </div>
        </div>
        <div class="container-card">
          <div class="card">
            <div class="contenido-card"><br>
                <i style="color: yellow;" class="fa-solid fa-cash-register loHosp"></i>
                <h3><b><?php echo $texto_traducido["plani"][26] ?></b></h3>
                <p>
                  Banco Guayaquil<br>
                  Banco Pichincha<br>
                  Banco Pacifico<br>
                  Banco Bolivariano<br>
                  Cooperativa Jep<br>
                  Cooperativa Policía nacional
                </p>
            </div>
          </div>
          <div class="card">
            <div class="contenido-card"><br>
              <i style="color: yellow;" class="fa-solid fa-taxi loHosp"></i>
              <h3><b><?php echo $texto_traducido["plani"][27] ?></b></h3>
              <div class="table-responsive">
              <table class="table">
                <thead class="bg-primary text-white border-0">
                  <tr class="table-header">
                    <th class="text-center fw-bold"><?php echo $texto_traducido["plani"][28] ?></th>
                    <th class="text-center fw-bold"><?php echo $texto_traducido["plani"][29] ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Taxi peninsulares S.A</td>
                    <td>(+593) 4 - 294 - 1962</td>
                  </tr>
                  <tr>
                    <td>Taxis Virgen del Cisne</td>
                    <td>(+593) 96 - 830 - 2708</td>
                  </tr>
                  <tr>
                    <td>Radio Taxi Peninsular Canal 33</td>
                    <td>(+593) 99 – 967 - 4485</td>
                  </tr>
                  <tr>
                    <td>Taxi 23 de Julio</td>
                    <td>(+593) 4-278 - 4903</td>
                  </tr>
                </tbody>
              </table>

              </div>
            </div>
          </div>
        </div>

        <div class="container-card">
          <div class="card">
            <div class="contenido-card"><br>
                <i style="color: blue;" class="fa-solid fa-building-shield loHosp"></i>
                <h3><b><?php echo $texto_traducido["plani"][30] ?></b></h3>
                <p>
                <b><?php echo $texto_traducido["plani"][33] ?> </b>Q5C2+8WC, Vía a la Costa, Santa Elena<br>
                <b><?php echo $texto_traducido["plani"][34] ?> </b>24 horas
                </p>
            </div>
          </div>
          <div class="card">
            <div class="contenido-card"><br>
                <i style="color: orange;" class="fas fa-shopping-cart loHosp"></i>
                <h3><b><?php echo $texto_traducido["plani"][32] ?></b></h3>
                <p>
                  Tia S.A<br>
                  Tuti<br>
                  Supermaxi Salinas<br>
                  Super Akì<br>
                  Paseo Shopping Centro comercial
                </p>
            </div>
          </div>
        </div>
      </section>

      <style>
        .table-header {
          background-color: #7a7a7a;
          color: white;
        }
      </style>
    <br>
  </div>
  <!-- Page Footer-->
  <?php include("./template/footer.php") ?>