<html>
  <section class="bodi">
    <img class="efecto" id="open" src="imagenes\montanita\0555_iglesia_catolica1.jpg" width="19%" height=auto>

      <div id="modal_container" class="modal-container">
          <div class="modali">
              <img src="imagenes\montanita\0555_iglesia_catolica1.jpg" alt="" width=350px>
              <br><br>
              <h5>Iglesia Católica San Isidro Labrador</h5>
              <p style = "text-align: justify; font-size: 17px;">
              La iglesia de Católica de San Isidro está ubicada en la calle 15 de mayo frente de la casa comunal, perteneciente al Arquidiócesis de Guayaquil, construida en el año 1941 y viene siendo reconstruida.              
              </p>
              <button id="close">Cerrar</button>
          </div>
      </div>

      <img class="efecto" id="open1" src="imagenes\montanita\0557_monumento_surfista.jpg" width="19%" height=auto>

      <div id="modal_container1" class="modal-container">
          <div class="modali">
              <img src="imagenes\montanita\0557_monumento_surfista.jpg" alt="" width=350px>
              <br><br>
              <h5>Monumento al Surfista</h5>
              <p style = "text-align: justify; font-size: 17px;">
              El monumento al surfista es un atractivo cultural que se encuentra ubicado camino a la punta de la comuna Montañita, sobre la carretera principal de la ruta del Spondylus, en una pequeña plazoleta construida en el año 2013.              
              </p>
              <button id="close1">Cerrar</button>
          </div>
      </div>

      <img class="efecto" id="open2" src="imagenes\montanita\0554_playa_montanita.jpg" width="19%" height=auto>

      <div id="modal_container2" class="modal-container">
          <div class="modali">
              <img src="imagenes\montanita\0554_playa_montanita.jpg" alt="" width=350px>
              <br><br>
              <h5>Playa turistica de Montañita</h5>
              <p style = "text-align: justify; font-size: 17px;">
              El balneario de montañita se encuentra ubicado en la parroquia Manglaralto de la comuna Montañita, a 57 km de la cabecera provincial, con una longitud de 1854 m2 de extensión y 60 m aproximadamente.              
              </p>
              <button id="close2">Cerrar</button>
          </div>
      </div>

      <img class="efecto" id="open3" src="imagenes\montanita\0564_restaurante_elena.jpg" width="19%" >

      <div id="modal_container3" class="modal-container">
          <div class="modali">
              <img src="imagenes\montanita\0564_restaurante_elena.jpg" alt="" width=350px>
              <br><br>
              <h5>Restaurante Doña Elena</h5>
              <p style = "text-align: justify; font-size: 17px;">
              La gastronomía dentro de la comuna es variada, la mayoría de los establecimientos brindan platos elaborados a base de mariscos como también se encuentra variedad para todos los gustos.
              </p>
              <button id="close3">Cerrar</button>
          </div>
      </div>

      <img class="efecto" id="open4" src="imagenes\montanita\0563_hotel_selina.jpg" width="19%">

      <div id="modal_container4" class="modal-container">
          <div class="modali">
              <img src="imagenes\montanita\0563_hotel_selina.jpg" alt="" width=350px>
              <br><br>
              <h5>Selina</h5>
              <p style = "text-align: justify; font-size: 17px;">
              El establecimiento Selina, es considerado un hotel de segunda (2 estrellas) categoría que se encuentra ubicado en la Calle Guido Chiriboga, cuenta con una hermosa vista directo al mar.              
              </p>
              <button id="close4">Cerrar</button>
          </div>
      </div>
  </section>
</html>


<style>
  *{
    box-sizing: border-box;
  }

  .bodi {
    background-color: #edeef6;
    /* font-family: 'Poppins', sans-serif; */
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    margin: 0;
  }

  button {
    position: inherit;
    margin-top: 1.9rem;
    background-color: #47a386;
    border: 0;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    color: #fff;
    font-size: 14px;
    padding: 5px 20px;
  }

  button:hover{
    transition: .3s all;
    transform: scale(1.2);
  }

  .efecto{
    display: inline-block;
    margin: 0 5px;
    box-sizing: border-box;
    border: none;
  }

  .efecto:hover{
  background: rgba(0, 0, 0, 0.6);
  transition: .5s all;
  transform: scaleX(0.85) scaleY(0.85);
  cursor: pointer;
  }


  .modal-container {
    display: flex;
    background-color: rgba(0, 0, 0, 0.3);
    align-items: center;
    justify-content: center;
    position: fixed;
    pointer-events: none;
    opacity: 0;  
    top: 55px;
    left: 0;
    height: 90vh;
    width: 100vw;
    transition: opacity 0.3s ease;
  }

  .show {
    pointer-events: auto;
    opacity: 1;
  }

  .modali {
    background-color: #FFFFFF;
    width: 45rem;
    height: 41rem;
    max-width: 100%;
    padding: 10px 27px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0);
    text-align: center;
  }

  .modali h1 {
    margin: 0;
  }

  .modali p {
    opacity: 0.7;
    font-size: 12px;
    margin-bottom:5px;
  }

  @media screen and (max-width: 350px) {
    .efecto{
      width: 25%;
      padding-top: 2em;
    }
  }  
</style>

<script src="js\popups.js"></script>