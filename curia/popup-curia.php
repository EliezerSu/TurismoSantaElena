<section class="bodi">
  <img class="efecto" id="open" src="imagenes\curia\0485_playacuria_1.JPG" width="19%" height=auto>

  <div id="modal_container" class="modal-container">
    <div class="modali">
      <img src="imagenes\curia\0485_playacuria_1.JPG" alt="" width=500px>
      <h5>Playa turistica de Curía</h5>
      <p style="text-align: justify; font-size: 17px;">
        Una suave pendiente, y con significativa amplitud y extensión que permite una gran tranquilidad, y relajación. Por la longitud de sus playas, el mar de CURIA es ideal para los bañistas de todas las edades e inclusive las olas son aptas (y conocidas) para surfear.
      </p>
      <button id="close">Cerrar</button>
    </div>
  </div>

  <img class="efecto" id="open1" src="imagenes\curia\0537_virgen_lourdes.jpg" width="19%" height=auto>

  <div id="modal_container1" class="modal-container">
    <div class="modali">
      <img src="imagenes\curia\0537_virgen_lourdes.jpg" alt="" width=500px>
      <h5>Fiesta en honor a la señora Lourdes</h5>
      <p style="text-align: justify; font-size: 17px;">
        Se celebra los días 10 Y 11 de febrero, es un Evento Religioso donde se rinde homenaje a la señora Lourdes, dando una reunión religiosa con todos los comuneros de la localidad he visitantes, que son fieles religiosos a la virgen.
      </p>
      <button id="close1">Cerrar</button>
    </div>
  </div>

  <img class="efecto" id="open2" src="imagenes\curia\0538_curiacarrucel.jpg" width="19%" height=auto>

  <div id="modal_container2" class="modal-container">
    <div class="modali">
      <img src="imagenes\curia\0538_curiacarrucel.jpg" alt="" width=500px>
      <h5>Dia de los Difuntos </h5>
      <p style="text-align: justify; font-size: 17px;">
        Los días 1 y 2 de noviembre. El primer día es conmemorado a los niños y el segundo a los adultos mayores. Esta celebración recuerda a aquellos seres queridos que partieron de este mundo, poniendo mesas con lo que eran sus platos favoritos y visitando sus tumbas.
      </p>
      <button id="close2">Cerrar</button>
    </div>
  </div>

  <img class="efecto" id="open3" src="imagenes\curia\0496_fiestamariainmaculada_5.jpg" width="19%">

  <div id="modal_container3" class="modal-container">
    <div class="modali">
      <img src="imagenes\curia\0496_fiestamariainmaculada_5.jpg" alt="" width=500px>
      <h5>Fiesta Virgen María Inmaculada</h5>
      <p style="text-align: justify; font-size: 17px;">
        Del 5 al 8 de diciembre. El evento es para rendir homenaje a la Virgen María Inmaculada. La comuna con los invitados y visitantes realizan un Pregón, presentaciones, show artístico, Juegos deportivos, quema de castillos, misa y recorrido de la virgen.
      </p>
      <button id="close3">Cerrar</button>
    </div>
  </div>

  <img class="efecto" id="open4" src="imagenes\curia\0499_eleccionreina_2.jpg" width="19%">

  <div id="modal_container4" class="modal-container">
    <div class="modali">
      <img src="imagenes\curia\0499_eleccionreina_2.jpg" alt="" width=500px>
      <br>
      <br>
      <h5>Elección de la Reina</h5>
      <p style="text-align: justify; font-size: 17px;">
        Este evento se lo realiza la última semana de diciembre, donde se procede a Realiza la elección de la nueva reina de la comunidad para ellos se organiza un desfile con las candidatas, y a la vez la participación de músicas y bailes para la celebración.
      </p>
      <button id="close4">Cerrar</button>
    </div>
  </div>
</section>


<style>
  * {
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
    margin-top: 1.25rem;
    background-color: #47a386;
    border: 0;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    color: #fff;
    font-size: 14px;
    padding: 5px 20px;
  }

  button:hover {
    transition: .3s all;
    transform: scale(1.2);
  }

  .efecto {
    display: inline-block;
    margin: 0 5px;
    box-sizing: border-box;
    border: none;
  }

  .efecto:hover {
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
    top: 10%;
    left: 0;
    height: 85vh;
    width: 100vw;
    transition: opacity 0.3s ease;
  }

  .show {
    pointer-events: auto;
    opacity: 1;
  }

  .modali {
    background-color: #FFFFFF;
    width: 38rem;
    height: 42rem;
    max-width: 100%;
    padding: 10px 30px;
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
    margin-bottom: 5px;
  }

  @media screen and (max-width: 700px) {
    .efecto {
      width: 25%;
      padding-top: 2em;
    }
  }
</style>