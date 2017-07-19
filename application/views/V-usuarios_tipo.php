


<h3>Listado de Usuarios Tipo</h3>

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


<a href="<?php echo base_url('c_usuarios_tipo/add_usuarios_tipo'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td>Id</td>
		<td>Rol</td>		
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($usuarios_tipo){
	foreach($usuarios_tipo as $usuario_tipo){

	?>


	<tr>
		<td><?php echo $usuario_tipo->id_usuario_tipo; ?></td>
		<td><?php echo $usuario_tipo->rol; ?></td>		
		<td>
			<a href="<?php echo base_url('c_usuarios_tipo/edit/'.$usuario_tipo->id_usuario_tipo); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_usuarios_tipo/delete/'.$usuario_tipo->id_usuario_tipo); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
