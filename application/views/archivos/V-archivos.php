


<h3>Listado de Archivos</h3>

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


<a href="<?php echo base_url('c_archivos/add_archivos'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>Id</td>
		<td>Fecha</td>
		<td>Id Archivo Tipo</td>
		<td>Id Especialidad</td>
		<td>Id Usuario</td>
		<td>Id Tarea</td>		
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($archivos){
	foreach($archivos as $archivo){

	?>


	<tr>
		<td><?php echo $archivo->id_archivo; ?></td>
		<td><?php echo $archivo->fecha; ?></td>
		<td><?php echo $archivo->id_archivo_tipo; ?></td>
		<td><?php echo $archivo->id_especialidad; ?> </td>
		<td><?php echo $archivo->id_usuario; ?></td>
		<td><?php echo $archivo->id_tarea; ?></td>		
		<td>
			<a href="<?php echo base_url('c_archivos/edit/'.$archivo->id_archivo); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_archivos/delete/'.$archivo->id_archivo); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
