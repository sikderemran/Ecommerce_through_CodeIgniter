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
<body class="body">
	<div class="row" style="margin-top: 8%;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12" style="padding: 10px;">
			<div id="set_contact">
				<?= form_open("seller/insertSellerContact"); ?>
				<h6 class="white-text">Seller Contact Information</h6>
				<p class="white-text" style="font-size: 14px; margin-top: 0px;">Fill this form & Complete our profile information</p>
				<input type="text" name="seller_fname" id="seller_fname" placeholder="First Name" required="1">
				<input type="text" name="seller_lname" id="seller_lname" placeholder="Last Name" required="1">
				<textarea class="materialize-textarea" id="seller_address" name="seller_address" placeholder="Address...." required="1"></textarea>
				<select name="city" >
					<option disabled selected>Select Your City</option>
					<option>Dhaka</option>
				</select>
				<br/>
				<button class="btn waves-effect waves-light">Submit</button>
				<?= form_close(""); ?>
			</div>
		</div>
		<div class="col l4 m4 s12"></div>
	</div>
</body>
</html>