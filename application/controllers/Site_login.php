<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index($err = false)
	{
        $this->load->library('facebook');

        $login_url = $this->facebook->get_login();
        $this->load->view("frontend/login_fb",array("login_url"=>$login_url));
	}

    public function login_callback(){
		$this->load->library('facebook');
		// var_dump($this->session->userdata("fb_access_token"));
		$access_token = $this->facebook->login($this->session->userdata("fb_access_token"));
		$this->session->set_userdata(array("fb_access_token"=>(string) $access_token));
		$result = $this->facebook->get_user_profile($access_token);
		if($result){
			$this->load->model('user');
			$user_id = $this->user->check_user($result);
			if($user_id){
				$this->session->set_userdata(array("user_id"=>$user_id));
				redirect("site");
			}
		}
		// redirect("site");

	}



}

/* End of file Site_login.php */
/* Location: ./application/controllers/Site_login.php */
