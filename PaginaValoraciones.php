<?php session_start() ?>

<!doctype html>
<html lang="en">

<head>
  <title>Valoracion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/86e925a6b7.js" crossorigin="anonymous"></script>

</head>

<body>
  <main class="container">

<?php  
    include_once './models/db.php';
    if(isset($_GET['img'])){
        $img_path = $_GET['img'];
    }
    $sql = "SELECT id FROM imagenes WHERE nombre =  '$img_path'";

    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
        }
    }

?>

<style>
 .container input{
    display: none;
  }

  .container label {
    font-size: 40px;
    color:#444;
   float: right;
    
    transition: all 0.2s ease;
    cursor: pointer;
  }

  input:not(:checked) ~ label:hover,
  input:not(:checked) ~ label:hover label{
    color: #fd4;
  }

  input:checked ~  label {
    color: #fd4;
  }

  input#rate-1:checked  ~  label{
    color: #fe7;
  }

  input:checked ~  form{
    display: block;
  }
  
  @media screen and (max-width:1440px) {
    .container label {
    font-size: 40px;
    color:#444;
   float: right;
    padding:5px;
    transition: all 0.2s ease;
    cursor: pointer;
  }
   }
   
   .comment {
   display: flex;
   position: relative;
   left: 50px;
   margin-bottom: 20px;
   }

   .comment img {
   width: 50px;
   height: 50px;
   border-radius: 50%;
   margin-right: 10px;
   }

   .comment-content {
   display: flex;
   flex-direction: column;
   }

   .comment-header {
   display: flex;
   align-items: center;
   margin-bottom: 5px;
   }

   .username {
   font-weight: bold;
   margin-right: 5px;
   }

   .timestamp {
   font-size: 14px;
   color: #999;
   }

   .comment-text {
   margin-bottom: 10px;
   }

   .comment-actions {
   display: flex;
   }

   .action-btn {
   border: none;
   background-color: transparent;
   font-size: 14px;
   color: #999;
   cursor: pointer;
   margin-right: 10px;
   }

   .action-btn:hover {
   color: #1DA1F2;
   }

   @media screen and (max-width:750px) {
      .comment{
         left: 0;
      }
   }

</style>

<div id="alert" ></div>
<section class="boto">
      <a href="javascript:history.back()"><button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button></a>

      </section> 
<form  method="post" id="valoracion" class="row row-cols-1 row-cols-md-2 g-4 mt-5">
    <div class="col">

                  <h3 class=" ms-5 mb-3 text-capitalize fw-bold fs-4 " ><?php 
                if(isset($_SESSION['user'])){
                    $usuarioIngresado= $_SESSION['user'];
                    echo $usuarioIngresado;
                }
             ?> </h3>
             <figure>
                <img src="<?php echo $img_path; ?>" alt="imagen" class="img-fluid rounded " style="width: 550px ;height: 380px;">
            </figure>


        </div>

        <div class="col">
        <?php 
                    if(!isset($_SESSION['user'])) {
                        echo "
                        <div class='alert alert-danger' role='alert'>
                            Debe Iniciar sesion para poder Comentar!!
                        </div>
                        <button class='btn btn-outline-dark' style='display:none;' >Enviar</button> ";
                    }else{ ?>
         
          <div class="container  " style="width: 70%;">
            <input type="radio"  name="rate" id="rate-5" value="5" >
            <label for="rate-5" class="fas fa-star"></label>  
            
            <input type="radio" name="rate" id="rate-4" value="4" >
            <label for="rate-4" class="fas fa-star"></label>  
            
            <input type="radio" name="rate" id="rate-3" value="3" >
            <label for="rate-3" class="fas fa-star"></label>  
            
            <input type="radio" name="rate" id="rate-2" value="2">
            <label for="rate-2" class="fas fa-star"></label>  
            
            <input type="radio" name="rate" id="rate-1" value="1" >
            <label for="rate-1" class="fas fa-star"></label>  

        </div>
            <div class="mt-5">
                <input type="hidden" name="nombre_usuario" value="<?php  echo $usuarioIngresado?>">
                <input type="hidden" name="codigo_imagen" value="<?php  echo $id?>">
                <textarea class="form-control" id="comentario" name="comentario" placeholder="comentar" rows="3"></textarea>
            </div>
            <div class="mt-3">
                <?php
                        $usuarioIngresado = $_SESSION['user'];
                        echo "<button type='submit' class='btn btn-outline-dark' style='display:block;' >Enviar</button>";
                    }
                ?>    
            <div id="mensaje" ></div>
            </div>
        </div>

</form>

<section class="container mt-3 mb-5">    
   <h3 class="text-center fw-bold fs-1">Comentarios</h3>
 
        <?php 
        $sql = "select *  FROM Usuarios U, Comentario C where U.username = C.usuario and id_imagen='$id' ;";
        $comentario = mysqli_query($conexion,$sql);

        while($row = $comentario-> fetch_assoc()){
             if($row['estado'] == 1){
         ?>

        <div class="comment">
        <div class="comment-content">
            <div class="comment-header">
            <h3 class="username"><?php echo $row['nombres'];?> </h3>
            <span class="timestamp ms-2">@<?php echo $row['usuario'];?></span>
        </div>
        <p class="comment-text"><?php echo $row['descripcion']?></p>
            <div class="comment-actions">
             <span class="timestamp"><?php echo $row['fecha'];?></span>
            <span class="timestamp ms-2" style="color:yellow;"> 
                  <?php 
                  $puntaje = $row['puntaje'];
                  for ($i=0; $i < $puntaje; $i++) { 
                  # code...
                  echo '<span class="fas fa-star"> </span>';
                  }       
                  ?>
                </span>
                            </div>
        </div>
        </div>
   <?php  
             }
   }?>

</section>



  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="js/comentarios.js"></script>   
  <script src="js/comentario.js"></script>   
  <script src="js/mostrar_comentarios.js"></script>   
</body>

</html>