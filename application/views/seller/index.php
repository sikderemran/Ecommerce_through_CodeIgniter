<!DOCTYPE html>
<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
<html>
<head>
	<title>online top seller account</title>
	<!--Shortcut icon-->
	<link rel="shortcut icon" type="text/css" href="<?= base_url('img/logoNav.png'); ?>">
	<!--Meterialize css -->
	<?= link_tag('asset/materialize/materialize/css/materialize.css'); ?>
	<?= link_tag('asset/mystyle/mystyle.css'); ?>
	<!--jquery-->
	<script type="text/javascript" src="<?= base_url('asset/js/jquery.js');?>"></script>
	<!--Meterialize js -->
	<script type="text/javascript" src="<?= base_url('asset/materialize/materialize/js/materialize.js');?>"></script>
	<!--custop js-->
	<script type="text/javascript" src="<?= base_url('asset/mystyle/mystyle.js');?>"></script>
</head>
<body class="seller_body">
	<!--Top bar section start-->
	<nav>
		<div class="nav-wraper">
			<a href="" class="brand-logo"> Seller Account</a>
			<?= form_open('seller/login'); ?>
			<input type="email" name="email" id="seller_username" required="1">
			<input type="password" name="password" id="seller_password" required="1">
			<button id="seller_button" class="btn waves-effect waves-light">Login</button>
			<?=form_close(); ?>
		</div>
	</nav>
	<!--Top bar section end-------------------------------------------->
	<!--Register section form start-->
	<div class="row">
		<div class="col l8 m8 s12">
			<h5>Start selling on my online shop</h5>
		</div>
		<div class="col l4 m4 s12 white" style="padding: 5px;">
			<?=form_open('seller/createaccount'); ?>
			<h6 class="center-align">Register Now</h6>
			<input type="text" id="company_name" name="company_name" placeholder="Company Name" required="1">
			<input type="email" id="email" placeholder="Email address" name="email" required="1">
			<input type="password" id="password" placeholder="Password" name="password" required="1">
			<input type="number" id="mobile_no" placeholder="Mobile No." name="mobile_no" required="1">
			<input type="number" id="pincode" placeholder="Pin Code" name="pincode" required="1">
			<input type="text" id="panno" placeholder="Pan No." name="pan_no" required="1">
			<input type="text" id="gstno" placeholder="GST No." name="gst_no" required="1">
			<button class="btn waves-effect waves-light">Create Account  </button>
			<?=form_close(); ?>
		</div>
	</div>
	<!--Register section form end-->
</body>
</html>