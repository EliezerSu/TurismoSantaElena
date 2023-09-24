<?php include("head_la_entrada.php"); ?>



<div class="card text-bg-dark banner " style=" margin-bottom:35px; height: 70vh;">
    <img src="imagenes/la_entrada/principal/0692__acerca_de_2.jpg" style="width: 100%; height: 70vh;; text-shadow: 2px 2px 2px #000000" class="card-img" alt="...">
    <div class="card-img-overlay">

        <p class="card-text texto__banner2 text-shadow  text-center text-responsive"><?php echo $texto_traducido["folletos"][0] ?></p>

    </div>
</div>
<a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>


<section>
    <div class="tabs-custom tabs-horizontal tabs-line mx-auto w-50" id="tabs-4">
        <ul style="border-bottom: 3px solid #01b3a7; ">
            <li>
                <h2 style="text-align: center;color:#122638" class="como__llegar__entrada mx-auto"><?php echo $texto_traducido["folletos"][1] ?></h2>
            </li>
        </ul>
    </div>
    <p class="texto__llegar clead mb-4 col-8 mx-auto" style="font-size: 20px; ">
        <?php echo $texto_traducido["folletos"][2] ?>
    </p>
</section>
<section>
    <br><br>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra" style="text-align: center;color:#122638"><b><?php echo $texto_traducido["folletos"][3] ?></b></h1>
    <br>
    <div class="d-flex justify-content-center align-items-center col-10 mx-auto pt-4">
        <img src="imagenes/la_entrada/pdf/0664__atractivos_naturales_entrada_y_rinconada.png" class="folleto img-fluid w-75 h-25" alt="" style="border-radius: 25px;">
    </div>
    <br>
    <div class="d-flex justify-content-center align-items-center col-10 mx-auto">
        <img src="imagenes/la_entrada/pdf/0665__atractivos_naturales_entrada_y_rinconada.png" class="folleto img-fluid w-75 h-50" alt="" style="width: 80%; border-radius: 25px;">
    </div>
    <br><br>
    <div class="botonesPdf ">
        <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3" href="pdf/Atractivos_Naturales_La_Entrada_y_La_Rinconada.pdf" target="_blank"><?php echo $texto_traducido["folletos"][4] ?></a>
        <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3" href="pdf/Atractivos_Naturales_La_Entrada_y_La_Rinconada.pdf" download="La Entrada y Rinconada.pdf"><?php echo $texto_traducido["folletos"][5] ?></a>
    </div>
</section>

<section>
    <br><br><br><br><br>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra" style="text-align: center;color:#122638"><b><?php echo $texto_traducido["folletos"][6] ?></b></h1>
    <br>
    <div class="d-flex justify-content-center align-items-center col-10 mx-auto pt-4">
        <img src="imagenes/la_entrada/pdf/0666__cultura_entrada_y_rinconada.png" class="img-fluid w-75 h-50" alt="" style="width: 80%; border-radius: 25px;">
    </div>
    <br>
    <div class="d-flex justify-content-center align-items-center col-10 mx-auto">
        <img src="imagenes/la_entrada/pdf/0667__cultura_entrada_y_rinconada_2.png" class="img-fluid w-75 h-50" alt="" style="width: 80%; border-radius: 25px;">
    </div>
    <br><br>
    <div class="botonesPdf">
        <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3" href="imagenes/la_entrada/pdf/0666__cultura_entrada_y_rinconada.png" target="_blank"><?php echo $texto_traducido["folletos"][4] ?></a>
        <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3" href="imagenes/la_entrada/pdf/0666__cultura_entrada_y_rinconada.png" download="La Entrada y Rinconada.pdf"><?php echo $texto_traducido["folletos"][5] ?></a>

    </div>
</section>

<section>
    <br><br><br><br><br>
    <h1 class="text-spacing-25 font-weight-normal title-opacity-9 text-center tamaño-letra" style="text-align: center;color:#122638"><b><?php echo $texto_traducido["folletos"][7] ?> </b></h1>
    <br>
    <div class="d-flex justify-content-center align-items-center col-10 mx-auto pt-4">
        <img src="imagenes/la_entrada/pdf/0668__gastronomia_entada_y_rinconada.png" class="img-fluid w-75 h-50" alt="" style="width: 80%; border-radius: 25px;">
    </div>
    <br>
    <div class="d-flex justify-content-center align-items-center col-10 mx-auto">
        <img src="imagenes/la_entrada/pdf/0669__gastronomia_entada_y_rinconada_2.png" class="img-fluid w-75 h-50" alt="" style="width: 80%; border-radius: 25px;">
    </div>
    <br><br>
    <div class="botonesPdf pb-4">
        <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3" href="pdf/Gastronomia_La Entada_y_Rinconada.pdf" target="_blank"><?php echo $texto_traducido["folletos"][4] ?></a>
        <a class="d-flex justify-content-center button button-black-outline button-ujarak mx-auto col-3" href="pdf/Gastronomia_La Entada_y_Rinconada.pdf" download="La Entrada y Rinconada.pdf"><?php echo $texto_traducido["folletos"][5] ?></a>

    </div>
</section>


<?php
include("footer.php");
?>