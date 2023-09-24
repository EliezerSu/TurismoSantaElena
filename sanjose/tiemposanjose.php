<?php include("headsanjose.php");?>

<div class="page">
<div>
            
            <img src="imagenes/tiempo_sanjose.png" alt="" class="image"> 
            </div>
            <?php include("botonsanjose.php");?>
<br><br><br>

            

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/0155_verano.png" id="como moverse">
            <h2><?php echo $texto_traducido["clima"][0] ?></h2>
            <br>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["clima"][1] ?></p>
        </div>
        <br>
   
    <section>
        <table class="table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["clima"][2] ?></th>
                    <th scope="col"><?php echo $texto_traducido["clima"][3] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["clima"][4] ?></td>
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
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/0156_invierno.png" id="como moverse">
            <h2><?php echo $texto_traducido["clima"][5] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1">
            <?php echo $texto_traducido["clima"][6] ?></p>
        </div>
    </div>


    <section>
        <table class=" table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["clima"][2] ?></th>
                    <th scope="col"><?php echo $texto_traducido["clima"][3] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["clima"][7] ?></td>
                    <td>26 °C</td>
                </tr>

            </tbody>
        </table>

    </section>

    <section>
    <br><br><br>
<div>            
<h2><?php echo $texto_traducido["clima"][8] ?></h2>
            <br>
    <div style="padding: 45px;" class="bloqueo">
    <div><div id="ww_20324c6ccc584" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl11086"],"font":"Times","sl_ics":"one","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_santa_elena_province/30_days/" id="ww_20324c6ccc584_u" target="_blank">Weather Santa Elena Province 30 days</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_20324c6ccc584"></script></div>
    
    </div>

    </section>




    <br> <br>
    

    <!-- Page Footer-->

</div>
</div>

      <!-- Page Footer-->
    <?php
	    include("footersanjose.php");
	    ?>
   