<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
	<title></title>
	<!--Shortcut icon-->
	<link rel="shortcut icon" type="text/css" href="<?= base_url('img/logoNav.png'); ?>">
	<!--Meterialize css -->
	<?= link_tag('asset/materialize/materialize/css/materialize.css'); ?>
	<?= link_tag('asset/font_awesome/css/font-awesome.css'); ?>
	<?= link_tag('asset/mystyle/mystyle.css'); ?>
</head>
<body>
	<!--Top bar section start -->
	<div id="top_bar" class="hide-on-med-and-down">
		<span><span class="fa fa-phone"></span> Mobile No. 011768069070 | <span class="fa fa-envelope"></span> Email : emran@gmail.com</span>
		<span class="right"><span class="fa fa-gift"></span> Gift Card | Sell On Shop</span>
	</div>
	<!-- Top bar section end ---------------------------------------------------------------------->
	<!--Navbar section start-->
	<nav class="orange">
		<div class="nav-wraper">
			<a href="<?= base_url('index.php/home/index'); ?>" class="brand-logo left">Shop</a>
			<!--Search box section start-->
			<?=form_open(); ?>
			<input type="text" name="" class="hide-on-med-and-down" id="set_search">
			<button class="btn waves-effect waves-light hide-on-med-and-down"id="set_search_btn">Submit</button>
			<?=form_close(); ?>
			<!--Search box section end------------------------------------------------------------->
			<!--menu button section start-->
			<a href="" class="sidenav-trigger right" data-target="mobile_menu"><i class="meterial-icons">Menu</i></a>
			<!--menu button section end------------------------------------------------------------>
			<!--Mobile menu section start-->
			<ul class="sidenav" id="mobile_menu">
				<li><a href="" class="orange white-text">Product Categories</a></li>
				<li><a href="<?= base_url('index.php/home/melectronicmenu');?>">Electronics</a></li>
				<li><a href="<?= base_url('index.php/home/mmenfashionmenu');?>">Men Fashion</a></li>
				<li><a href="">Women Fashoin</a></li>
				<li><a href="">Home & Furniture</a></li>
				<li><a href="">Sports  Stationary</a></li>
				<li><a href="">Daily Needs</a></li>
			</ul>
			<!--Mobile menu section end------------------------------------------------------------>
			<!--Right menu section start-->
			<ul class="right hide-on-med-and-down">
				<li><a href=""><span class="fa fa-shopping-cart"></span> Cart</a></li>
				<li><a href=""><span class="fa fa-sign-in"></span> SignUp</a></li>
				<li><a href=""><span class="fa fa-sign-in"></span> LogIn</a></li>
			</ul>
			<!--Right menu section end------------------------------------------------------------->
		</div>
	</nav>
	<!--Navbar section end------------------------------------------------------------------------->
	<!--Menu bar section start-->
	<nav class="menu_nav hide-on-med-and-down">
		<div class="container">
			<div class="nav-wraper">
				<ul class="left">
					<li><a href="" class="dropdown-trigger" data-target="electronic_menu">Electronics</a></li>
					<!--Electronics dropdown menu section start-->
						<ul class="dropdown-content" id="electronic_menu">
							<!--menu section start-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6 >Mobile</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Mobile Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Laptop</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m4 s12">
									<img src="<?=base_url('img/1.jpg');?>" class="responsive-img" style="margin-top:26px; height: 120px;">
								</div>
								<div class="col l3 m6 s12">
									<h6>Tablets</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computer</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computer Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m4 s12">
									<img src="<?=base_url('img/1.jpg');?>" class="responsive-img" style="margin-top:26px; height: 120px;">
								</div>
							</div>
							<!--menu section end--------------------------------------------------->
						</ul>
					<!--Electronics dropdown menu section end-------------------------------------->
					<!--Men fashion drop down section start-->
					<li><a href="" class="dropdown-trigger" data-target="men_fashion_menu">Men Fashion</a></li>
						<ul class="dropdown-content" id="men_fashion_menu">
							<!--menu section start-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6 >Mobile</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Mobile Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Laptop</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m4 s12">
									<img src="<?=base_url('img/1.jpg');?>" class="responsive-img" style="margin-top:26px; height: 120px;">
								</div>
								<div class="col l3 m6 s12">
									<h6>Tablets</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computer</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computer Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="">one</a>
										<a href="" class="blue-text">View More</a>
									</ul>
								</div>
								<div class="col l3 m4 s12">
									<img src="<?=base_url('img/1.jpg');?>" class="responsive-img" style="margin-top:26px; height: 120px;">
								</div>
							</div>
							<!--menu section end--------------------------------------------------->
						</ul>
						<!--Men fashion drop down section end-------------------------------------->
					<li><a href="">Women Fashion</a></li>
					<li><a href="">Home & Furniture</a></li>
					<li><a href="">Sports  Stationary</a></li>
					<li><a href="">Daily Needs</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Menu bar section end----------------------------------------------------------------------->
	<!--Mobile menu bar section start-->
	<div class="orange hide-on-med-and-up" style="padding: 5px;">
		<center>
			<?= form_open(); ?>
			<input type="text" name="" id="set_mobile_search" placeholder="Search product & Brands">
			<?= form_close(); ?>
		</center>
	</div>
	<!--Mobile menu bar section end-->
	<!--image slider section start-->
	<div class="carousel carousel-slider">
		<a class="carousel-item" href=""><img src="<?=base_url('img/1.jpg');?>"></a>
		<a class="carousel-item" href=""><img src="<?=base_url('img/22.jpg');?>"></a>
		<a class="carousel-item" href=""><img src="<?=base_url('img/33.jpg');?>"></a>
	</div>
	<!--image slider section end------------------------------------------------------------------->
	<!--Today deal offer section start-->
	<div class="row">
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<!--Today deal offer end----------------------------------------------------------------->
		<!--Electronic banner section start-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="<?=base_url('img/1.jpg');?>" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="<?=base_url('img/1.jpg');?>" class="responsive-img">
			</div>
		</div>
		<!--Electronic banner section end-------------------------------------------------------->
		<!--Electronic product section start-->
		<h6>Electronic Products</h6>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<!--Electronic product section End---------------------------------------------------------------->
		<!--men fashion banner start-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="<?=base_url('img/1.jpg');?>" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="<?=base_url('img/1.jpg');?>" class="responsive-img">
			</div>
		</div>
		<!--men fashion banner end------------------------------------------------------------------------>
		<!--Men Fashion product section start-->
		<h6>Men Fashion</h6>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image"><img src="<?=base_url('img/1.jpg');?>" class="responsive-img"></div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span> 150-/</h6>
					<p>70% off</p>
				</div>
			</div>
		</div>
	</div>
	<!--Men Fashion product section end---------------------------------------------------------------->
	<!--Footer section start-->
	<footer class="page-footer">
		<!--footer column start-->
		<div class="container">
			<div class="row">
				<div class="col l3 m6 s12">
					<h5>About Us</h5>
				</div>
				<div class="col l3 m6 s12">
					<h5>Categories</h5>
					<ul>
						<li><a href="">Women Fashion</a></li>
						<li><a href="">Home & Furniture</a></li>
						<li><a href="">Sports  Stationary</a></li>
						<li><a href="">Daily Needs</a></li>
					</ul>
				</div>
				<div class="col l3 m6 s12">
					<h5>Important Link</h5>
					<ul>
						<li><a href="">Women Fashion</a></li>
						<li><a href="">Home & Furniture</a></li>
						<li><a href="">Sports  Stationary</a></li>
						<li><a href="">Daily Needs</a></li>
					</ul>
				</div>
				<div class="col l3 m6 s12">
					<h5>Developer Address</h5>
					<p><span class="fa fa-map-marker"></span> Khagan,Ashulia,Dhaka</p>
					<p><span class="fa fa-phone"></span> 01768069070</p>
					<p><span class="fa fa-envelope"></span> emran@gmail.com</p>
					<p><span class="fa fa-globe"></span> www.emran.com.bd</p>
					<!--social media section start-->
					<ul id="set_social_icon">
						<li><a href=""><span class="fa fa-facebook"></span></a></li>
						<li><a href=""><span class="fa fa-instagram"></span></a></li>
						<li><a href=""><span class="fa fa-twitter"></span></a></li>
						<li><a href=""><span class="fa fa-youtube"></span></a></li>
					</ul>
					<!--social media section end----------------------------------------------------->
				</div>
			</div>
		</div> 
		<!--Footer column end-------------------------------------------------------------------------->
		<div class="footer-copyright">
			<div class="container">
				@2019 To <?= date('Y') ?> Copyright All Reserved
				<a href="" class="grey-text text-lighten-4 right">Design and develop by Emran</a>
			</div>
		</div>
	</footer>
	<!--Footer section end----------------------------------------------------------------------------->
	<script type="text/javascript" src="<?= base_url('asset/js/jquery.js');?>"></script>
	<!--Meterialize js -->
	<script type="text/javascript" src="<?= base_url('asset/materialize/materialize/js/materialize.js');?>"></script>
	<!--custop js-->
	<script type="text/javascript" src="<?= base_url('asset/mystyle/mystyle.js');?>"></script>

</body>
</html>
