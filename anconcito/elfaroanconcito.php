<?php include("head.php"); ?>



<div class="page">


    <section class="boto">
        <button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button>
        <script type="text/javascript">
            function back() {
                history.back();
            }
        </script>
    </section>
    <br><br>



    <div id="historia">
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="box-width-lg-470">
                            <h3>El Faro</h3>
                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"></li>


                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-7-1">
                                        <p style="font-size: 18px;text-align: justify;">Ubicado en el barrio paraíso es un sitio donde se puede llegar a observar en un giro de 360° toda la maravilla de la puntilla de
                                            Santa Elena en su sentido centro sur, este y oeste, y desde ahí decides el sector de tu refugio, y en las noches de luna se puede
                                            disfrutar del lugar con amigos de canto y guitarra.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center wow fadeInUp"><a href="../PaginaComentarios.php?img=anconcito/imagenes/anconcito/0071_el_faro.jpg">
                            <img style="width: 590px; height: 385px;;" src="imagenes/anconcito/0071_el_faro.jpg" id="el faro" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <br><br><br>


</div>

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php"); ?>