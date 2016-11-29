<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$logged_in = $this->session->userdata('is_logged_in');
		$auth_type = $this->session->userdata('auth_type');
		if($logged_in == 'yes'){
			switch ($auth_type) {
				case 'admin':
					redirect('admin');
					break;
				case 'supplier':
					redirect('supplier');
					break;
			}
		}
	}

	public function index($err = false)
	{
		$data = array();
		if($err === 'login_failed'){
			$data['error'] = true;
		}else if($err === 'auth'){
			$this->auth();
		}

		$this->load->view("login",$data);
	}

	public function auth(){
		$this->load->model("authenticate");
		$data = $this->authenticate->auth();
		if($data){
			$this->session->set_userdata( $data );
			redirect('login');
		}else{
			$this->session->sess_destroy();
			redirect('login/login_failed');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
