<?php
	/**
	 * 
	 */
	class SellerModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function CreateAccount(){
			$cname=$this->input->post('company_name');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$mobile_no=$this->input->post('mobile_no');
			$pincode=$this->input->post('pincode');
			$pan_no=$this->input->post('pan_no');
			$gst_no=$this->input->post('gst_no');
			$insert_seller = $this->db->insert('seller',['seller_cname'=>$cname,'email'=>$email,'password'=>$password,'mobile_no'=>$mobile_no,'pincode'=>$pincode,'pan_no'=>$pan_no,'gst_no'=>$gst_no,'create_date'=>date('d-m-y'),'seller_month'=>date('m'),'seller_year'=>date('y'),]);
			if($insert_seller){
				return true;
			}else{
				return false;
			}
		}
		public function login(){
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$check_user=$this->db->get_where('seller',['email'=>$email,'password'=>$password]);
			if($check_user->num_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
        public function check_seller_account(){
            $email=$this->session->userdata('seller_email');
            $password=$this->session->userdata('seller_password');
            $check_seller=$this->db->get_where('seller',['email'=>$email,'password'=>$password,'verify_unverify'=>'verify']);
            if($check_seller->num_rows()>0){
                return true;
            }else{
                return false;
            }
        }
		public function checkcontact(){
			$email=$this->session->userdata('seller_email');
			$password=$this->session->userdata('seller_password');
			$check_seller=$this->db->get_where('seller',['email'=>$email,'password'=>$password]);
			if($check_seller->num_rows()>0){
				$seller_id=$check_seller->row('id');
				$check_address=$this->db->get_where('seller',['id'=>$seller_id,'address'=>'']);
				if($check_address->num_rows()>0){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		public function insertSellerContact(){
			$fname=$this->input->post('seller_fname');
			$lname=$this->input->post('seller_lname');
			$address=$this->input->post('seller_address');
			$city=$this->input->post('city');

			$email=$this->session->userdata('seller_email');
			$password=$this->session->userdata('seller_password');

			$check_seller=$this->db->get_where('seller',['email'=>$email,'password'=>$password]);
			if($check_seller->num_rows()>0){
				$seller_id=$check_seller->row('id');

				$update_seller=$this->db->where('id',$seller_id)->update('seller',['f_name'=>$fname,'l_name'=>$lname,'address'=>$address,'city'=>$city]);

				if($update_seller){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

	   public function insertMobileGeneralInfo($seller_id){
	   	
	       $mobile_color=$this->input->post('color');
	       $mobile_sim=$this->input->post('sim');
	       $mobile_otg=$this->input->post('otg');
	       $mobile_title=$this->input->post('mobile_title');
	       $mobile_brand=$this->input->post('mobile_brand');
	       $model_no=$this->input->post('model_no');
	       $price=$this->input->post('price');
		   $insert_general_info=$this->db->insert('mobile',['mobile_color'=>$mobile_color,'mobile_sim'=>$mobile_sim,'mobile_otg'=>$mobile_otg,'mobile_title'=>$mobile_title,'mobile_brand'=>$mobile_brand,'model_no'=>$model_no,'price'=>$price,'seller_id'=>$seller_id]);
			
	       

	       if($insert_general_info){
	        return $this->db->insert_id();
	       }else{
	        return false;
	       }


    	}

    	public function insertMobileImageUpload(){

    		$config['upload_path']= "./mobileImage";
    		$config['allowed_types']= "jpg|jpeg|png";
    		$this->load->library('upload',$config);

    		$mobile_id=$this->input->post('m_id');

    		$img_one_name=$this->upload->do_upload('img_one').$this->upload->data('file_name');
    		$img_two_name=$this->upload->do_upload('img_two').$this->upload->data('file_name');
    		$img_three_name=$this->upload->do_upload('img_three').$this->upload->data('file_name');
    		$img_four_name=$this->upload->do_upload('img_four').$this->upload->data('file_name');

    		$img_one_path=substr($img_one_name,1);
    		$img_two_path=substr($img_two_name,1);
    		$img_three_path=substr($img_three_name,1);
    		$img_four_path=substr($img_four_name,1);

    		$update_img=$this->db->where('mobile_id',$mobile_id)->update('mobile',['mobile_img_one'=>$img_one_path,'mobile_img_two'=>$img_two_path,'mobile_img_three'=>$img_three_path,'mobile_img_four'=>$img_four_path
    			]);

    		if($update_img){

    			$get_mobile_detail=$this->db->get_where('mobile',['mobile_id'=>$mobile_id]);
                
                if($get_mobile_detail->num_rows()>0){
                    
                    $mobile=$get_mobile_detail->row();
                    $insert_live_mobile=$this->db->insert('live_mobile',['mobile_title'=>$mobile->mobile_title,'mobile_brand'=>$mobile->mobile_brand,'mobile_no'=>$mobile->model_no]);
                    
                    if($insert_live_mobile){
                        $delete_mobile=$this->db->where('mobile_id',$mobile_id)->delete('mobile');
                        if($delete_mobile){
                            return true;
                        }else{
                            return false;
                        }
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
    		}else{
    			return false;
    		}
    	}

    	public function getMobileImage($mid){
    		$get_img=$this->db->get_where('mobile',['mobile_id'=>$mid]);
    		if($get_img->num_rows()>0){
    			return $get_img->row();
    		}else{
    			return false;
    		}
    	}
    	public function get_auction_listing(){
    		$semail=$this->session->userdata('seller_email');
    		$spassword=$this->session->userdata('seller_password');
    		$get_seller=$this->db->get_where('seller',['email'=>$semail,'password'=>$spassword]);
    		if($get_seller->num_rows()>0){
    			$seller_id=$get_seller->row('id');
    			$get_auction_listing=$this->db->get_where('seller_listing',['sl_sid'=>$seller_id,'sl_ltype'=>'auction']);
    			if($get_auction_listing->num_rows()>0){
    				return $get_auction_listing->row();
    			}else{
    				return false;
    			}
    		}
    	}
    	public function used_get_current_listing(){
    		$semail=$this->session->userdata('seller_email');
    		$spassword=$this->session->userdata('seller_password');
    		$get_seller=$this->db->get_where('seller',['email'=>$semail,'password'=>$spassword]);
    		if($get_seller->num_rows()>0){
    			$seller_id=$get_seller->row('id');
    			$get_auction_listing=$this->db->get_where('seller_listing',['sl_sid'=>$seller_id,'sl_ltype'=>'auction']);
    			if($get_auction_listing->num_rows()>0){
    				$start_date=$get_auction_listing->row('sl_sdate');
    				$last_date=$get_auction_listing->row('sl_ldate');
    				$get_mobile=$this->db->get_where('mobile',['seller_id'=>$seller_id,'upload_date>='=>$start_date,'upload_date<='=>$last_date]);
    				if($get_mobile->num_rows()>0){
    					return $get_mobile->result();
    				}else{
    					return $get_mobile->result();
    				}

    			}else{
    				return false;
    			}
    		}else{
    			return false;
    		}

    	}
    public function preview($id){
    	$get_mobile_detail=$this->db->get_where('mobile',['mobile_id'=>$id]);
    	if($get_mobile_detail->num_rows()>0){
    		return$get_mobile_detail->row();
    	}else{
    		return false;
    	}
    }
    public function get_seller_info($seller_id){
    	$get_seller_detail=$this->db->get_where('seller',['id'=>$seller_id]);
    	if($get_seller_detail->num_rows()>0){
    		return$get_seller_detail->row();
    	}else{
    		return false;
    	}
    }
    public function getSellerInfo(){
    	$email=$this->session->userdata('seller_email');
    	$password=$this->session->userdata('seller_password');
    	$get_seller_detail=$this->db->get_where('seller',['email'=>$email,'password'=>$password]);
    	if($get_seller_detail->num_rows()>0){
    		return$get_seller_detail->row();
    	}else{
    		return false;
    	}
    }


	}
 ?>