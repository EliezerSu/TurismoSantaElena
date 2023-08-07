  <style>
    .pie-pagina {
      width: 100%;
      background-color: rgb(8, 32, 50);
    }

    .red-social{
      font-size: 21px;
    }

    .pie-pagina .grupo-1 {
      width: 100%;
      grid-template-columns: repeat(1, 1fr);
      grid-gap: 30px;
      padding: 15px 0px;
    }

    .pie-pagina .grupo-1 .box figure {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pie-pagina .grupo-1 .box figure img {
      width: 100px;
    }

    .pie-pagina .grupo-1 .box h2 {
      color: #fff;
      margin-bottom: 25px;
      font-size: 20px;
    }

    .pie-pagina .grupo-1 .box p {
      color: #efefef;
      margin-bottom: 10px;
    }

    .pie-pagina .grupo-1 .red-social a {
      display: inline-block;
      text-decoration: none;
      width: 45px;
      height: 45px;
      line-height: 45px;
      color: #fff;
      margin-right: 10px;
      background-color: #0d2033;
      text-align: center;
      transition: all 300ms ease;
    }

    .pie-pagina .grupo-1 .red-social a:hover {
      color: aqua;
    }

    .pie-pagina .grupo-2 {
      background-color: #0a1a2a;
      padding: 15px 10px;
      text-align: center;
      color: #fff;
    }

    .pie-pagina .grupo-2 small {
      font-size: 15px;
    }

    @media screen and (max-width:800px) {
      .pie-pagina .grupo-1 {
        width: 100%;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 30px;
        padding: 35px 0px;
      }
      .pie-pagina .grupo-2 small {
        font-size: 13px;
      }
    }
  </style>

  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <div class="box">
          <figure>
            <a href="#">
              <img  src="imagenes/SantaElena_logo.png" width="100" height="100">
            </a>
          </figure>
        </div>
        <div  class="red-social" style="text-align:center;">
        <a href="https://www.facebook.com/SanJosedeAnconTuristico?mibextid=ZbWKwL" class="fa fa-facebook"></a>
          <a href="https://www.instagram.com/sanjosedeancon_turistico/" class="fa fa-instagram"></a>
          <a href="https://gadprsja.wixsite.com/my-site-1/blog" class="fa-brands fa-blogger"></a>
         
          <a href="mailto:info@turismosantaelena.com" class="fa-brands "></a>
        </div>
      </div>
    </div>
    <div class="grupo-2">
         <span class=" fa fa-envelope " ></span><a href="mailto:info@turismosantaelena.com" class="  text-white text-decoration-none" style="margin-left:15px; font-size:15px;">info@turismosantaelena.com</a> <br>
      <small>&copy; 2023 <b>Santa Elena</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/app.js"></script>
  <script src="./js/mapa.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  

  </body>
</html>


    