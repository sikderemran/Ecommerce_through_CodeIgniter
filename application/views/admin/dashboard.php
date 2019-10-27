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
		select{
			display: block;
		}
	</style>
</head>
<body>
	<!--Top bar section start -->
	<!-- Top bar section end ---------------------------------------------------------------------->
	<!--Navbar section start-->
	<nav class="orange">
		<div class="nav-wraper">
			<a href="<?= base_url('index.php/admin/index'); ?>" class="brand-logo left">Admin Control</a>
			<!--Search box section start-->
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
				<li><a href=""><span class="fa fa-envelope"></span> Message</a></li>
				<li><a href=""><span class="fa fa-cogs"></span> Setting</a></li>
				<li><a href=""><span class="fa fa-user"></span> Profile</a></li>
			</ul>
			<!--Right menu section end------------------------------------------------------------->
		</div>
	</nav>

		<nav class="menu_nav hide-on-med-and-down">
		<div class="container">
			<div class="nav-wraper">
				<ul class="left">
					<li><a href="">Overview</a></li> 
					<li><a href="" class="modal-trigger" data-target="show_product_modal">Product</a></li>
					<li><a href="" class="modal-trigger" data-target="show_brand_modal">Brand</a></li>
					<li><a href="">Home & Furniture</a></li>
					<li><a href="">Sports  Stationary</a></li>
					<li><a href="">Daily Needs</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="modal" id="show_product_modal">
		<div class="modal-content">
			<h6><span class="fa fa-cubes"> Add Iteam</span><span class="right modal-close"><b>X</b></span></h6>
			<div class="input-field">
				<input type="text" name="product_name" id="product_name">
				<label for="product_name">Iteam Name</label>
			</div>
			<button id="btn_save_product" class="btn waves-effect waves-light">Submit</button>
		</div>
	</div>

	<div class="modal" id="show_brand_modal">
		<div class="modal-content">
			<h6><span class="fa fa-cubes"> Add Brand</span><span class="right modal-close"><b>X</b></span></h6>
			<br/>
			<div id="show_select_iteam_data">
					
			</div>
			<div class="input-field">
				<input type="text" name="brand_name" id="brand_name">
				<label for="brand_name">Brand Name</label>
			</div>
			<button id="btn_save_brand" class="btn waves-effect waves-light">Submit</button>
		</div>
	</div>
	<div class="row" style="margin-top: 15px; margin-left: 5px;">
		<div class="col l3 m6 s12 ">
			<div id="main_box" class="color">
				<div class="row" style="margin-bottom: 10px">
				<div class="col l8 m4 s8">
					<center>
						<h4 class="white-text"><span id="show_seller_number"></span></h4>
						<h6 class="white-text" style="margin-top: -8px;">Sellers</h6>
					</center>
				</div>
				<div class="col l4 m4 s4">
					<h4 class="center-align white-text"><span class="fa fa-users"></span></h4>
				</div>
				</div>
			</div>
		</div>
		<div class="col l3 m6 s12 ">
			<div id="main_box" class="color">
				<div class="row" style="margin-bottom: 10px">
				<div class="col l8 m4 s8">
					<center>
						<h4 class="white-text">24</h4>
						<h6 class="white-text" style="margin-top: -8px;">Sellers</h6>
					</center>
				</div>
				<div class="col l4 m4 s4">
					<h4 class="center-align white-text"><span class="fa fa-users"></span></h4>
				</div>
				</div>
			</div>
		</div>
		<div class="col l3 m6 s12 ">
			<div id="main_box" class="color">
				<div class="row" style="margin-bottom: 10px">
				<div class="col l8 m4 s8">
					<center>
						<h4 class="white-text">24</h4>
						<h6 class="white-text" style="margin-top: -8px;">Sellers</h6>
					</center>
				</div>
				<div class="col l4 m4 s4">
					<h4 class="center-align white-text"><span class="fa fa-users"></span></h4>
				</div>
				</div>
			</div>
		</div>
		<div class="col l3 m6 s12 ">
			<div id="main_box" class="color">
				<div class="row" style="margin-bottom: 10px">
				<div class="col l8 m4 s8">
					<center>
						<h4 class="white-text">24</h4>
						<h6 class="white-text" style="margin-top: -8px;">Sellers</h6>
					</center>
				</div>
				<div class="col l4 m4 s4">
					<h4 class="center-align white-text"><span class="fa fa-users"></span></h4>
				</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
<script type="text/javascript">
	GetItems();
		function GetItems(){
			$.ajax({
				type:'ajax',
				url:'getAllIteams',
				success:function(data){
					$('#show_select_iteam_data').html(data);
				},
				error:function(){
					alert('No Data Found');
				}
			});
		
		}
    getAllSeller();
    function getAllSeller(){
	$.ajax({
		type:'ajax',
		url:'<?= base_url("index.php/admin/getAllSeller"); ?>',
		beforeSend:function(data){
			$('#show_seller_number').text('Waiting');
		},
		success:function(data){
			$('#show_seller_number').html(data);
		},
		error:function(){
				M.toast({html:'Error! Get Seller Load'});
		}
	});
}
</script>