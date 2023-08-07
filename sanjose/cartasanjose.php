
<!--Cartas01-->

<div >
        <section >
          <h3 class="titulocarta" style="margin-top: 60px; margin-bottom: 0; color: #162e44; " >¿Qué hacer?</h3>
            <div id="contenedor">
                
                <div class="tabla hover">
                <h2>Culturas y tradiciones</h2>
                    <img src="imagenes/sanjose/0299_culturasytradiciones.jpg" alt="" style="margin-bottom: 0;">
                    
                    <p style="font-size: 17px;">Acércate a una experiencia transformadora
                        <br><br>
                        

                    </p>
                    <a href="sanjosecultura.php" class="boton">Leer más</a>
                </div>
                <div class="tabla">
                <h2>Gastronomía</h2>
                <br>
                    <img src="imagenes/sanjose/0300_gastronomia.jpg" alt=""style="margin-bottom: 0;">
                    
                    <p style="font-size: 17px;">Deleita tus sentidos con el olor y sabor <br>
                    <br>
                    
                </p>
                    <a href="sanjosegastronomia.php" class="boton">Leer más</a>
                </div>
                <div class="tabla">
                <h2>Rutas y excursiones</h2>
               <br>
                    <img src="imagenes/sanjose/0301_rutasyexcursiones.jpg" alt=""style="margin-bottom: 0;">
                    <p style="font-size: 17px;">Activa tu tiempo libre con actividades de ocio
                    <br><br>
                    </p>
                    <a href="sanjoserutas.php" class="boton">Leer más</a>
                </div>
           
            </div>
           <style>
            .titulocarta{
    text-align: center;
    margin-top: 40px;
    margin-bottom: -60px;
    margin:20px 0 15px 0;
    
    

}

#contenedor{
    width: 90%;
    max-width:1000px;
    margin: auto;
   margin-top: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
   
    ;



}

.tabla{
    width: 25%;
    height: 530px;
    margin: auto;
    border:1px solid #ffffff;
    border-radius: 4px;
    box-shadow: 0px 0px 4px 0px  #162e44;
    padding: 23px;
    text-align: center;
    flex-grow: 1;
    background-image: linear-gradient(0deg, #162E44 7%, #162E44 51%, #ffffff 100%);
}

.tabla h3{
    font-size:15px;
    margin-bottom:60px;
    margin-top: -20px;
    margin-bottom: -10px;
    font-family: "Montserrat", sans-serif, Arial, sans-serif;
    color:  #12CD48;
}

.tabla img{
    width: 290px;
    height: 180px;
    margin-bottom:35px;
    border-color: #4dd179;
}

.tabla h2 {
  margin-top: 10px;
  font-size: 25px;
  margin-bottom: 20px;
  font-weight: bold;
}



.tabla > p{
    display: block;
    margin-bottom:20px;
    color: #ffffff;
}

.boton{
    display:inline-block;
    width: 140px;
    padding:10px;
    background: #ffffff;
    text-decoration: none;
    color: #162e44;
    border-radius: 100px;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    
}

.tabla:hover{
    background: linear-gradient(0deg, #162E44 7%, #162E44 51%, #ffffff 100%);
    color: #fdfdfd;
    transition: .5s all;
    transform: scale(1.1);
    cursor: pointer;
    
}

@media screen and (max-width: 1000px){
    .tabla{
        width: 45%;
        max-width:none;
        margin-bottom: 40px;
        flex-grow: initial;
}
    }


@media screen and (max-width: 700px){
    .tabla{
        width: 45%;
        padding:30px;
    }
    .tabla > h2{
        margin-top:40px;
    }
}

@media screen and (max-width:550px){
    .tabla{
        width: 85%;
        padding: 20px;
    }
}

            </style>
            </div>