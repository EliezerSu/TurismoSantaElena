	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo usuario</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_usuario" name="guardar_usuario">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="firstname" class="col-sm-3 control-label">Nombres</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nombres" autocomplete="off" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="fechanac" class="col-sm-3 control-label">Fecha Nacimiento</label>
				<div class="col-sm-8">
			  		<input type="date" id="fechanac" name="fechanac" min="1940-01-01" max="2050-12-31" autocomplete="off" class="form-control custom-date-input" />
				</div>
		  	  </div>

			  <div class="form-group">
				<label for="user_name" class="col-sm-3 control-label">Usuario</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="user_name" name="user_name" autocomplete="off" placeholder="Usuario" pattern="[a-zA-Z0-9]{2,64}" title="Nombre de usuario ( sólo letras y números, 2-64 caracteres)"required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="user_email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="user_email" name="user_email" autocomplete="off" placeholder="Correo electrónico" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="user_sexo" class="col-sm-3 control-label">Sexo</label>
				<div class="col-sm-8">
				<select class="form-control" id="cbo_sexo" name="cbo_sexo">
      					<option value="H">Hombre</option>
      					<option value="M">Mujer</option>
       			</select>  
				</div>
			  </div>

			  
			  <div class="form-group">
				<label for="user_password_new" class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" id="user_password_new" name="user_password_new" autocomplete="off" placeholder="Contraseña" pattern=".{6,}" title="Contraseña ( min . 6 caracteres)" required>
				</div>
			  </div>
			  
			  <div class="form-group">
					<label for="pais" class="col-sm-3 control-label">Pais</label>
					<div class="col-sm-8">
						<select class="form-control" name="pais" id="pais" required="">
							<option value="" selected> -- Seleccione --</option>
							<?php
								// Realizamos la consulta para extraer los datos								
								$query = ("select * from pais");
								$res = mysqli_query($con,$query);
								while ($fila = mysqli_fetch_assoc($res)) {
									echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . "</option>";
								}
							?>
						</select>			
					</div>
				</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" onclick="limpiaForm();" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>
	<script>
		function limpiaForm() {			
      		$(".modal-body input").val('')
      		$(".modal-body textarea").val('')
      		$(".modal-body select").val('')
    	}
	</script>