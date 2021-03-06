<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de usuarios tipo
	if($activos){
		
		$activos_dropdown = array();
		foreach ($activos as $activo){
			
			$activos_dropdown = $activos_dropdown + 
			array($activo->id_activo => $activo->nombre);			
		}

	}

?>

<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de usuarios tipo
	if($usuarios){
		
		$usuarios_dropdown = array();
		foreach ($usuarios as $usuario){
			
			$usuarios_dropdown = $usuarios_dropdown + 
			array($usuario->id_usuario => $usuario->nombre . " " . $usuario->apellido);
		}

	}

?>

<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de tareas asociadas al usuario
	if($estados){
		
	
		
		$estados_dropdown = array();
		foreach ($estados as $estado){

			$estados_dropdown = $estados_dropdown +
			array($estado->id_estado => $estado->estado);
		}

	}


?>

<h3>Edición de Solicitudes</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_activos_solicitudes/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_activos_solicitudes/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $activos_solicitudes->id_solicitud; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Activo </label>
		 <div class="col-md-4">
			<?php 			 	
				$activos_selected = $activos_solicitudes->id_activo;
			 	echo form_dropdown('txt_id_activo', $activos_dropdown, $activos_selected, 'class="btn btn-default dropdown-toggle"');
			?>

		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Usuario </label>
		 <div class="col-md-4">
		 <?php 			 	
		 		$id_usuario_selected = $activos_solicitudes->id_usuario;
			 	echo form_dropdown('txt_id_usuario', $usuarios_dropdown, $id_usuario_selected, 'class="btn btn-default dropdown-toggle"');
		 ?>
		 	
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Estado </label>
		 <div class="col-md-4">
 			<?php
				 $id_estado_selected = $activos_solicitudes->id_estado;
				 echo form_dropdown('txt_id_estado', $estados_dropdown,$id_estado_selected, 'class="btn btn-default dropdown-toggle"');
			 ?>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Entrada </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $activos_solicitudes->entrada; ?>" name="txt_entrada" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Salida </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $activos_solicitudes->salida; ?>" name="txt_salida" class="form-control" required>
		 </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>


</form>
