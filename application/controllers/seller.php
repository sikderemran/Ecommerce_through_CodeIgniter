<?php
  /**
   * 
   */
  class Seller extends CI_Controller
  {
  	
  	public function __construct()
  	{
  		parent::__construct();
      $this->load->model('seller/sellermodel','sm');
  	}
  	public function index(){
  		$this->load->view('seller/index');
  	}
    public function createaccount(){
      $result = $this->sm->CreateAccount();
      $seller_email=$this->input->post('email');
      $seller_password=$this->input->post('password');
      $this->load->view('seller/mymail','',true);
      if($result){/*
        $this->load->library('email');
        $config['charset']='utf-8';
        $config['mailtype']='html';
        $this->email->initialize($config);
        $this->email->to($seller_email);
        $this->email->from('emran@gmail.com');
        $this->email->subject('Create Seller Account');
        $this->email->message($msg);
        if($this->email->send()){
           $session_data=[
            'seller_email' => $seller_email,
            'seller_password' => $seller_password
        ];
          $this->session->set_userdata($session_data);
          $this->load->view('Seller/Dashboard');
        }else{
        return redirect('seller/index');
            }*/
            $session_data=[
            'seller_email' => $seller_email,
            'seller_password' => $seller_password
             ];
          $this->session->set_userdata($session_data);
          $this->load->view('Seller/Dashboard');
      }else{
        return redirect('seller/index');
      }
    }


    public function login(){
      $seller_email=$this->input->post('email');
      $seller_password=$this->input->post('password');
      $result=$this->sm->login();
      if($result){
        $session_data=[
            'seller_email' => $seller_email,
            'seller_password' => $seller_password
        ];
          $this->session->set_userdata($session_data);
          return redirect('seller/Dashboard');
        }else{
          return redirect('seller/index');
        }
    }

    public function check_seller_account(){
      $result=$this->sm->check_seller_account();
      echo json_encode($result);
    }


    public function Dashboard(){
      if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
        $auction_list=$this->sm->get_auction_listing();
        $get_used=$this->sm->used_get_current_listing();
        $this->load->view('seller/Dashboard',['act_list'=>$auction_list,'get_act_list'=>$get_used]);
      }
    }


    public function logout(){
      $this->session->unset_userdata('seller_email');
      $this->session->unset_userdata('seller_password');
      return redirect('seller/index');
    }

    
    public function createlistings(){
      if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
        $result=$this->sm->checkcontact();
        if($result){
          $this->load->view('seller/contactinfo');
        }else{
          $this->load->view('seller/createlistings');
        }
      }
    }

    public function insertSellerContact(){
      if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
        $result=$this->sm->insertSellerContact();
        if($result){
          return redirect("seller/dashboard");
        }else{
          $this->load->view('seller/contactinfo');
        }
      }
    }

    public function mobileUpload(){
      if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
        $this->load->view('seller/listing/mobile');
      }

    }


    public function insertMobileGeneralInfo(){
      if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
        $seller_info=$this->sm->getSellerInfo();
        $seller_id=$seller_info->id;
        $result=$this->sm->insertMobileGeneralInfo($seller_id);

        if($result){
          $output=$result;
        }else{
          return false;
        }
      }
      echo $output;
    }
    public function insertMobileImageUpload(){
      if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
          $mid=$this->input->post('m_id');
          $result=$this->sm->insertMobileImageUpload();
          if($result){
            $output='';
              $imgs=$this->sm->getMobileImage($mid);
              $output.='<div class="row" id="second_section">
                  <div class="col  l3 m3 s12">
                    <center>
                      <div id="show_img">
                        <img src="'.base_url().'mobileImage/'.$imgs->mobile_img_one.'" class="responsive-img">
                      </div>  
                    </center>
                  </div>
                  <div class="col  l3 m3 s12">
                    <center>
                      <div id="show_img">
                        <img src="'.base_url().'mobileImage/'.$imgs->mobile_img_one.'" class="responsive-img">
                      </div>
                    </center>
                  </div>
                  <div class="col  l3 m3 s12">
                    <center>
                      <div id="show_img">
                        <img src="'.base_url().'mobileImage/'.$imgs->mobile_img_one.'" class="responsive-img">
                      </div>
                    </center>
                  </div>
                  <div class="col  l3 m3 s12">
                    <center>
                      <div id="show_img">
                        <img src="'.base_url().'mobileImage/'.$imgs->mobile_img_one.'" class="responsive-img">
                      </div>
                    </center>
                  </div>
                </div>';
              $output .= '';
            echo $output;
          }else{
            return false;
          }
      }
    }
    public function preview($id){
        if($this->session->userdata('seller_email')=="" && $this->session->userdata('seller_password')==""){
        return redirect('seller/index');
      }else{
        $result=$this->sm->preview($id);
        $seller_id=$result->seller_id;
        $get_seller_info=$this->sm->get_seller_info($seller_id);
        if($result){
          $this->load->view('seller/listing/preview',['mobile'=>$result,'seller'=>$get_seller_info]);
        }
      }
    }


  }
 ?>