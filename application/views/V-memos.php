<div class="container">


<h3>Listado de Memos</h3>

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




<a href="<?php echo base_url('c_memos/add_memos'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>id</td>
		<td>Fecha Creacion</td>
		<td>Titulo</td>
		<td>Descripcion</td>
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($memos){
	foreach($memos as $memo){

	?>


	<tr>
		<td><?php echo $memo->id_memo; ?></td>
		<td><?php echo $memo->fecha_creacion; ?></td>
		<td><?php echo $memo->titulo; ?></td>
		<td><?php echo $memo->descripcion; ?> </td>
		<td>
			<a href="<?php echo base_url('c_memos/edit/'.$memo->id_memo); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_memos/delete/'.$memo->id_memo); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
