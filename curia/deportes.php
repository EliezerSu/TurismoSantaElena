<?php include("head.php"); ?>


<div class="page">
    <?php include("boton.php"); ?>
    <br>
    <section class="section section-sm bg-default">
        <div class="container">
            <h2><?php echo $texto_traducido["deportes"][0] ?></h2>
        </div>
        <h4 class="title-cards"><?php echo $texto_traducido["deportes"][1] ?></h4>
        <div class="container-deportes">
            <p style="text-align: justify; font-size: 17px;">
                <?php echo $texto_traducido["deportes"][2] ?>
            </p>
        </div>
    </section>
    <div class="imagenes">
        <div class="galeria">
            <div class="contenedor-imagenes">
                <div class="imagen">
                    <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0515_deporteyaventura_reservayexperiencia1.jpg">
                        <img src="imagenes\curia\0515_deporteyaventura_reservayexperiencia1.jpg" alt="">
                        <div class="overlay">
                            <h2><?php echo $texto_traducido["deportes"][4] ?></h2>
                        </div>
                    </a>
                </div>
                <div class="imagen">
                    <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0516_deporteyaventura_reservayexperiencia2.jpg">
                        <img src="imagenes\curia\0516_deporteyaventura_reservayexperiencia2.jpg" alt="">
                        <div class="overlay">
                            <h2><?php echo $texto_traducido["deportes"][4] ?></h2>
                        </div>
                    </a>
                </div>
                <div class="imagen">
                    <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0517_deporteyaventura_reservayexperiencia3.jpg">
                        <img src="imagenes\curia\0517_deporteyaventura_reservayexperiencia3.jpg" alt="">
                        <div class="overlay">
                            <h2><?php echo $texto_traducido["deportes"][4] ?></h2>
                        </div>
                    </a>
                </div>
                <div class="imagen">
                    <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0518_deporteyaventura_reservaexperiencia4.jpg">
                        <img src="imagenes\curia\0518_deporteyaventura_reservaexperiencia4.jpg" alt="">
                        <div class="overlay">
                            <h2><?php echo $texto_traducido["deportes"][4] ?></h2>
                        </div>
                    </a>
                </div>
                <div class="imagen">
                    <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0519_deporteyaventura_reservayexperiencia5.jpg">
                        <img src="imagenes\curia\0519_deporteyaventura_reservayexperiencia5.jpg" alt="">
                        <div class="overlay">
                            <h2><?php echo $texto_traducido["deportes"][4] ?></h2>
                        </div>
                    </a>
                </div>
                <div class="imagen">
                    <a href="../PaginaComentarios.php?img=curia/imagenes/curia/0550_Yoga_curia.jpg">
                        <img src="imagenes\curia\0550_Yoga_curia.jpg" alt="">
                        <div class="overlay">
                            <h2><?php echo $texto_traducido["deportes"][5] ?></h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .container-deportes {
        width: 80%;
        margin: 0 auto;
    }

    @media screen and (max-width: 700px) {
        .container {
            padding-top: 1.5rem;
        }
    }
</style>

<br> <br> <br>



<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php"); ?>