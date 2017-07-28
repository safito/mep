<div class="container">


<h3>Edición de Activo</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_activos/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>


<form action="<?php echo base_url('c_activos/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $activo->id_activo; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Nombre </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $activo->nombre; ?>" name="txt_nombre" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $activo->descripcion; ?>" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>
	
	

</form>
