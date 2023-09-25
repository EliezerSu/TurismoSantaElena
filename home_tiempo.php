<?php include("./template/headerpviaje.php"); ?>



<div class="page">




    <div style="text-align: center;" class="banner-tiempo">

        <div>
            <br><br>
            <h3 style="text-align: center;" class="titulo-llegar"><?php echo $texto_traducido["clim"][0] ?></h3>
        </div>

    </div>

    <section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br>
    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight text-center mx-auto">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/planifica_tu_viaje/0464_verano.png" id="como moverse"><br>
            <h2><?php echo $texto_traducido["clim"][1] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="padding-left: 10%; padding-right: 10%; font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["clim"][2] ?></p>
        </div>
    </div>
    <section>
        <table class="table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["clim"][3] ?></th>
                    <th scope="col"><?php echo $texto_traducido["clim"][4] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["clim"][5] ?></td>
                    <td>22 °C</td>
                </tr>

            </tbody>
        </table>
    </section>

    <br> <br>



    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight text-center mx-auto">
            <img style="vertical-align: text-left; width: 600; height: 190px;" src="imagenes/planifica_tu_viaje/0465_invierno.png" id="como moverse"><br>
            <h2><?php echo $texto_traducido["clim"][6] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="padding-left: 10%; padding-right: 10%; font-size: 19px;" class="contente__font1">
            <?php echo $texto_traducido["clim"][7] ?></p>
        </div>
    </div>


    <section>
        <table class=" table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["clim"][3] ?></th>
                    <th scope="col"><?php echo $texto_traducido["clim"][4] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["clim"][8] ?></td>
                    <td>26 °C</td>
                </tr>

            </tbody>
        </table>
    </section>
    <br><br>
    <div class="text-center">
        <div id="ww_8a00deb5f6b6f" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl11086"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}' class="mx-auto">
            Weather Data Source: <a href="https://sharpweather.com/weather_santa_elena_province/30_days/" id="ww_8a00deb5f6b6f_u" target="_blank">sharpweather.com</a>
        </div>
    </div>
    <script async src="https://app1.weatherwidget.org/js/?id=ww_8a00deb5f6b6f"></script>

    <br> <br>

    <!-- Page Footer-->

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("./template/footer.php");  ?>