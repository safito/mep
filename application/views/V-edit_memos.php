


<h3>Edición de Memos</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_memos/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>


<form action="<?php echo base_url('c_memos/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $memos->id_memo; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha Creacion </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $memos->fecha_creacion; ?>" name="txt_fecha_creacion" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Titulo </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $memos->titulo; ?>" name="txt_titulo" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $memos->descripcion; ?>" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>


</form>
