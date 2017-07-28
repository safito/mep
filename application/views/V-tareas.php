<div class="container">


<h3>Listado de Tareas</h3>

<?php
	if($this->session->flashdata('success_msg')){
?>

	<div class="alert alert-success">
		<?php echo $this->session->flashdata('success_msg'); ?>
	</div>
<?php
	}
?>

<?php
	if($this->session->flashdata('error_msg')){
?>

	<div class="alert alert-success">
		<?php echo $this->session->flashdata('error_msg'); ?>
	</div>
<?php
	}
?>


<a href="<?php echo base_url('c_tareas/add_tareas'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>Id</td>
		<td>Descripción</td>
		<td>Fecha Creación</td>
		<td>Fecha Culminación</td>
		<td>Creador</td>
		<td>Usuario Asignado</td>
		<td>Estado</td>		
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($tareas){
	foreach($tareas as $tarea){

	?>


	<tr>
		<td><?php echo $tarea->id_tarea; ?></td>
		<td><?php echo $tarea->descripcion; ?></td>
		<td><?php echo $tarea->fecha_creacion; ?></td>
		<td><?php echo $tarea->fecha_culminacion; ?> </td>
		<td><?php echo $tarea->id_usuario_creador; ?></td>
		<td><?php echo $tarea->id_usuario_asignado; ?></td>
		<td><?php echo $tarea->id_estado; ?></td>		
		<td>
			<a href="<?php echo base_url('c_tareas/edit/'.$tarea->id_tarea); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_tareas/delete/'.$tarea->id_tarea); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Borrar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
