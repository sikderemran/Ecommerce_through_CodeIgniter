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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--Meterialize js -->
	<script type="text/javascript" src="<?= base_url('asset/materialize/materialize/js/materialize.js');?>"></script>
	<!--custop js-->
	<script type="text/javascript" src="<?= base_url('asset/mystyle/mystyle.js');?>"></script>
	<style type="text/css">
		body{
			background-color: rgb(0,0,0,0.03);
		}
	</style>
</head>
<body>
	<nav class="orange">
		<div class="nav-wraper">
			<a href="<?= base_url('index.php/admin/index'); ?>" class="brand-logo left">Sellers</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('index.php/admin/dashboard'); ?>"><span class="fa fa-reply"></span> Back To Dashboard</a></li>
			</ul>
			<!--Right menu section end------------------------------------------------------------->
		</div>
	</nav>
	<h5 style="padding: 15px;">Seller Overview (<?= count($sellers);?>)</h5>
	<div style="padding: 25px">
		<div style="border:1px solid silver; background-color: white">
			<div class="row" style="margin-top: 20px;">
				<div class="col l2 m2 s2"><h5>Seller Name</h5></div>
				<div class="col l2 m2 s2"><h5>Company Name</h5></div>
				<div class="col l2 m2 s2"><h5>Email Id</h5></div>
				<div class="col l2 m2 s2"><h5>GST NO.</h5></div>
				<div class="col l2 m2 s2"><h5>Verify/Un-Verify</h5></div>
				<div class="col l2 m2 s2"><h5>Action</h5></div>
			</div>
			<?php if(count($sellers)): ?>
				<?php foreach($sellers as $sel): ?>
					<div class="row">
						<div class="col l2">
							<h6><?= $sel->f_name . " " . $sel->l_name; ?></h6>
						</div>
						<div class="col l2">
							<h6><?= $sel->seller_cname; ?></h6>
						</div>
						<div class="col l2">
							<h6><?= $sel->email; ?></h6>
						</div>
						<div class="col l2">
							<h6> <?= $sel->gst_no; ?></h6>
						</div>
						<div class="col l2">
							<?php if($sel->verify_unverify): ?>
							<h6><span class="btn waves-effect waves-light ">Verifed</span></h6>
							<?php else: ?>
							<a href="<?= base_url("/index.php/admin/sellerverified/{$sel->id}"); ?>" class="btn waves-effect waves-ligh">Verify</a>							<?php endif; ?>
						</div>
						<div class="col l2">
							<?php if($sel->verify_unverify): ?>
							<button class="btn waves-effect waves-light ">More</button>
							<?php else: ?>
							<button class="btn waves-effect waves-ligh"disabled>More</button>	<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
				<?php else: ?>
			<?php endif;?>
		</div>
	</div>
</body>
</html>
<?php if($msg=$this->session->flashdata('msg')){
	echo "<script>M.toast({html:'$msg'})</script>";
} ?>
