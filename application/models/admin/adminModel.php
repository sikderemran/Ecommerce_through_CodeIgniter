<?php 
	/**
	 * 
	 */
	class adminModel extends CI_Model
	{
		
		function __construct()
		{
			
		}
		public function login($username,$password){
			$check_admin=$this->db->get_where('admin',['admin_username'=>$username,'admin_password'=>$password]);
			if($check_admin->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}


		public function insertProductName(){
			$pname=$this->input->post('product_name');
			$check_pname=$this->db->get_where('brand',['iteam_name'=>$pname]);
			if($check_pname->num_rows() > 0){
				return false;
			}else{
				$insert_product=$this->db->insert('brand',['iteam_name'=>$pname]);
				if($insert_product){
					return true;
				}else{
					return false;
				}
			}
		} 

		public function getAllIteams(){
			$get_iteam=$this->db->select()
								->from('brand')
								->get();
			if($get_iteam->num_rows()>0){
				return $get_iteam->result();
			}else{
				return $get_iteam->result();
			}
		}

		public function insertBrand($iteam,$brand){
			$check_brand=$this->db->get_where('iteam',['iteam_id'=>$iteam,'brand_name'=>$brand]);
			if($check_brand->num_rows()>0){
				return false;
			}else{
				$insert_brand=$this->db->insert('iteam',['iteam_id'=>$iteam,'brand_name'=>$brand]);
			if($insert_brand){
				return true;
			}else{
				return false;
				}
			}
			
		}

		public function getMobileBrandName(){
			$get_iteam=$this->db->get_where('brand',['iteam_name'=>'mobile']);
			if($get_iteam->num_rows()>0){
				$iteam_id=$get_iteam->row('iteam_id');
				$get_brand=$this->db->get_where('iteam',['iteam_id'=>$iteam_id]);
				if($get_brand->num_rows()>0){
					return $get_brand->result();
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		public function getAllSeller(){
			$get_seller=$this->db->select()->from('seller')->order_by('id','dsc')->get();
			if($get_seller->num_rows()>0){
				return $get_seller->result();
			}else{
				return $get_seller->result();
			}
		}
		public function sellers(){
			$get_seller=$this->db->select()->from('seller')->order_by('id','dsc')->get();
			if($get_seller->num_rows()>0){
				return $get_seller->result();
			}else{
				return $get_seller->result();
			}
		}
		public function sellerverified($id){
			$check_verify=$this->db->get_where('seller',['id'=>$id,'verify_unverify'=>'']);
			if($check_verify->num_rows()>0){
				$update_verify=$this->db->where('id',$id)->update('seller',['verify_unverify'=>'Verify']);
				if($update_verify){
					$insert_listing=$this->db->insert('seller_listing',['sl_sid'=>$id,'sl_sdate'=>date('y-m-d'),'sl_ldate'=>date('y-m-d',strtotime("+7 days")),'sl_ltype'=>'auction','sl_month'=>date('m'),'sl_year'=>date('y')]);
					if($insert_listing){
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
		}


	}
?>