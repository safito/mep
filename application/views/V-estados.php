<div class="container">


<h3>Listado de Estados</h3>

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


<a href="<?php echo base_url('c_estados/add_estados'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>id</td>
		<td>estado</td>
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($estados){
	foreach($estados as $estado){

	?>


	<tr>
		<td><?php echo $estado->id_estado; ?></td>
		<td><?php echo $estado->estado; ?></td>
		
		<td>
			<a href="<?php echo base_url('c_estados/edit/'.$estado->id_estado); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_estados/delete/'.$estado->id_estado); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
