<div class="container">


<h3>Añadir Especialidad</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_especialidad/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_especialidad/submit') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Nombre </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_nombre" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
