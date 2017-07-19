


<h3>Listado de Activos</h3>

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


<a href="<?php echo base_url('c_activos/add_activos'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>id</td>
		<td>Nombre</td>
		<td>Descripcion</td>
		<td>Accion</td>
		
	</tr>
</thead>

<tbody>
	
	<?php if($activos){
	foreach($activos as $activo){

	?>


	<tr>
		<td><?php echo $activo->id_activo; ?></td>
		<td><?php echo $activo->nombre; ?></td>
		<td><?php echo $activo->descripcion; ?></td>
		
		<td>
			<a href="<?php echo base_url('c_activos/edit/'.$activo->id_activo); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_activos/delete/'.$activo->id_activo); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
