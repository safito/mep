<div class="container">


<h3>Listado de Archivos Tipo</h3>

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


<a href="<?php echo base_url('c_archivos_tipo/add_archivos_tipo'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>id</td>
		<td>extension</td>
		<td>descripcion</td>
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($archivos_tipo){
	foreach($archivos_tipo as $archivo_tipo){

	?>


	<tr>
		<td><?php echo $archivo_tipo->id_archivo_tipo; ?></td>
		<td><?php echo $archivo_tipo->extension; ?></td>
		<td><?php echo $archivo_tipo->descripcion; ?></td>
		<td>
			<a href="<?php echo base_url('c_archivos_tipo/edit/'.$archivo_tipo->id_archivo_tipo); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_archivos_tipo/delete/'.$archivo_tipo->id_archivo_tipo); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
