<?php include("head.php"); ?>

<div class="page">
    <div style="text-align: center;" class="banner-tiempo">
        <div>
            <br><br>
            <h3 style="text-align: center;" class="titulo-llegar"><?php echo $texto_traducido["tiempo"][0] ?></h3>
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

    <br><br><br><br><br>

    <div style="padding: 45px;" class="tituloPrincipal wow fadeInRight bloqueo ">

        <h2><?php echo $texto_traducido["tiempo"][1] ?></h2>
        <div id="ww_d7b5af8b5b696" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl11086"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_santa_elena_province/30_days/" id="ww_d7b5af8b5b696_u" target="_blank">Weather forecast Santa Elena Province 30 days</a></div>
        <script async src="https://app1.weatherwidget.org/js/?id=ww_d7b5af8b5b696"></script>


    </div>




    <div style="padding: 45px;" class="bloqueo">

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/anconcito/0155_verano.png" id="como moverse">
            <h2><?php echo $texto_traducido["tiempo"][2] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["tiempo"][3] ?></p>
        </div>
    </div>
    <section>
        <table class="table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][4] ?></th>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][5] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["tiempo"][6] ?></td>
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
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/anconcito/0156_invierno.png" id="como moverse">
            <h2><?php echo $texto_traducido["tiempo"][7] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1">
                <?php echo $texto_traducido["tiempo"][8] ?></p>
        </div>
    </div>


    <section>
        <table class=" table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][4] ?></th>
                    <th scope="col"><?php echo $texto_traducido["tiempo"][5] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["tiempo"][9] ?></td>
                    <td>26 °C</td>
                </tr>

            </tbody>
        </table>
    </section>
    <br> <br>
    <br> <br>
    <br> <br>

    <!-- Page Footer-->

</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php");  ?>