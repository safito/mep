


<h3>Añadir Memos</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_memos/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_memos/submit') ?>" method="post" class="form-horizontal">
	
	

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Titulo </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_titulo" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 <textarea class="form-control" rows="5" name="txt_descripcion" required=""> </textarea>
		 	
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
