<?php include("head_la_entrada.php"); ?>



<div class="page">



    <div class="card text-bg-dark banner" style="margin-bottom:65px; height: 70vh;">
        <img src="imagenes\la_entrada\tiempo\0154_tiempo.jpg" class="card-img" alt="..." style="width: 100%; height: 70vh;">

        <div class="card-img-overlay">

            <p class="card-text texto__banner2 text-shadow display-2 text-center text-responsive"><?php echo $texto_traducido["tiempo"][0] ?></p>

        </div>
    </div>

    <section class="boto">
        <button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button>
        <script type="text/javascript">
            function back() {
                history.back();
            }
        </script>
    </section>







    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes\la_entrada\tiempo\0155_verano.png" id="como moverse">
            <h2><?php echo $texto_traducido["tiempo"][1] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["tiempo"][2] ?></p>
        </div>
    </div>
    <section>
        <table class="table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][3] ?></th>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][4] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["tiempo"][9] ?></td>
                    <td>22 °C</td>
                </tr>

            </tbody>
        </table>
    </section>

    <br> <br>
    <br> <br>
    <br> <br>



    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes\la_entrada\tiempo\0156_invierno.png" id="como moverse">
            <h2><?php echo $texto_traducido["tiempo"][5] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1">
                <?php echo $texto_traducido["tiempo"][6] ?></p>
        </div>
    </div>


    <section>
        <table class=" table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][3] ?></th>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][4] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["tiempo"][7] ?></td>
                    <td>26 °C</td>
                </tr>

            </tbody>
        </table>
    </section>
    <section class="mt-5 ">
        <div class="tituloPrincipal wow fadeInRight mb-5">
            <h1><?php echo $texto_traducido["tiempo"][8] ?></h1>
        </div>
        <div id="ww_fdbae7725ab29" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl11086"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_santa_elena_province/30_days/" id="ww_fdbae7725ab29_u" target="_blank">Weather 30 days Santa Elena Province</a></div>
        <script async src="https://app1.weatherwidget.org/js/?id=ww_fdbae7725ab29"></script>
    </section>
    <br> <br>
    <br> <br>
    <br> <br>

    <!-- Page Footer-->

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php");  ?>