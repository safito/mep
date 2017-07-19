<!DOCTYPE html>
<html>
<head>
	<title>Autenticación de Usuario</title>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.js') ?>"></script> 
  <script src="<?php echo base_url('assets/js/moment-with-locales.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.css') ?>">



</head>
<body>

<div class="navbar navbar-default">
	<div class="container">
		<h2><span class="glyphicon glyphicon-off"></span> &nbsp; Autenticación de Usuario</h2>
		<div class="navbar-header">   
        <br><br><br>
      	</div>	
<div class="row"> 
</div>

<form action="<?php echo base_url('c_login/login') ?>" method="post" class="form-horizontal">
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Email </label>
		 <div class="col-md-4">
		 	<input type="text" name="txt_email" class="form-control" required>
		 </div>
	</div>

	<div class="form-group">
	 <label for="title" class="col-md-2 text-right"> Password </label>
		 <div class="col-md-4">
		 	<input type="password" name="txt_password" class="form-control" required>
		 </div>
	</div>
	
	<div class="form-group">
	 <label for="title" class="col-md-2 text-right">  </label>
		 <div class="col-md-4">
		 	<input type="submit" name="btn_Save" class="btn btn-primary" value="Enviar" class=>
		 </div>
	</div>
	
</form>

</div>

</body>
</html>