<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) || $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
    }

	/* Connect To Database*/
	require_once("config/db.php");//Contiene las variables de configuración para conectar a la base de datos
	require_once("config/conexion.php");//Contiene función que conecta a la base de datos
	
	$active_puntuaciones="active";
	$active_comentarios="";
	$active_usuarios="";	
	$title="Valoraciones | AdminSite";
?>

<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("head.php");?>
    	<link rel="stylesheet" type="text/css" href="./css/modal.css" media="screen" />			
	</head>

  <body>
	<?php
	include("navbar.php");
	?>
	
    <div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4><i class='glyphicon glyphicon-stats'></i> Valoraciones</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_valoraciones">
                <div class="form-group row">
                    <label for="fecha_inicio" class="col-md-2 control-label">Fecha de inicio</label>
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fecha_fin" class="col-md-2 control-label">Fecha de fin</label>
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                    </div>
                </div>
					<div class="form-group row">
						<div class="col-md-offset-2 col-md-3">
							<button type="button" class="btn btn-default" onclick="generarValoraciones();">
								<span class="glyphicon glyphicon-stats"></span> Generar
							</button>
						</div>
					</div>
				</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div id="modalImagen" class="modal">
  						<span class="close" onclick="cerrarModal()">&times;</span>
  						<img id="imagenAmpliada" class="modal-content">
				</div>
			</div>
		</div>
	</div>
	<hr>
	
	<?php include("footer.php");?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/valoraciones.js"></script>
	<script>
		function generarValoraciones(){
			var fecha_inicio = $("#fecha_inicio").val();
			var fecha_fin = $("#fecha_fin").val();
			$.ajax({
				url:'./ajax/generar_valoraciones.php',
				type: 'POST',
				data:{fecha_inicio:fecha_inicio, fecha_fin:fecha_fin},
				beforeSend: function(objeto){
					$('#resultados').html('<img src="img/ajax-loader.gif"> Cargando...');
				},
				success:function(data){
					$("#resultados").html(data).fadeIn('slow');
				}
			});
		}
	</script>
    <script>
		function ampliarImagen(idImagen) {
  		var imagen = document.getElementById('imagen' + idImagen);
  		var modal = document.getElementById('modalImagen');
  		var imagenAmpliada = document.getElementById('imagenAmpliada');

  		imagenAmpliada.src = imagen.src;
  		modal.style.display = "block";
		}
	</script>
	<script>
		function cerrarModal() {
  		var modal = document.getElementById('modalImagen');
  		modal.style.display = "none";
		}
	</script>
	
<!-- Script que carga la imagen en el modal -->
  </body>
  
</html>
