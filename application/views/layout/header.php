<?php
$nombre = $this->session->userdata['logged_in']['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Módulo Administrador</title>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.js') ?>"></script> 
  <script src="<?php echo base_url('assets/js/moment-with-locales.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js') ?>"></script>
  <script src='<?php echo base_url();?>assets/fullcalendar/lib/moment.min.js'></script>
  <script src='<?php echo base_url();?>assets/fullcalendar/fullcalendar.min.js'></script>
  <script src='<?php echo base_url();?>assets/fullcalendar/locale/es.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.css') ?>">
  <link href='<?php echo base_url();?>assets/fullcalendar/fullcalendar.css' rel='stylesheet' />
  <link href='<?php echo base_url();?>assets/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
  

</head>
<body>

<div class="container" >
  <div class="navbar navbar-default" id="header1">
	
  		<h2><span class="glyphicon glyphicon-home"></span> &nbsp; Módulo Admnistración</h2>
  		<div class="navbar-header">   
          		<a class="navbar-brand" href="#">Inicio</a>
      </div>	
        <ul class="nav navbar-nav navbar-left">
          <li><a href="<?php echo base_url('uploads'); ?>" target="_blank">Repositorio</a></li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Calendarios <span class="caret"></span></a>
            <ul class="dropdown-menu">

            <li><a href="<?php echo base_url('c_calendar/tareas'); ?>">Tareas</a></li>
            <li><a href="<?php echo base_url('c_calendar/solicitudes'); ?>">Solicitudes</a></li>
            <li role="separator" class="divider"></li>

            </ul>
          </li>

          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administracion <span class="caret"></span></a>
                <ul class="dropdown-menu">

                	<li><a href="<?php echo base_url('c_archivos/'); ?>">Archivos</a></li>
                  <li><a href="<?php echo base_url('c_usuarios/'); ?>">Usuarios</a></li>
                  <li><a href="<?php echo base_url('c_tareas/'); ?>">Tareas</a></li>
                  <li><a href="<?php echo base_url('c_memos/'); ?>">Memos</a></li>            
                  <li><a href="<?php echo base_url('c_activos_solicitudes/'); ?>">Prestamo Activos</a></li>
      						<li role="separator" class="divider"></li>

                </ul>
          </li>
                
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
                <ul class="dropdown-menu">

                	<li><a href="<?php echo base_url('c_activos/'); ?>">Activos</a></li>          	          	
                	<li><a href="<?php echo base_url('c_estados/'); ?>">Estados</a></li>
                	<li><a href="<?php echo base_url('c_especialidad/'); ?>">Especialidades</a></li>
                	<li><a href="<?php echo base_url('c_usuarios_tipo/'); ?>">Tipo de Usuario</a></li>
                	<li><a href="<?php echo base_url('c_archivos_tipo/'); ?>">Tipo de Archivo</a></li>

      			    </ul>
          </li>
             
        </ul>
	</div>
</div>



