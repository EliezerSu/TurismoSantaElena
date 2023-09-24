<?php include("head.php"); ?>
<div>
    <div class="page">
        <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
                    <div class="swiper-wrapper text-left">
                    <div class="swiper-slide context-dark" data-slide-bg="imagenes/montanita/0587_reservadeexperiencias.jpg" >
                        <div class="swiper-slide-caption section-md">
                            <div class="container">
                            <div class="row">
                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold"><?php echo $texto_traducido["clima"][9] ?></span></h2>
                    
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </section>

                    </header>



<br><br><br><br><br>
        <div style="text-align: center;" class="banner-tiempo">

        <div>
            <br><br>
            <h3 style="text-align: center;" class="titulo-llegar"><?php echo $texto_traducido["header"]["subtitle-2"][3] ?></h3>
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
    <br><br><br><br>
            <h2><?php echo $texto_traducido["clima"][0] ?></h2>
            <br>
    <div style="padding: 45px;" class="bloqueo">
    <div><div id="ww_20324c6ccc584" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl11086"],"font":"Times","sl_ics":"one","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_santa_elena_province/30_days/" id="ww_20324c6ccc584_u" target="_blank">Weather Santa Elena Province 30 days</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_20324c6ccc584"></script></div>
    <br>
    <br>
    <br>
    <br> 
    <br> 
    <br> 

        <div class="tituloPrincipal wow fadeInRight">
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/montanita/0155_verano.png" id="como moverse">
            <h2><?php echo $texto_traducido["clima"][1] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1"><?php echo $texto_traducido["clima"][2] ?></p>
        </div>
    </div>
    <section>
        <table class="table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["clima"][3] ?></th>
                    <th scope="col"><?php echo $texto_traducido["clima"][4] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["clima"][5] ?></td>
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
            <img style="vertical-align:  text-left; width: 600; height: 190px;" src="imagenes/montanita/0156_invierno.png" id="como moverse">
            <h2><?php echo $texto_traducido["clima"][6] ?></h2>
        </div>
        <div class=" wow fadeInRight">
            <p style="font-size: 19px;" class="contente__font1">
            <?php echo $texto_traducido["clima"][7] ?></p>
        </div>
    </div>


    <section>
        <table class=" table table-striped col-5 mx-auto text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><?php echo $texto_traducido["clima"][3] ?></th>
                    <th scope="col"><?php echo $texto_traducido["clima"][4] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $texto_traducido["clima"][8] ?></td>
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
<?php include("footer.php");  ?>