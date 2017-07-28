<div class="container">


<h3>Solicitudes de Activos</h3>

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


<a href="<?php echo base_url('c_activos_solicitudes/add_activos_solicitudes'); ?>" class="btn btn-primary"> Crear </a>

<table class="table table-bordered table-hover table-responsive">
<thead>
	<tr>
		<td># Solicitud</td>
		<td>Activo</td>
		<td>Usuario</td>
		<td>Estado</td>
		<td>Entrada</td>
		<td>Salida</td>
		<td>Accion</td>
	</tr>
</thead>

<tbody>
	
	<?php if($activos_solicitudes){
	foreach($activos_solicitudes as $activo_solicitud){

	?>


	<tr>
		<td><?php echo $activo_solicitud->id_solicitud; ?></td>
		<td><?php echo $activo_solicitud->id_activo; ?></td>
		<td><?php echo $activo_solicitud->id_usuario; ?></td>
		<td><?php echo $activo_solicitud->id_estado; ?> </td>
		<td><?php echo $activo_solicitud->entrada; ?></td>
		<td><?php echo $activo_solicitud->salida; ?></td>
		<td>
			<a href="<?php echo base_url('c_activos_solicitudes/edit/'.$activo_solicitud->id_solicitud); ?>" class="glyphicon glyphicon-pencil btn btn-success"> Editar </a>
			<a href="<?php echo base_url('c_activos_solicitudes/delete/'.$activo_solicitud->id_solicitud); ?>" class="glyphicon glyphicon-trash btn btn-danger"> Eliminar </a>

		</td>
	</tr>

	<?php 

			}
		}
	?>

</tbody>
</table>
