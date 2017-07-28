<div class="container">
<h3>Añadir Tipos de Archivo</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_archivos_tipo/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_archivos_tipo/submit') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Archivo Tipo </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_archivo_tipo" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Extension </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_extension" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
