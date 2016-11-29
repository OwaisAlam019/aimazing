<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		if($this->session->userdata("fb_access_token") == NULL){
			redirect("Site_login");
			// exit();
		}
	}

	public function index()
	{
		$this->load->model('ad_handler');
		$ad = $this->ad_handler->get_current_ad();
		if($ad)
			$data["ad_path"] = $ad[0];

		$this->load->model('event');
		$events = $this->event->get_all();
		if($events){
			$data["events"] = $events;
		}
		$this->load->view('frontend/main',$data);
	}

	public function event($id){
		if($id){
			$this->load->model('ad_handler');
			$ad = $this->ad_handler->get_current_ad();
			if($ad)
				$data["ad_path"] = $ad[0];

			$this->load->model('task');
			$task_list = $this->task->get_by_event_id($id);
			// var_dump($task_list);
			if($task_list){
				$data["task_list"] = $task_list;
				$data["image"] = $task_list[0]->image;
			}
			$this->load->view('frontend/task_list',$data);
		}else{
			show_404('event');
		}
	}

	public function task($id)
	{
		$this->load->model('ad_handler');
		$ad = $this->ad_handler->get_current_ad();
		if($ad)
			$data["ad_path"] = $ad[0];

		$this->load->model('task');
		$task = $this->task->get_by_id($id);
		if($task){
			$data["task"] = $task;
			$data["task_id"] = $id;
			switch (strtolower($task[0]->task_type)) {
				case 'u-turn':
					$this->load->view('frontend/task_uturn', $data);
					break;
				case 'detour':
					$this->load->view('frontend/task_detour', $data);
					break;
				case 'roadblock':
					$this->load->view('frontend/task_roadblock', $data);
					break;
			}
		}else{
			$this->load->view('task_completed',$data);
		}
	}

	public function news($id=false){
		$this->load->model('news');
		$this->load->model('ad_handler');
		$ad = $this->ad_handler->get_current_ad();
		if($ad)
			$data["ad_path"] = $ad[0];

		if($id){
			$news = $this->news->get_by_id($id);
			if($news){
				$data["news"] = $news;
			}
			$this->load->view('frontend/news_view',$data);
		}else{
			$news = $this->news->get_all();
			if($news){
				$data["news"] = $news;
			}
			$this->load->view('frontend/news_list',$data);
		}

	}


	// public function login($exit = false)
	// {
	// 	// $this->load->library('facebook');
	// 	//
	// 	// $login_url = $this->facebook->get_login();
	// 	// $this->load->view("frontend/login_fb",array("login_url"=>$login_url));
	// }

	public function upload()
	{
		$this->load->library('facebook');
		if(isset($_FILES["file"])){
			$this->load->model('task');
			$placeholder_text = $this->task->get_placeholder_text($this->input->post('task_id'));
			$msg = $placeholder_text[0]->placeholder_text;
			$result = $this->facebook->upload($this->session->userdata("fb_access_token"),$_FILES["file"],$msg);
			if($result){
				$this->load->model('task_completed');
				if($this->task_completed->insert($this->input->post('task_id')))
					echo json_encode(true);
				else
					echo json_encode(false);
			}else{
				echo json_encode(false);
			}
		}
		// var_dump($this->session->userdata("fb_access_token"));

	}

	public function post_message()
	{
		$this->load->library('facebook');
		$result = $this->facebook->post_message($this->session->userdata("fb_access_token"),$this->input->post("message"));
		if($result){
			$this->load->model('task_completed');
			if($this->task_completed->insert($this->input->post('task_id')))
				echo json_encode(array("status"=>true));
			else
				echo json_encode(array("status"=>false));
		}else{
			echo json_encode(array("status"=>false));
		}

	}

	public function test()
	{
		// session_start();
		var_dump($_SESSION["fb_access_token"]);
	}

	public function disp_completed()
	{
		$this->load->model('task_completed');
		var_dump($this->task_completed->get_all());
	}

}

/* End of file Site.php */
/* Location: ./application/controllers/Site.php */
