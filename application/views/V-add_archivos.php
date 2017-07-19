<?php
//Informacion del ID del usuario
$id_usuario = $this->session->userdata['logged_in']['id_usuario'];
?>


<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de especialidades
	if($especialidades){
		
		$especialidad_dropdown = array();
		foreach ($especialidades as $especialidad){
			
			$especialidad_dropdown = $especialidad_dropdown + 
			array($especialidad->id_especialidad => $especialidad->nombre);			
		}

	}

?>


<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de tipos de archivo
	if($archivos_tipo){
		
		$archivos_tipo_dropdown = array();
		foreach ($archivos_tipo as $archivo_tipo){
			
			$archivos_tipo_dropdown = $archivos_tipo_dropdown + 
			array($archivo_tipo->id_archivo_tipo => $archivo_tipo->extension);			
		}

	}

?>

<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de tareas asociadas al usuario
	if($tareas){
		
	
		$tareas_dropdown = array();
		$tareas_dropdown = array('NULL' => 'Personal');
		foreach ($tareas as $tarea){
			$tareas_dropdown = $tareas_dropdown +
			array($tarea->id_tarea => $tarea->id_tarea);
		}

	}


?>




<h3>Añadir Archivos</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_archivos/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_archivos/save') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	
	<input type="hidden" name="txt_id_usuario" value="<?php echo $id_usuario; ?>" >


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Nombre </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_nombre" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Tipo de Archivo </label>
		 <div class="col-md-4">
		 	<?php 			 	
			 	echo form_dropdown('txt_id_archivo_tipo', $archivos_tipo_dropdown, "", 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>

	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Especialidad </label>
		 <div class="col-md-4">
		 	<?php 			 	
			 	echo form_dropdown('txt_id_especialidad', $especialidad_dropdown, "", 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>

	
		 
	

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Tarea </label>
		 <div class="col-md-4">
		 	<?php 			 	
			 	echo form_dropdown('txt_id_tarea', $tareas_dropdown, "", 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Archivo </label>
		 <div class="col-md-4">
		 	<input type="file" name="txt_userfile" class="form-control" required>
		 </div>
	</div>



	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
