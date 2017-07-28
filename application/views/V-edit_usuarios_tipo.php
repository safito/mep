<div class="container">


<h3>Edición de Usuarios Tipo</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_usuarios_tipo/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>


<form action="<?php echo base_url('c_usuarios_tipo/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $usuarios_tipo->id_usuario_tipo; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Rol </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuarios_tipo->rol; ?>" name="txt_rol" class="form-control" required>
		 </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>


</form>
