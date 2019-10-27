<!DOCTYPE html>
<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
<html>
<head>
	<title>online d top seller account</title>
	<!--Shortcut icon-->
	<link rel="shortcut icon" type="text/css" href="<?= base_url('img/logoNav.png'); ?>">
	<!--Meterialize css -->
	<?= link_tag('asset/materialize/materialize/css/materialize.css'); ?>
	<?= link_tag('asset/mystyle/mystyle.css'); ?>
	<?= link_tag('asset/font_awesome/css/font-awesome.css'); ?>
	<!--jquery-->
	<script type="text/javascript" src="<?= base_url('asset/js/jquery.js');?>"></script>
	<!--Meterialize js -->
	<script type="text/javascript" src="<?= base_url('asset/materialize/materialize/js/materialize.js');?>"></script>
	<!--custop js-->
	<script type="text/javascript" src="<?= base_url('asset/mystyle/mystyle.js');?>"></script>
</head>
<body class="seller_body">
	<!--Top bar section start-->
	<!--Left Menu section start-->
	<nav style="height: 35px; line-height: 35px">
		<div class="nav-wrapper">
			<ul class="left">
				<li><a class="dropdown-trigger" data-target="show_user_profile" href=""><span class="fa fa-user"></span> Hi User</a></li>
				<!--Dropdown menu section start-->
				<ul class="dropdown-content" id="show_user_profile">
					<li><a href=""><span class="fa fa-picture-o"></span> Company Profile</a></li>
					<li><a href=""><span class="fa fa-cogs"></span> Account Setting</a></li>
					<li><a href="<?= base_url('index.php/seller/logout'); ?>"><span class="fa fa-sign-out"></span> Logout</a></li>
				</ul>
				<!--Dropdown menu section end-->
				<li><a href=""><span class="fa fa-phone"></span> Help & Contact</a></li>
			</ul>
	<!--Left menu section end-->
	<!--Right menu section start-->
			<ul class="right">
				<li><a href=""><span class="fa fa-cubes"></span> Sell</a></li>
				<li><a href=""><span class="fa fa-bell"></span> Notification</a></li>
				<li><a href=""><span class="fa fa-shopping-cart"></span> Cart</a></li>
			</ul>
	 	</div>
	</nav>
	<!--Right menu section end-->
	<!--Top bar section end-------------------------------------------->
	<!--Name section start-->
	<h4>Online Shop</h4>
	<!--Name section end-->
	<h5>Seller Hub <span style="font-size: 18px;"><a href=""> Profile Name</a></span></h5>
	<!--Menu bar section Start-->
	<nav class="left_right">
		<div class="nav-wrapper">
			<!--Left Menu bar start-->
			<ul class="left" id="left_menu">
				<li><a href="">Overview</a></li>
				<li><a class="dropdown-trigger" href="#show_order">Orders</a></li>
					<ul class="dropdown-content" id="show_order">
						<li><a href="">All Orders</a></li>
						<li><a href="">Awaiting Payment</a></li>
						<li><a href="">Awaiting Shipment</a></li>
						<li><a href="">Paid & Shipped</a></li>
						<li><a href="">Cancelations</a></li>
						<li><a href="">Return</a></li>
					</ul>
				<li><a href="#show_listings" class="dropdown-trigger">Listings</a></li>
				<!--Listing dropdown menu start-->
				<ul class="dropdown-content" id="show_listings">
						<li><a href="<?= base_url('index.php/seller/createlistings');?>">Create Listings</a></li>
						<li><a href="">Active</a></li>
						<li><a href="">Unsold</a></li>
				</ul>
				<!--Listing dropdown menu end--------------------------------->
				<li><a href="#show_marketing" class="dropdown-trigger">Marketing</a></li>
				<!--Marketing dropdown menu start-->
				<ul class="dropdown-content" id="show_marketing">
						<li><a href="">Price offers</a></li>
						<li><a href="">Quentity Offers</a></li>
						<li><a href="">Create Sale</a></li>
				</ul>
				<!--Marketing dropdown menu start------------------------------->
				<li><a href="">Performance</a></li>
			</ul>
			<!--Left menu bar end-->
			<!--Right Menu bar start-->
			<ul class="right" id="right_menu">
				<li><a href="">Messages (0)</a></li>
				<li><a href="">Comments (0)</a></li>
			</ul>
			<!--Right menu bar end-->
		</div>
	</nav>
	<!--Menu bar section end------------------------------------------->
	<br/>
	<!--Data section start-->
	<div class="row">
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border:1px solid orange; border-radius: 5px;">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Unread Messages</h6>
				<center><h5>52</h5></center>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border:1px solid orange; border-radius: 5px;">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Awaiting Shipment</h6>
				<center><h5>52</h5></center>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border:1px solid orange; border-radius: 5px;">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Sales (Last 31 Days)</h6>
				<center><h5>52</h5></center>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border:1px solid orange; border-radius: 5px;">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Today Sales</h6>
				<center><h5>52</h5></center>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border:1px solid orange;border-radius: 5px; ">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Today Feedback</h6>
				<center><h5>52</h5></center>
			</div>
		</div>
		<div class="col l2 m4 s12" style="padding: 5px;">
			<div id="box" style="border:1px solid orange;border-radius: 5px;">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Seller Level</h6>
				<center><h5>Above Standard</h5></center>
			</div>
		</div>
	</div>
	<!--Data section End----------------------------------------------->
	<!--task and sell section start-->
	<div class="row">
		<div class="col l4 m4 s12" style="padding: 5px">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Seller Level</h6>
				<ul id="set_task">
					<li><a href="">Message<span class="badge orange white-text">5</span></a></li>
					<li><a href="">Shipments<span class="badge orange white-text">5</span></a></li>
					<li><a href="">Feedback<span class="badge orange white-text">5</span></a></li>
				</ul>
			</div>
		</div>
		<div class="col l8 m8 s12" style="padding: 5px;">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Sales</h6>
				<div class="row">
					<div class="col l3 m3 s12">
						<center>
							<h6>Today Sell</h6>
							<h5><span class="fa fa-inr">25,000</span></h5>
						</center>
					</div>
					<div class="col l3 m3 s12">
						<center>
							<h6>Last 7 Days</h6>
							<h5><span class="fa fa-inr">25,000</span></h5>
						</center>
					</div>
					<div class="col l3 m3 s12">
						<center>
							<h6>Last 31 Days</h6>
							<h5><span class="fa fa-inr">25,000</span></h5>
						</center>
					</div>
					<div class="col l3 m3 s12">
						<center>
							<h6>Last 90 Days</h6>
							<h5><span class="fa fa-inr">25,000</span></h5>
						</center>
					</div>
				</div>
				<!--Sell progress bar section start-->
					<div class="row">
						<div class="col l3 m3 s6" style="padding: 10px;">
							<div class="progress" style="height: 10px">
								<div class="determinate" style="width: 50%;">
									
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6" style="padding: 10px;">
							<div class="progress" style="height: 10px">
								<div class="determinate" style="width: 50%;">
									
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6" style="padding: 10px;">
							<div class="progress" style="height: 10px">
								<div class="determinate" style="width: 50%;">
									
								</div>
							</div>
						</div>
						<div class="col l3 m3 s6" style="padding: 10px;">
							<div class="progress" style="height: 10px">
								<div class="determinate" style="width: 50%;">
									
								</div>
							</div>
						</div>
					</div>
				<!--Sell progress bar section end------------------>
			</div>
		</div>
		<!--Selling tool section start-->
		<div class="col l4 m4 s12"style="padding: 10px;">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Selling Tool</h6>
				<ul id="selling_tool">
					<li><a href="">My Profile (Profile Name)</a></li>
					<li><a href="">View My Listings</a></li>
					<li><a href="">Manage Profile</a></li>
					<li><a href="">Create Sale</a></li>
					<li><a href="">My Performance</a></li>
				</ul>
			</div>
		</div>
		<div class="col l4 m4 s12"style="padding: 10px;">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Seller Level</h6>
				<ul id="selling_tool">
					<li><a href="">Current Seller Level<span class="right">Above Standard</span></a></li>
					<li><a href="">Transaction (Last 12 Months)<span class="right">250</span></a></li>
					<li><a href="">Sales (Last 12 Months)<span class="right"><span class="fa fa-inr"></span>25,0000</span></a></li>
				</ul>
			</div>
		</div>
		<div class="col l4 m4 s12"style="padding: 10px;">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Listings Offers</h6>
				<h6><b>Fixed Price Listings</b></h6>
				<p>
					Start Date 04-05-19<br/>
					End Date   10-05-19
				</p>
				<h6>Used/Left : <a href="">250</a>/250</h6>
				<hr/>
				<h6><b>Auction Price Listings</b></h6>
				<!--<p>
					Start Date <?=$act_list->sl_sdate; ?><br/>
					End Date   <?=$act_list->sl_ldate; ?>
				</p>
				<h6>Used/Left : <a href=""><?= count($get_act_list);?></a>/<?=$act_list->sl_num; ?></h6> -->
			</div>
		</div>
		<!--Selling tool section end-->
		<!--Feedback section start-->
		<div class="col l4 m4 s12"style="padding: 10px;">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Feedback (Last 31b days)</h6>
				<ul id="selling_tool">
					<li><a href="">Positive <span class="right badge orange white-text">5</span></a></li>
					<li><a href="">Negative<span class="right badge orange white-text">5</span></a></li>
				</ul>
				<hr/>
				<ul id="selling_tool">
					<li><a href="">My Profile (Profile Name)</a></li>
					<li><a href="">View My Listings</a></li>
					<li><a href="">Manage Profile</a></li>
					<li><a href="">Create Sale</a></li>
					<li><a href="">My Performance</a></li>
				</ul>
			</div>
		</div>
		<div class="col l4 m4 s12"style="padding: 10px;">
			<div class="" style="border:1px solid orange">
				<h6 style="background:orange;margin-top: 0px; margin-bottom: 0px; font-size: 16px; padding:5px; color: white;">Account Summery</h6>
				<h6><b>Invoice</b></h6>
				<p>
					Last Invoice 04-05-19<br/>
					New Invoice   10-05-19
				</p>
				<hr/>
				<h6><b>Our Blance</b></h6>
				<h6>Balance : <span class="fa fa-inr">24000</span></h6>
			</div>
		</div>
		<!--Feedback section end---------------------------------------->
	</div>
	<!--Task and sell section end--------------------------------------->
	<!--<div id="un_verify_modal" class="modal">
		<div class="modal-content">
			<h5>Please wait....</h5>
		</div>
		
	</div>-->
</body>
</html>
<script type="text/javascript">
	/*$(function(){
		$.ajax({
			type:'ajax',
			url:'<?=base_url('index.php/seller/check_seller_account')?>',
			dataType:'json',
			success:function(data){
				$('#un_verify_modal').modal('open');
			},
			error:function(){
				$('#un_verify_modal').modal('open');
			}
		});
	});
	$(document).raedy(function(){
		$('.modal').modal({
			dismissible:false,

		});
	});*/
</script>