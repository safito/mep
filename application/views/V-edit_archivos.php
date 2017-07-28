
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


<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de tareas asociadas al usuario
	if($usuarios){
		
	
		
		$usuarios_dropdown = array();
		foreach ($usuarios as $usuario){

			$usuarios_dropdown = $usuarios_dropdown +
			array($usuario->id_usuario => $usuario->nombre . " " . $usuario->apellido);
		}

	}


?>



            
		         
 <script type="text/javascript">
     $(function () {
     $('#datetimepicker1').datetimepicker({format: 'YYYY/MM/DD HH:mm'});

         });
 </script>

<div class="container">
<h3>Edición de Archivos</h3>

<div class="row"> 
</div>
<a href="<?php echo base_url('c_archivos/'); ?>" class="glyphicon glyphicon-arrow-left btn btn-default"> Principal </a>
<br><br><br>


<form action="<?php echo base_url('c_archivos/update') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $archivos->id_archivo; ?>">


	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha </label>
		 <div class="col-md-4">
             <div class='input-group date' id='datetimepicker1'>
		                     <input type='text' name="txt_fecha" class="form-control" value="<?php echo $archivos->fecha; ?>" />
		                     <span class="input-group-addon">
		                         <span class="glyphicon glyphicon-calendar"></span>
		                     </span>
             </div>
		 
		 </div>
		 	
		 
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Nombre </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $archivos->nombre; ?>" name="txt_nombre" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $archivos->descripcion; ?>" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>





	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Tipo de Archivo </label>
		 <div class="col-md-4">
		 	<?php
		 		$id_archivo_tipo_selected = $archivos->id_archivo_tipo; 			 	
			 	echo form_dropdown('txt_id_archivo_tipo', $archivos_tipo_dropdown, $id_archivo_tipo_selected , 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Especialidad </label>
		 <div class="col-md-4">
		 	<?php 	
		 	  $id_especialidad_selected = $archivos->id_especialidad;	 	
			  echo form_dropdown('txt_id_especialidad', $especialidad_dropdown, $id_especialidad_selected, 'class="btn btn-default dropdown-toggle"');
			?>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Autor </label>
		 <div class="col-md-4">
		 <?php
		 $id_usuario_selected = $archivos->id_usuario;
		 echo form_dropdown('txt_id_usuario', $usuarios_dropdown,$id_usuario_selected, 'class="btn btn-default dropdown-toggle"');
		 ?>
		 	
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Tarea </label>
		 <div class="col-md-4">
		 <?php		 
		 $id_tarea_selected = $archivos->id_tarea;
		 echo form_dropdown('txt_id_tarea', $tareas_dropdown, $id_tarea_selected, 'class="btn btn-default dropdown-toggle"');
		 ?>
		 	
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 </div>
	</div>


</form>
