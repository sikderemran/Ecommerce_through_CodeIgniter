<?php 	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('admin/adminModel','am');
		}


		public function index(){
			if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
			$this->load->view('admin/index');
			}else{
				return redirect('admin/dashboard');
			}

		}


		public function login(){
			$username=$this->input->post('admin_username');
			$password=$this->input->post('admin_password');
			$result=$this->am->login($username,$password); 
			if($result){
				$admin_session=[
					'admin_username'=>$username,
					'admin_password'=>$password
				];
				$this->session->set_userdata($admin_session);
				return redirect('admin/dashboard');
			}
			else{
				$this->session->set_flashdata('msg','your password and name do not match');
				return redirect('admin/index');
			}
		}

		public function dashboard(){
			 if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$this->load->view('admin/dashboard');
		}
	}

	public function insertProductName(){
		 if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$result=$this->am->insertProductName();
			if ($result) {
				echo json_encode($result);
			}
		}
	}

	public function getAllIteams(){
		 if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$output='';
			$result=$this->am->getAllIteams();
			if ($result) {
					$output .='<select name="iteam_select" id="iteam_select">';
						foreach ($result as $iteam) {
					$output .='<option value='.$iteam->iteam_id.'>'.$iteam->iteam_name.'</option>';
					}
					$output .='</select>';
				}
			}
			echo $output;
		}

	public function insertBrand(){
		if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$iteam=$this->input->post('iteam_select');
			$brandName=$this->input->post('brand_name');
			$result=$this->am->insertBrand($iteam,$brandName);
			if($result){
				echo json_encode($result);
			}
		}
	}

	public function getMobileBrandName(){
			$output='';
			$result=$this->am->getMobileBrandName();
			if($result){
				if(count($result)){
					$output .='<select name="mobile_brand" id="mobile_brand">';
						foreach ($result as $brand) {
						$output .='<option>'.$brand->brand_name.'</option>';
					}
					$output .='</select>';
				}else{
					$output .='<select disabled></select>';
				}
			}
			echo $output;
		 
	}
	public function getAllSeller(){
		if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$output='';
			$result=$this->am->getAllSeller();
			$output=count($result);
			echo $output;
		}
	}
	public function sellers(){
		if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$result=$this->am->sellers();
			$this->load->view("admin/sellers",['sellers'=>$result]);

		}
	}
	public function sellerverified($id){
		if($this->session->userdata('admin_username')=="" && $this->session->userdata('admin_password')==""){
        	return redirect('admin/index');
		}else{
			$result=$this->am->sellerverified($id);
			if($result){
				$this->session->set_flashdata('msg','Sellers Verify Successfully');
				return redirect('admin/sellers');
			}else{
				return redirect('admin/sellers');
			}
		}
	}
}
?>