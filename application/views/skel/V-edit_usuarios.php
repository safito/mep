


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
		 	<input type="text" value="<?php echo $usuario->id_usuario_tipo; ?>" name="txt_id_usuario_tipo" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Especialidad </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuario->id_especialidad; ?>" name="txt_id_especialidad" class="form-control" required>
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
