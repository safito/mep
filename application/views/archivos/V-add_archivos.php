


<h3>Añadir Archivos</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_archivos/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_archivos/submit') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_fecha" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Archivo Tipo </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_archivo_tipo" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Especialidad </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_especialidad" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Usuario </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_usuario" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Tarea </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_tarea" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
