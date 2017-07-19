<?php
$id_usuario = $this->session->userdata['logged_in']['id_usuario'];

?>

<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de usuarios tipo
	if($activos){
		
		$activos_dropdown = array();
		foreach ($activos as $activo){
			
			$activos_dropdown = $activos_dropdown + 
			array($activo->id_activo => $activo->nombre);			
		}

	}

?>

<?php
	//El siguiente codigo sirve para popular el dropdown
	//Dropdown de usuarios tipo
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

      $(function () {
     $('#datetimepicker2').datetimepicker({format: 'YYYY/MM/DD HH:mm'});

         });

     function check_slot(){
     	

     	$.post('<?php echo base_url();?>c_activos_solicitudes/check_slot',
     		{

     			txt_id_activo: document.getElementById("activo_txt").value,
     			txt_entrada : document.getElementById("entrada_txt").value,
     			txt_salida : document.getElementById("salida_txt").value,

     			
     		},

     		function(datos){

     			
     			if(datos==1){
     				$('#Save_btn').prop('disabled', false);
     				$('#entrada_txt').prop('readonly', true);
     				$('#salida_txt').prop('readonly', true);

					document.getElementById('alert').className = "alert alert-info";
					document.getElementById('alert').innerHTML = 'Activo Disponible';

     			}else{

	     			document.getElementById('alert').className = "alert alert-danger";
    	 			document.getElementById('alert').innerHTML = 'Activo no disponible, verifique el rango de entrada y salida';

     			}
     		});


     	

     }

 </script>



<h3>Añadir Solicitudes</h3>


<div class="row"> 
</div>

  <a href="<?php echo base_url('c_activos_solicitudes/'); ?>" class="btn btn-default"> Principal </a>
<br><br><br>

<form action="<?php echo base_url('c_activos_solicitudes/submit') ?>" method="post" class="form-horizontal">
	

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Id Activo </label>
		 <div class="col-md-4">

			<?php 			 	
			 	echo form_dropdown('txt_id_activo', $activos_dropdown, "", 'class="btn btn-default dropdown-toggle" id="activo_txt"');
			?>
		 	
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> ID Usuario </label>
		 <div class="col-md-4">

			<?php 			 	
			 	echo form_dropdown('txt_id_usuario', $usuarios_dropdown, "", 'class="btn btn-default dropdown-toggle"');
			?>

		  </div>
	</div>


	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Entrada </label>
		 <div class="col-md-4">

   			<div class='input-group date' id='datetimepicker1'>
		                     <input type='text' id="entrada_txt" name="txt_entrada" class="form-control"  />
		                     <span class="input-group-addon">
		                         <span class="glyphicon glyphicon-calendar" required></span>
		                     </span>
         	</div>

		 </div>
	</div>

	

		<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Salida </label>
		 <div class="col-md-4">

   			<div class='input-group date' id='datetimepicker2'>
		                     <input type='text' id="salida_txt" name="txt_salida" id="txtsalida" class="form-control"  />
		                     <span class="input-group-addon">
		                         <span class="glyphicon glyphicon-calendar" required></span>
		                     </span>
         	</div>

		 </div>
	</div>

	<div id="alert">
		
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" id="Save_btn" name="btn_Save" class="btn btn-primary" value="Guardar" disabled>		 	
		 	<a href="#" class="glyphicon glyphicon-question-sign btn btn-success" onclick="check_slot()"> Disponibilidad </a>
		 </div>
	</div>


</form>
