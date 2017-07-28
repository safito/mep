<div class="container">


<h3>Edición de Usuarios Memos</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_usuarios_memos/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>


<form action="<?php echo base_url('c_usuarios_memos/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $usuarios_memos->id_usuarios_memos; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Memo </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuarios_memos->id_memo; ?>" name="txt_id_memo" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Usuario </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuarios_memos->id_usuario; ?>" name="txt_id_usuario" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha Recibido </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $usuarios_memos->fecha_recibido; ?>" name="txt_fecha_recibido" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>


</form>
