<?php include("head.php"); ?>



<div class="page">




    <div style="text-align: center;" class="banner-tiempo">

        <div>
            <br><br>
            <h3 style="text-align: center;" class="titulo-llegar"><?php echo $texto_traducido["time"][0]?></h3>
        </div>

    </div>

    <section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>
    </section>
    <br><br><br><br>

    <div class="tituloPrincipal wow fadeInRight">
        <h2><?php echo $texto_traducido["time"][1]?></h2><br>
    </div>
    <div id="ww_9d46c36c7be83" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl11086"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_santa_elena_province/30_days/" id="ww_9d46c36c7be83_u" target="_blank">Santa Elena Province 30 days weather</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_9d46c36c7be83"></script>
    <br>

    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/las_nunez/0464_verano.png" id="como moverse">
            <h2><?php echo $texto_traducido["time"][2]?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["time"]["title-1"]?></p>
        </div>
    </div>
    <section>
        <table class="table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["time"][4]?></th>
                    <th scope="col"><?php echo $texto_traducido["time"][5]?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Junio a Noviembre</td>
                    <td>22 °C</td>
                </tr>

            </tbody>
        </table>
    </section>

    <br> <br>

    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/las_nunez/0465_invierno.png" id="como moverse">
            <h2><?php echo $texto_traducido["time"][3]?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["time"]["title-2"]?></p>
        </div>
    </div>


    <section>
        <table class=" table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["time"][4]?></th>
                    <th scope="col"><?php echo $texto_traducido["time"][5]?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Diciembre a Mayo</td>
                    <td>26 °C</td>
                </tr>

            </tbody>
        </table>
    </section>
    <br><br> <br>

    <!-- Page Footer-->

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php");  ?>