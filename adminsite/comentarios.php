<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) || $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
    }

	/* Connect To Database*/
	require_once("config/db.php");//Contiene las variables de configuración para conectar a la base de datos
	require_once("config/conexion.php");//Contiene función que conecta a la base de datos
	
	$active_puntuaciones="";
	$active_comentarios="active";	
	$active_usuarios="";	
	$title="Comentarios | AdminSite";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php");?>
    <link rel="stylesheet" href="./css/boton.css">
  </head>
  <body>
	<?php
	include("navbar.php");
	?>
	
    <div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">			    
				<h4><i class='glyphicon glyphicon-search'></i> Buscar Comentarios</h4>
			</div>
			<div class="panel-body">				
				<form class="form-horizontal" role="form" id="datos_cotizacion">
					<div class="form-group row">
						<label for="usuario" class="col-md-2 control-label">Usuario</label>
						<div class="col-md-5">
							<select class="form-control" id="usuario" name="usuario" onchange="load(1);">
								<option value="">Seleccione un usuario</option>
								<?php 
									$query_user = mysqli_query($con,"SELECT * FROM Usuarios where id>1");
									while($rw=mysqli_fetch_array($query_user)) {
										echo '<option value="'.$rw['username'].'">'.$rw['username'].'</option>';
									}
								?>
							</select>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-default" onclick="load(1);">
								<span class="glyphicon glyphicon-search"></span> Buscar
							</button>
							<span id="loader"></span>
						</div>
					</div>
				</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
			</div>
		</div>
	</div>
	<hr>
	<?php include("footer.php");?>
	<script type="text/javascript" src="js/comentarios.js"></script>
	<script>
		function load(page){
			var q= $("#q").val();
			var usuario=$("#usuario").val();
			$.ajax({
				url:'ajax/buscar_comentarios.php',
				data:'page='+page+'&q='+q+'&usuario='+usuario,
				beforeSend: function(objeto){
					$('#loader').html('<img src="img/ajax-loader.gif"> Cargando...');
				},
				success:function(data){
					$("#resultados").html(data).fadeIn('slow');
					$('#loader').html('');
				}
			});
		}
	</script>
  </body>
</html>
