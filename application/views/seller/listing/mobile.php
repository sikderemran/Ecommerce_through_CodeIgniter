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
<body class="m_body">
	<input type="text" name="mobile_id" id="mobile_id" style="display: none">
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border:1px solid rgba(0,0,0,0.2); padding: 10px; background-color: white; border-radius: 3px;">
				<h4>General Details</h4>
				
				<div id="first_section">
					<h6>Mobile Title:</h6>

					<input type="text" name="mobile_title" id="mobile_title">
					<table class="table">
						<tr>
							<td>
								<h6 style="font-size: 14px;">Mobile Brand:</h6>
								<div id="show_mobile_brand">
									<!--<select name="mobile_brand" id="mobile_brand">
										<option>one</option>
									</select>-->
								</div>
							</td>
							<td>
								<h6 style="font-size: 14px;">Model No.</h6>
								<input type="text" name="model_no" id="model_no">
							</td>
							<td>
								<h6 style="font-size: 14px;">Mobile Name</h6>
								<input type="text" name="model_name" id="model_name">
							</td>
						</tr>
					<tr>
						
						<td>
							<h6 style="font-size: 14px;">Mobile Color</h6>
							<p>
								<label>
									<input type="radio" name="color" id="white" value="white">
									<span>white</span>
								</label>
							</p>
						</td>
						<td>
							<p>
								<label>
									<input type="radio" name="color" id="black" value="black">
									<span>Black</span>
								</label>
							</p>
						</td>
						<td>
							<p>
								<label>
									<input type="radio" name="color" id="blue" value="blue">
									<span>Blue </span>
								</label>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<h6 style="font-size: 14px;">Sim Type</h6>
							<p>
								<label>
									<input type="radio" name="sim" id="single_sim" value="Single Sim">
									<span>Single Sim</span>
								</label>
							</p>
						</td>
						<td>
							<p>
								<label>
									<input type="radio" name="sim" id="double_sim" value="Double Sim">
									<span>Double Sim:</span>
								</label>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<h6 style="font-size: 14px;">OTG Support:</h6>
							<p>
								<label>
									<input type="radio" name="otg" id="otg_yes" value="Yes">
									<span>Yes</span>
								</label>
							</p>
						</td>
						<td>
							<p>
								<label>
									<input type="radio" name="otg" id="otg_no" value="No">
									<span>No</span>
								</label>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<h6 style="font-size: 14px;">Price:</h6>
							<p>
								<label>
									<input type="text" name="price" id="price">
								</label>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<button class="btn waves-effect waves-light" id="btn_general_info">Save & Continue</button>
						</td>
					</tr>
				</table>
				</div>
				
				<div>
				<h6>Mobile Uploads</h6>
			<form method="post" id="img_upload_form" enctype="multipart/form-data">
				<div class="row" id="second_section">
					<div class="col  l3 m3 s12">
						<center>
							<div id="show_img">
								<br/>
							</div>
							<input type="file" name="img_one" id="img_one">
						</center>
					</div>
					<div class="col  l3 m3 s12">
						<center>
							<div id="show_img">
								<br/>
							</div>
							<input type="file" name="img_two" id="img_two">
						</center>
					</div>
					<div class="col  l3 m3 s12">
						<center>
							<div id="show_img">
								<br/>
							</div>
							<input type="file" name="img_three" id="img_three">
						</center>
					</div>
					<div class="col  l3 m3 s12">
						<center>
							<div id="show_img">
								<br/>
							</div>
							<input type="file" name="img_four" id="img_four">
						</center>
					</div>
				</div>
			</div>
			<input type="text" name="m_id" id="m_id" value="40" style="display: none;">
			<button id="btn_submit" class="btn waves-effect waves-light">Submit</button>		
		</form>
		<button id="btn_preview" class="btn waves-effect waves-light">Preview</button>
		</div>
			</div>
		<div class="col l4 m4 s12">
		 	<div style="border:1px solid silver;padding: 10px;">
		 		<h4> Preview Section: <span class="fa fa-eye"></span></h4>
		 		<p style="color: silver;font-size: 13px;">Title</p>
		 		<p id="show_title" style="margin-top: -13px;">Title:</p>
		 		<p style="color: silver;font-size: 13px;">Brand Name</p>
		 		<p id="show_brand" style="margin-top: -13px;">Brand Name:</p>
		 		<p style="color: silver;font-size: 13px;">Price</p>
		 		<p id="show_price" style="margin-top: -13px;">Price:</p>
		 		<p style="color: silver;font-size: 13px;">Model No.</p>
		 		<p id="show_no" style="margin-top: -13px;">Model No:</p>
		 		<p style="color: silver;font-size: 13px;">Model Name</p>
		 		<p id="show_name" style="margin-top: -13px;">Model Name:</p>
		 	</div>
		</div>
	</div>
	<div class="modal" id="show_cong_modal">
		<div class="modal-content">
			<h6>Upload Listing Message.<span class="right modal-close">X</span></h6>
			<h3 class="center-align"><span class="fa fa-check" style="color:orange;border:3px solid orange; border-radius: 100%;"></span></h3>
			<h3 class="center-align">Congratulation!</h3>
			<h6 class="center-align">Your Listing Upload Successfully</h6>
			<a href="<?=base_url('index.php/seller/mobileupload'); ?>" class="btn waves-effect waves-light">Create New Listing</a>
			<a href="<?= base_url('index.php/seller/dashboard'); ?>" class="btn waves-effect waves-light">Dashboard</a>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(function(){
		getMobileBrandName();
		function getMobileBrandName(){
			$.ajax({
				type:'ajax',
				url:'../admin/getMobileBrandName',
				success:function(data){
					$('#show_mobile_brand').html(data);
				},
				error:function(){
					alert('Error ! Get Mobile Brand');
				}
			});
		}
	});
	$('#btn_preview').click(function(){
			var mobile_id=$('#mobile_id').val();
			window.location.href='<?= base_url('index.php/seller/preview/'); ?>'+mobile_id;
			$('body').load(url);
	});
</script>