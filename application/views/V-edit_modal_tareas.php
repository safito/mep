

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


<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de tareas asociadas al usuario
	if($estados){
		
	
		
		$estados_dropdown = array();
		foreach ($estados as $estado){

			$estados_dropdown = $estados_dropdown +
			array($estado->id_estado => $estado->estado);
		}

	}


?>



 <script type="text/javascript">
     $(function () {
     $('#datetimepicker1').datetimepicker({format: 'YYYY/MM/DD HH:mm'});
   
         });
 </script>

<div class="container">
<body>

<h3>Edición de Tareas</h3>

<div class="row"> 
</div>

<br><br><br>


<form action="<?php echo base_url('c_tareas/update_modal') ?>" method="post" class="form-horizontal">
<input type="hidden" name="txt_hidden" value="<?php echo $tareas->id_tarea; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripcion </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $tareas->descripcion; ?>" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha Creacion </label>
		 <div class="col-md-4">
		 	<input type="text" value="<?php echo $tareas->fecha_creacion; ?>" name="txt_fecha_creacion" class="form-control" required readonly>
		 </div>
	</div>
	


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha Culminacion </label>
		 <div class="col-md-4">
		   <div class='input-group date' id='datetimepicker1'>
		                     <input type='text' name="txt_fecha_culminacion" class="form-control" value="<?php echo $tareas->fecha_culminacion; ?>" />
		                     <span class="input-group-addon">
		                         <span class="glyphicon glyphicon-calendar"></span>
		                     </span>
         	</div>
		 	
		 </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Creador de Tarea </label>
		 <div class="col-md-4">
		 <?php
		 $id_usuario_selected = $tareas->id_usuario_creador;
		 echo form_dropdown('txt_id_usuario_creador', $usuarios_dropdown,$id_usuario_selected, 'class="btn btn-default dropdown-toggle"');
		 ?>
		 	
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Usuario Asignado </label>
		 <div class="col-md-4">
		  <?php
		 $id_usuario_selected = $tareas->id_usuario_asignado;
		 echo form_dropdown('txt_id_usuario_asignado', $usuarios_dropdown,$id_usuario_selected, 'class="btn btn-default dropdown-toggle"');
		 ?>
		 	
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Estado </label>
		 <div class="col-md-4">

	 		 <?php
				 $id_estado_selected = $tareas->id_estado;
				 echo form_dropdown('txt_id_estado', $estados_dropdown,$id_estado_selected, 'class="btn btn-default dropdown-toggle"');
			 ?>


		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Update" class="btn btn-primary" value="Actualizar">
		 	<a href="<?php echo base_url('c_tareas/delete_modal/'.$tareas->id_tarea); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Borrar </a>
		 </div>
		 
		 
		 


	</div>


</form>

	 	