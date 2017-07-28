
<?php
$id_usuario = $this->session->userdata['logged_in']['id_usuario'];

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

<h3>Añadir Tareas</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_tareas/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_tareas/submit') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Descripción </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_descripcion" class="form-control" required>
		 </div>
	</div>

	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Fecha de Culminación </label>
		 <div class="col-md-4">
		   <div class='input-group date' id='datetimepicker1'>
		                     <input type='text' name="txt_fecha_culminacion" class="form-control" value="" required="" />
		                     <span class="input-group-addon">
		                         <span class="glyphicon glyphicon-calendar"></span>
		                     </span>
             </div>
		 	
		 </div>
	</div>

	
	<input type="hidden" name="txt_id_usuario_creador" class="form-control" required value="<?php echo $id_usuario; ?>">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Usuario Asignado </label>
		 <div class="col-md-4">
		 <?php
		 echo form_dropdown('txt_id_usuario_asignado', $usuarios_dropdown, "", 'class="btn btn-default dropdown-toggle"');
		 ?>
		 	
		 </div>
	</div>

	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Guardar" class=>
		 </div>
	</div>


</form>
