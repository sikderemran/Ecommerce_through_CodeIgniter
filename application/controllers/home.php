<?php 
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		public function index(){
			$this->load->view('Home/index');
		}
		public function melectronicmenu(){
			$this->load->view('Home/melectronicproductmenu');
		}
		public function mmenfashionmenu(){
			$this->load->view('Home/mmenfashionproductmenu');
		}
	}
?>