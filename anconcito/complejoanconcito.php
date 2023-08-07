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
                            <h3>Complejo deportivo</h3>
                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"></li>


                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-7-1">
                                        <p style="font-size: 18px;text-align: justify;">Unas de las obras más recientes, es un espacio netamente para hacer deportes, cuentas con canchas de uso múltiple, canchas de césped sintético, escenario con velaría, gimnasio, baños, parqueo, monumento al faro, es un sitio muy interesante para las
                                            personas de la localidad, en donde se ha convertido en un icono de los moradores, es una oportunidad para las personas que quieran recrearse.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center wow fadeInUp">
                        <a href="../PaginaComentarios.php?img=anconcito/imagenes/anconcito/0069_complejo_deportivo.jpg">
                            <img style="width: 590px; height: 385px;;" src="imagenes/anconcito/0069_complejo_deportivo.jpg" id="complejo deportivo" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <br>


</div>

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php");   ?>