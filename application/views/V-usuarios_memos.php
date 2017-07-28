<div class="container">


<h3>Listado de Usuarios Memos</h3>

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


<a href="<?php echo base_url('c_usuarios_memos/add_usuarios_memos'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>ID</td>
		<td>Id Memo</td>
		<td>Id Usuario</td>
		<td>Fecha Recibido</td>		
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($usuarios_memos){
	foreach($usuarios_memos as $usuario_memo){

	?>


	<tr>
		<td><?php echo $usuario_memo->id_usuarios_memos; ?></td>
		<td><?php echo $usuario_memo->id_memo; ?></td>
		<td><?php echo $usuario_memo->id_usuario; ?></td>
		<td><?php echo $usuario_memo->fecha_recibido; ?> </td>		
		<td>
			<a href="<?php echo base_url('c_usuarios_memos/edit/'.$usuario_memo->id_usuarios_memos); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_usuarios_memos/delete/'.$usuario_memo->id_usuarios_memos); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
