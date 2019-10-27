<!DOCTYPE html>
<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
<html>
<head>
	<title><?= $mobile->mobile_title;?> | online top seller account</title>
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
<body>
	<div class="row">
		<div class="col l5 m6 s12">
			<div style="border:1px solid rgba(0,0,0,0.1);">
				<center><img src="<?=base_url() . 'mobileImage/' . $mobile->mobile_img_one; ?>" class="responsive_img" id="set_img_one"></center>
				<ul style="display: inline;">
					<li>
						<a href="">
							<img class="responsive_img" id="set_img" src="<?=base_url() . 'mobileImage/' . $mobile->mobile_img_one; ?>" >
						</a>
					</li>
					<li>
						<a href="">
							<img class="responsive_img" id="set_img" src="<?=base_url() . 'mobileImage/' . $mobile->mobile_img_two; ?>" >
						</a>
					</li>
					<li>
						<a href="">
							<img class="responsive_img" id="set_img" src="<?=base_url() . 'mobileImage/' . $mobile->mobile_img_three; ?>" >
						</a>
					</li>
					<li>
						<a href="">
							<img class="responsive_img" id="set_img" src="<?=base_url() . 'mobileImage/' . $mobile->mobile_img_four; ?>" >
						</a>
					</li>
				</ul>
				<button id="btn_cart" class="btn-large waves-effect waves-light"><span class="fa fa-shopping-cart"></span> Add To Cart</button>
			<button id="btn_buy" class="btn-large waves-effect waves-light"><span class="fa fa-inr"></span> Buy Now</button>
			</div>
		</div>
		<div class="col l7 m6 s12">
			<p><a href="">Home</a> <span class="fa fa-angle-right"></span> 
				<a href="">Mobiles</a> <span class="fa fa-angle-right"></span> <a href=""><?= 
					$mobile->mobile_brand; ?></a> <span class="fa fa-angle-right"></span> <a href=""><?=$mobile->mobile_title ?></a></p>
				<h5><?=$mobile->mobile_title ?></</h5>
				<h3><span class=" fa fa-inr"></span> <?=$mobile->price ?></</h3>
				<h6><b>Highlight</b></h6>
				<ul>
					<li><span class="fa fa-circle"></span> <?=$mobile->mobile_title ?></</li>
					<li><span class="fa fa-circle"></span> <?=$mobile->mobile_color ?></</li>
					<li><span class="fa fa-circle"></span> <?=$mobile->mobile_sim ?></</li>
					<li><span class="fa fa-circle"></span> <?=$mobile->model_no ?></</li>
				</ul>
				<h6><b>Seller</b></h6>
				<ul>
					<li><span class="fa fa-circle"></span> <a href=""><?=$seller->seller_cname ?></a></</li>
					<li><span class="fa fa-circle"></span> 7 days return policy</</li>			
					<li><span class="fa fa-circle"></span> <?=$seller->city ?></</li>
				</ul>
		</div>
	</div>
</body>
</html>