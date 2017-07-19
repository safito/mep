


<h3>Añadir Usurios Memos</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_usuarios_memos/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_usuarios_memos/submit') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Memo </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_memo" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Usuario </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_id_usuario" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha Recibido </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_fecha_recibido" class="form-control" required>
		 </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
