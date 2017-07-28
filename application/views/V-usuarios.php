<div class="container">


<h3>Listado de Usuarios</h3>

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


<a href="<?php echo base_url('c_usuarios/add_usuarios'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-condensed table-responsive">
<thead>
	<tr>
		<td>id</td>		
		<td>Tipo de Usuario</td>
		<td>Especialidad</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Email</td>
		<td>Telefono</td>
		<td>password</td>
		<td>Accion</td>
	</tr>
</thead>

<tbody>

	<?php if($usuarios){
	foreach($usuarios as $usuario){
	$id_especialidad_selected= $usuario->id_especialidad;
	?>



	<tr>
		<td><?php echo $usuario->id_usuario; ?></td>
		<td><?php echo $usuario->id_usuario_tipo; ?></td>
		<td><?php echo $usuario->id_especialidad; ?></td>		
		<td><?php echo $usuario->nombre; ?> </td>
		<td><?php echo $usuario->apellido; ?></td>
		<td><?php echo $usuario->email; ?></td>
		<td><?php echo $usuario->telefono; ?></td>
		<td><?php echo $usuario->password; ?></td>
		<td>
			<a href="<?php echo base_url('c_usuarios/edit/'.$usuario->id_usuario); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_usuarios/delete/'.$usuario->id_usuario); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
