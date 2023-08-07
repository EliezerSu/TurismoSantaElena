<section class="section section-sm bg-default">
          <div class="container">
            <h3>¿Qué visitar en Curía?</h3>
            <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInLeft">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="CuriaQueVisitar.php"><img src="imagenes/curia/0505_playaturistica_5.jpg" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="CuriaQueVisitar.php"> <b>Playa turística Curía</b> </a></h5>
                        
                        <p class="product-big-text texto__quevisitar">Esta hermosa playa tiene una longitud de 1.300 metros de extensión, y 70 metros de ancho, su arena es fina y suave de color gris claro.</p><a class="button button-black-outline button-ujarak" href="CuriaQueVisitar.php#playa">Leer más</a>
                        <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              
              <div class="col-sm-6 col-md-12 wow fadeInLeft">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="CuriaQueVisitar.php"><img src="imagenes\curia\0506_IglesiaMariaInmaculada_turistica.jpg" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="CuriaQueVisitar.php"> <b>Iglesia María Inmaculada</b> </a></h5>
                      
                        <p class="product-big-text texto__quevisitar">La iglesia María Inmaculada es un patrimonio cultural que cuenta con pocos años de creación debido a que se construyó el año 2016.</p><a class="button button-black-outline button-ujarak mx-auto" href="CuriaQueVisitar.php#iglesia">Leer más</a>
                        <div class="product-big-price-wrap"><span class="product-big-price"></span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              
            </div>
          </div>
</section>
  

<style>
.galeria01{
    font-family: "Montserrat", sans-serif, Arial, sans-serif;
    
}

.galeria01 h3{
    text-align: center;
    margin:20px 0 15px 0;
    
}

.slider1{
  width: 500px;
  height: 500px;
  overflow: hidden;
  margin: 10px 0;
  padding: 50px 0;
  position: relative;
}


.crop{
  position:absolute;
  left: -100%;
  right: -100%;
  top: -100%;
  bottom: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
}

.linea01{
    margin-bottom: 40px;
}

.contenedor-imagenes01{
    display:flex;
    width: 85%;
    margin: auto;
    justify-content: space-around;
    flex-wrap: wrap;
    border-radius:3px;
}

.contenedor-imagenes01 .imagen01{
    width: 32%;
    position: relative;
    height:250px;
    margin-bottom:5px;
    box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .75)
}
.imagen01 img{
    width: 100%;
    height:100%;
    object-fit: cover;
}

.overlay01{
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.573);
    width: 100%;
    height: 0;
    overflow: hidden;
    transition: .5s ease;
}

.overlay01 h2{
    color: #fff;
    font-weight: 300;
    font-size:25px;
    position: absolute;
    top: 50%;
    left:50%;
    text-align: center;
    transform: translate(-50%, -50%);
}

.imagen01:hover .overlay01{
    height:100%;
    cursor: pointer;
}

@media screen and (max-width:1000px){
    .contenedor-imagenes01{
        width: 95%;
    }
}

@media screen and (max-width:700px){
    .contenedor-imagenes01{
        width: 90%;
    }
    .contenedor-imagenes01 .imagen01{
        width: 48%;
    }
    .slider1{
      width: 100%;
      height: 200%;
      overflow: hidden;
      margin: 10px 0;
      padding: 50px 0;
      position: relative;
    }
    .crop{
      position:absolute;
      left: -100%;
      right: -100%;
      top: -100%;
      bottom: -60%;
      margin: auto;
      min-height: 100%;
      min-width: 100%;
    }
    .text-spacing-25{
      padding-top: 100px;
    }

    .tope{
      position: absolute;
      left: -100%;
      right: -100%;
      top: -100%;
      bottom: -80%;
      margin: auto;
      min-height: 100%;
      min-width: 100%;
    }
}

@media screen and (max-width:450px){
    h1{
        font-size:22px;
    }
    .contenedor-imagenes01{
        width: 98%;
    }
    .contenedor-imagenes01 .imagen01{
        width: 80%;
    }
}
</style>