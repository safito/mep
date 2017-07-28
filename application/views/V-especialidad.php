<div class="container">


<h3>Listado de Especialidad</h3>

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


<a href="<?php echo base_url('c_especialidad/add_especialidad'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>id</td>
		<td>Nombre</td>		
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($especialidad){
	foreach($especialidad as $especial){

	?>


	<tr>
		<td><?php echo $especial->id_especialidad; ?></td>
		<td><?php echo $especial->nombre; ?></td>
		<td>
			<a href="<?php echo base_url('c_especialidad/edit/'.$especial->id_especialidad); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_especialidad/delete/'.$especial->id_especialidad); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
