<?php
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$user_id=intval($_GET['id']);		
		$query=mysqli_query($con, "select * from Usuarios where id='".$user_id."'");
		$rw_user=mysqli_fetch_array($query);
		$count=$rw_user['id'];
		if ($user_id!=1){
			$query=mysqli_query($con, "select estado from Usuarios where id='".$user_id."'");
			$row = mysqli_fetch_assoc($query);
			
			if($row['estado']==1){
				$mestado=0;
				$mensaje="Datos eliminados exitosamente.";
			}else{
					$mestado=1;
					$mensaje="Registro activado exitosamente.";
				}
			
			
			if ($delete1=mysqli_query($con,"update Usuarios set estado='".$mestado."' WHERE id='".$user_id."'")){
				if($mestado==0){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Registro Eliminado exitosamente.
			</div>
			<?php } else{?>
				<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Registro Activado exitosamente.
			</div> <?php } ?>
			<?php 
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php
			
		}
			
		} else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se puede borrar el usuario administrador. 
			</div>
			<?php
		}
		
		
		
	}	
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('nombres');//Columnas de busqueda
		 $sTable = "Usuarios";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ' and estado=1)';
		}
		$estado=1;
		$sWhere.=" order by id desc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page =9; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/		
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './usuarios.php';
		//main query to fetch the data
		//$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		//$sql="SELECT u.id,u.nombres,u.username,u.clave,u.fecha_nacimiento,u.correo,u.sexo,u.id_pais,u.fecha,u.estado,p.nombre  FROM  usuarios u, pais p where u.id_pais=p.id LIMIT $offset,$per_page";//
		$sql="SELECT u.id,u.nombres,u.username,u.clave,u.fecha_nacimiento,u.correo,u.sexo,u.id_pais,u.fecha,u.estado,p.nombre  FROM  Usuarios u, pais p where u.id_pais=p.id LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="info">
					<th>ID</th>
					<th>Nombres</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Pais</th>
					<th>Fecha Registro</th>
					<th>Estado</th>
					<th><span class="pull-right">Acciones</span></th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$user_id=$row['id'];
						$fullname=$row['nombres'];
						$user_name=$row['username'];
						$user_fenac= $row['fecha_nacimiento'];
						$user_email=$row['correo'];
						$user_paisid=$row['id_pais'];
						$user_pais=$row['nombre'];
						$user_sexo=$row['sexo'];
						$date_added= date('d/m/Y', strtotime($row['fecha']));
						$user_estado=$row['estado'];
						if ($user_estado==1){$estado="Activo";}
						else {$estado="Inactivo";}
						
					?>
					
					<input type="hidden" value="<?php echo $row['nombres'];?>" id="nombres<?php echo $user_id;?>">					
					<input type="hidden" value="<?php echo $user_name;?>" id="username<?php echo $user_id;?>">
					<input type="hidden" value="<?php echo $user_email;?>" id="correo<?php echo $user_id;?>">
					<input type="hidden" value="<?php echo $user_paisid;?>" id="pais<?php echo $user_id;?>">
					<input type="hidden" value="<?php echo $user_sexo;?>" id="sexo<?php echo $user_id;?>">
					<input type="hidden" value="<?php echo $user_fenac;?>" id="fecha_nacimiento<?php echo $user_id;?>">
				
					<tr>
						<td><?php echo $user_id; ?></td>
						<td><?php echo $fullname; ?></td>
						<td ><?php echo $user_name; ?></td>
						<td ><?php echo $user_email; ?></td>
						<td ><?php echo $user_pais; ?></td>
						<td><?php echo $date_added;?></td>
						<td><?php echo $estado;?></td>
						

						
					<td ><span class="pull-right">
					
					<a href="#" class='btn btn-default' title='Editar usuario' onclick="obtener_datos('<?php echo $user_id;?>');" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-edit"></i></a> 
					<a href="#" class='btn btn-default' title='Cambiar contraseña' onclick="get_user_id('<?php echo $user_id;?>');" data-toggle="modal" data-target="#myModal3"><i class="glyphicon glyphicon-cog"></i></a>
					<?php if($user_estado == 1) {?>
    					<a href="#" class='btn btn-default' title='Borrar usuario' onclick="eliminar('<?php echo $user_id; ?>')"><i class="glyphicon glyphicon-trash"></i> </a></span></td>						
					<?php } ?>
					<?php if($user_estado == 0) {?>
    					<a href="#" class='btn btn-default' title='Activar usuario' onclick="eliminar('<?php echo $user_id; ?>')"><i class="glyphicon glyphicon-ok"></i> </a></span></td>
					<?php } ?>						
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=9><span class="pull-right">
					<?php
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>