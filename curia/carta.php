<section>
    <br>
    <h3 class="titulocarta" style="margin-top: 40px; margin-bottom: 0; color: #162e44; "><?php echo $texto_traducido["body"][16] ?></h3>
    <br>
    <div class="linea01"></div>
    <div id="contenedor">
        <div class="tabla">
            <img src="imagenes\curia\0517_deporteyaventura_reservayexperiencia3.jpg" alt="">
            <h3><?php echo $texto_traducido["body"][17] ?></h3>
            <p><?php echo $texto_traducido["body"][18] ?>...</p>
            <a href="deportes.php" class="boton"><?php echo $texto_traducido["body"][19] ?></a>
        </div>
        <div class="tabla">
            <img src="imagenes\curia\0498_eleccionreina_1.jpg" alt="">
            <h3><?php echo $texto_traducido["body"][20] ?></h3>
            <p><?php echo $texto_traducido["body"][21] ?>...</p>
            <a href="cultura.php" class="boton"><?php echo $texto_traducido["body"][19] ?></a>
        </div>
        <div class="tabla">
            <img src="imagenes\curia\0527_restdonvicente_reservayexperiencia.jpg" alt="">
            <h3><?php echo $texto_traducido["body"][22] ?></h3>
            <p><?php echo $texto_traducido["body"][23] ?>...</p>
            <a href="gastronomia.php" class="boton"><?php echo $texto_traducido["body"][19] ?></a>
        </div>
    </div>
    </div>
</section>
<style>
    .titulocarta {
        text-align: center;
        margin-top: 40px;
        margin-bottom: -60px;
        margin: 20px 0 15px 0;
    }

    #contenedor {
        width: 90%;
        max-width: 1000px;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .tabla {
        background-image: linear-gradient(0deg, #162E44 7%, #162E44 51%, #ffffff 100%);
        width: 20rem;
        height: 27rem;
        margin: auto;
        border: 1px solid #ffffff;
        border-radius: 4px;
        box-shadow: 0px 0px 4px 0px #162e44;
        padding: 23px;
        text-align: center;
        flex-grow: 1;
        color: #ffffff;
    }


    .tabla h3 {
        font-size: 15px;
        margin-bottom: 60px;
        margin-top: -20px;
        margin-bottom: -10px;
        font-family: "Montserrat", sans-serif, Arial, sans-serif;
        color: #0d8166;
    }

    .tabla img {
        width: 13.75rem;
        height: 11.25rem;
        margin-bottom: 2.188rem;
        border-color: #4dd179;
    }

    .tabla>h2 {
        font-size: 30px;
        margin-bottom: 20px;
    }

    .tabla>p {
        display: block;
        margin-bottom: 20px;
    }

    .boton {
        display: inline-block;
        width: 12rem;
        padding: 1rem;
        background: #ffffff;
        text-decoration: none;
        color: #162e44;
        border-radius: 10rem;
        text-align: center;
        font-size: 1rem;
        font-weight: 600;
        margin: auto;
        box-shadow: 0px 0px 4px 2px #162e44;
    }

    .tabla:hover {
        background: linear-gradient(0deg, #162E44 37%, #ccdcdc 100%);
        color: #fdfdfd;
        transition: .5s all;
        transform: scaleX(1.1) scaleY(1.1);
        cursor: pointer;

    }

    @media screen and (max-width: 1000px) {
        .tabla {
            width: 45%;
            max-width: none;
            margin-bottom: 40px;
            flex-grow: initial;
        }
    }

    @media screen and (max-width: 700px) {
        .tabla {
            width: 50%;
            padding: 30px;
        }

        .tabla>h2 {
            margin-top: 40px;
        }
    }

    @media screen and (max-width:550px) {
        .tabla {
            width: 85%;
            padding: 20px;
        }
    }
</style>