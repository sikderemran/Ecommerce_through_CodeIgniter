<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
	<title>Product menu</title>
	<link rel="shortcut icon" type="text/css" href="<?= base_url('img/logoNav.png'); ?>">
	<!--Meterialize css -->
	<?= link_tag('asset/materialize/materialize/css/materialize.css'); ?>
	<?= link_tag('asset/font_awesome/css/font-awesome.css'); ?>
	<?= link_tag('asset/mystyle/mystyle.css'); ?>
</head>
<body>
	<!--body section start-->
	<h1 class="center-align hide-on-med-and-down"><span class="fa fa-android"></span></h1>
	<h4 class="center-align hide-on-med-and-down">This page only available in mobile screen</h4>
	<h5 class="orange white-text section hide-on-med-and-up">Electronic Category</h5>
	<div class="collapsible hide-on-med-and-up">
		<li>
			<div class="collapsible-header">Mobile<span class="fa fa-angle-down"></span></div>
			<div class="collapsible-body">
				<ul>
					<li><a href="">Apple</a></li>
					<li><a href="">Sumsung</a></li>
					<li><a href="">Nokia</a></li>
					<li><a href="">Xiaomi</a></li>
					<li><a href="">Lg</a></li>
					<li><a href="">Vivo</a></li>
					<li><a href="">Sony</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Mobile Accessories</div>
			<div class="collapsible-body">Body</div>
		</li>
		<li>
			<div class="collapsible-header">Tablet</div>
			<div class="collapsible-body">Body</div>
		</li>
		<li>
			<div class="collapsible-header">Computer</div>
			<div class="collapsible-body">Body</div>
		</li>
		<li>
			<div class="collapsible-header">Computer Accessories</div>
			<div class="collapsible-body">Body</div>
		</li>
	</div>
	<!--Body section end----------------------------------------------------->
	<script type="text/javascript" src="<?= base_url('asset/js/jquery.js');?>"></script>
	<!--Meterialize js -->
	<script type="text/javascript" src="<?= base_url('asset/materialize/materialize/js/materialize.js');?>"></script>
	<!--custop js-->
	<script type="text/javascript" src="<?= base_url('asset/mystyle/mystyle.js');?>"></script>
</body>
</html>