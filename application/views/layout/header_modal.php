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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.css') ?>">

</head>
<body>




<div class="container">