
$(document).ready(function(){
	$('.dropdown-trigger').dropdown({
		coverTrigger:false,
		hover:true
	});
	$('.sidenav').sidenav();

	$('.carousel.carousel-slider').carousel({
		fullWidth:true,
		indicators:true
	});
	$('.collapsible').collapsible(); 
	/*seller form validation video 15*/
	$('.modal').modal({
		dismissible:false
	});

	$('#btn_save_product').click(function(){
				var product_name=$('#product_name').val();
				if(product_name==""){
					M.toast({html:'Please Enter product Name'});
				}else{
					$.ajax({
						type:'ajax',
						method:'POST',
						url:'insertProductName',
						dataType:'json',
						data:{product_name:product_name},
						success:function(data){
							alert('Product Insert Successfully');
							$('#product_name').val("");
						},
						error:function(){
							alert('Product Insert Error');
						}
					});
				}
			});

	
		$('#btn_save_brand').click(function(){
				var iteam_select=$('#iteam_select').val();
				var brand_name=$('#brand_name').val();
				if(iteam_select==""){
					M.toast({html:'Please Enter iteams Name'});
				}
				else if(brand_name==""){
					M.toast({html:'Please Enter brand Name'});
				}else{
					$.ajax({
						type:'ajax',
						method:'POST',
						url:'insertBrand',
						dataType:'json',
						data:{iteam_select:iteam_select,brand_name:brand_name},
						success:function(data){
							alert('Brand Insert Successfully');
							$('#brand_name').val("");
						},
						error:function(){
							alert('Brand Insert Already');
						}
					});
				}
			});

		$('#second_section').hide();
		$('#btn_submit').hide();
		$('#btn_preview').hide();
		$('#btn_general_info').click(function(){
			var mobile_title=$('#mobile_title').val();
			var mobile_brand=$('#mobile_brand').val();
			var model_no=$('#model_no').val();
			var model_name=$('#model_name').val();
			var color=$('input[name=color]:checked').val();
			var sim=$('input[name=sim]:checked').val();
			var otg=$('input[name=otg]:checked').val();
			var price=$('#price').val();
			
			if(mobile_title==""){
					M.toast({html:'Please Enter Mobile Title'});
				}
			else if(mobile_brand==""){
				M.toast({html:'Please Enter Mobile Brand'});
			}
			else if(model_no==""){
				M.toast({html:'Please Enter Model No'});
			}
			else if(model_name==""){
				M.toast({html:'Please Enter Model Name'});
			}
			else if(color==null){
				M.toast({html:'Please Select a Color'});
			}
			else if(sim==null){
				M.toast({html:'Please Select a Sim'});
			}
			else if(otg==null){
				M.toast({html:'Please Select a OTG'});
			}
			else if(price==""){
				M.toast({html:'Please Enter Price'});
			}
			else{
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'insertMobileGeneralInfo',
					data:{mobile_title:mobile_title,
						mobile_brand:mobile_brand,
						model_no:model_no,
						model_name:model_name,
						color:color,
						sim:sim,
						otg:otg,
						price:price
					},
					success:function(data){
						var id=data;
						$('#mobile_id').val(id);
						$('#mobile_title').prop('disabled',true);
						$('#mobile_brand').prop('disabled',true);
						$('#model_no').prop('disabled',true);
						$('#model_name').prop('disabled',true);
						$('#btn_general_info').prop('disabled',true);
						$('#price').prop('disabled',true);
						$('#second_section').show();
						$('#btn_submit').show();
						$('#btn_preview').show();
						

					},
					error:function(){
						alert('General details insert error');
					}

				});
			}
		});

		//four image upload section start

		$('#img_upload_form').on('submit',function(e){
			e.preventDefault();
	        var img_one=$('#img_one').val();
	        var img_two=$('#img_two').val();
	        var img_three=$('#img_three').val();
	        var img_four=$('#img_four').val();
	       	var mobile_id=$('#mobile_id').val();
	       	$('#m_id').val(mobile_id);
	        if(img_one==""){
	        	M.toast({html:'Please Select image one'});
	        }
	        else if(img_two==""){
	        	M.toast({html:'Please Select image two'});
	        }
	        else if(img_three==""){
	        	M.toast({html:'Please Select image three'});
	        }
	        else if(img_four==""){
	        	M.toast({html:'Please Select image four'});
	        }else{
	        	$.ajax({
	        		url:'insertMobileImageUpload',
	        		method:'POST',
	        		data:new FormData(this),
	        		contentType:false,
	        		cache:false,
	        		processData:false,
	        		success:function(data){
	        			$('#second_section').html(data);
	        			$('#show_cong_modal').modal('open');        			
	        		},
	        		error:function(){
	        			alert('Error Image Upload');
	        		}

	        	});
	       	  }
		});

		$("#mobile_title").keyup(function(){
			var mobile_title=$('#mobile_title').val();
			$('#show_title').html(mobile_title);
		});
		$("#show_mobile_brand").on('change','#mobile_brand',function(){
			var mobile_brand=$('#mobile_brand').val();
			$('#show_brand').html(mobile_brand);
		});
			$("#model_name").keyup(function(){
			var model_name=$('#model_name').val();
			$('#show_name').html(model_name);
		});
			$("#model_no").keyup(function(){
			var model_no=$('#model_no').val();
			$('#show_no').html(model_no);
		});
		$("#price").keyup(function(){
			var mobile_price=$('#price').val();
			$('#show_price').html(mobile_price);
		});

		/*$("#color").click(function(){
			var color=$(input[name="color"]:checked).val();
			alert(color);
		});*/

		$('.modal').modal({
			dismissible:false
		});
		

});
