


<h3>Añadir Usuario</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_usuarios/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_usuarios/submit') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Usuario Tipo </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_usuario_tipo" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Especialidad </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_especialidad" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Nombre </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_nombre" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Apellido </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_apellido" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Email </label>
		 <div class="col-md-4">
		 	<input type="email" name="txt_email" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Telefono </label>
		 <div class="col-md-4">
		 	<input type="tel" name="txt_telefono" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Password </label>
		 <div class="col-md-4">
		 	<input type="password" name="txt_password" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
