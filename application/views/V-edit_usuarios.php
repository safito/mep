

<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de usuarios tipo
	if($usuarios_tipo){
		
		$usuario_tipo_dropdown = array();
		foreach ($usuarios_tipo as $usuario_tipo){
			
			$usuario_tipo_dropdown = $usuario_tipo_dropdown + 
			array($usuario_tipo->id_usuario_tipo => $usuario_tipo->rol);			
		}

	}

?>


<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de especialidades
	if($especialidades){
		
		$especialidad_dropdown = array();
		foreach ($especialidades as $especialidad){
			
			$especialidad_dropdown = $especialidad_dropdown + 
			array($especialidad->id_especialidad => $especialidad->nombre);			
		}

	}

?>






<h3>Edición de Usuario</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_usuarios/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>


<form action="<?php echo base_url('c_usuarios/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $usuario->id_usuario; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Usuario Tipo </label>
		 <div class="col-md-4">
			<?php 
		 	$id_usuario_tipo_selected = $usuario->id_usuario_tipo;
		 	echo form_dropdown('txt_id_usuario_tipo', $usuario_tipo_dropdown, $id_usuario_tipo_selected, 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Especialidad </label>
		 <div class="col-md-4">
		 	<?php 
			 	$id_especialidad_selected = $usuario->id_especialidad;
			 	echo form_dropdown('txt_id_especialidad', $especialidad_dropdown, $id_especialidad_selected, 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>


	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Nombre </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuario->nombre; ?>" name="txt_nombre" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Apellido </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuario->apellido; ?>" name="txt_apellido" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Email </label>
		 <div class="col-md-4">
		 	<input type="email" value="<?php echo $usuario->email; ?>" name="txt_email" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Telefono </label>
		 <div class="col-md-4">
		 	<input type="tel" value="<?php echo $usuario->telefono; ?>" name="txt_telefono" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Password </label>
		 <div class="col-md-4">
		 	<input type="password" value="<?php echo $usuario->password; ?>" name="txt_password" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>


</form>
