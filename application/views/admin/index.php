<!DOCTYPE html>
<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
<html>
<head>
	<title>online top seller account</title>
	<!--Shortcut icon-->
	<link rel="shortcut icon" type="text/css" href="<?= base_url('img/logoNav.png'); ?>">
	<!--Meterialize css -->
	<?= link_tag('asset/materialize/materialize/css/materialize.css'); ?>
	<?= link_tag('asset/font_awesome/css/font-awesome.css'); ?>
	<?= link_tag('asset/mystyle/mystyle.css'); ?>
	<!--jquery-->
	<script type="text/javascript" src="<?= base_url('asset/js/jquery.js');?>"></script>
	<!--Meterialize js -->
	<script type="text/javascript" src="<?= base_url('asset/materialize/materialize/js/materialize.js');?>"></script>
	<!--custop js-->
	<script type="text/javascript" src="<?= base_url('asset/mystyle/mystyle.js');?>"></script>
</head>
<body style="background-color: orange">
	<h4 class="center-align">Admin Login</h4>
	<div class="row white">
		<div class="col l1 m1 s12"></div>
		<div class="col l3 m3 s12" style="border:1px solid orange;">
			<?=form_open("admin/login"); ?>
			<?php if($msg=$this->session->flashdata('msg')): ?>
			<p class="red-text" style="font-size: 14px;"><?= $msg; ?></p>
			<?php endif; ?>
			<div class="input-field">
				<input type="text" name="admin_username" id="admin_username" required="1">
				<label for="admin_username">Username</label>
			</div>
			<div class="input-field">
				<input type="text" name="admin_password" id="admin_password" required="1">
				<label for="admin_username">Username</label>
			</div>
			<button class="btn waves-effect waves-light orange">Login</button>
			<?=form_close(); ?>
			<br/>
			<a href="">Fogot Password?</a>
		</div>
		<div class="col l7 m7 s12">
			<p style="text-align: justify;"> hello hello hello hello hello hello  hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello  hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello</p>
			<div class="row">
				<div class="col l3 m3 s12">
					<center>
						<h1><span class="fa fa-users orange-text"></span></h1>
						<h6>Manage Users</h6>
					</center>
				</div>
				<div class="col l3 m3 s12">
					<center>
						<h1><span class="fa fa-users orange-text"></span></h1>
						<h6>Manage Sellers</h6>
					</center>
				</div>

				<div class="col l3 m3 s12">
					<center>
						<h1><span class="fa fa-gift orange-text"></span></h1>
						<h6>Manage Sales</h6>
					</center>
				</div>
				<div class="col l3 m3 s12">
					<center>
						<h1><span class="fa fa-cubes orange-text"></span></h1>
						<h6>Manage Iteams</h6>
					</center>
				</div>
			</div>
		</div>
		<div class="col l1 m1 s12"></div>
	</div>
</body>
</html>