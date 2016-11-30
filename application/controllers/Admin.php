<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$logged_in = $this->session->userdata('is_logged_in');
		$auth_type = $this->session->userdata('auth_type');

		if(!($logged_in == 'yes') || !($auth_type == 'admin')){
			$this->logout();
		}
	}
	public function index()
	{
		$this->load->model("event");
		$data['card_data'] = $this->event->get_events_for_dash();
		$data['dash'] = "active";
		$data['content'] = "admin/dashboard";
		$this->load->view("admin/includes/template",$data);
	}

	public function ad()
	{
		$this->load->model('ad_handler');
		$ad = $this->ad_handler->get_current_ad();
		if($ad)
			$data["ad_path"] = $ad[0];

		$data['ad'] = "active";
		$data['content'] = "admin/upload_ad";
		$this->load->view("admin/includes/template",$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	public function add_supplier()
	{
		$data["supplier"] = 'active';
		$data["content"] = 'admin/supplier/add_supplier';
		$this->load->view('admin/includes/template', $data);
	}

	public function list_supplier()
	{
		$this->load->model('supplier');
		$list = $this->supplier->get_all();
		if($list){
			$data["list"] = $list;
		}
		$data["supplier"] = 'active';
		$data["content"] = 'admin/supplier/list_supplier';
		$this->load->view('admin/includes/template', $data);
	}



	public function edit_del_supplier($id = false,$action = false)
	{
		if($id && $action){
			$this->load->model('supplier');
			if($action === "delete"){
				$this->supplier->delete($id);
				$this->list_supplier();
			}else if($action === "edit"){
				$list = $this->supplier->get_by_id($id);
				if($list){
					$data["list"] = $list;
					$data["supplier"] = 'active';
					$data["content"] = 'admin/supplier/edit_supplier';
					$this->load->view('admin/includes/template', $data);
				}
			}
		}else
			show_404('edit_supplier');
	}

	public function list_tasks($event_id = false)
	{
		$this->load->model('task');
		//$this->task->get_by_event_id("10");
		$list = $this->task->get_tasks_for_dash($event_id);
		if($list){
			$data["list"] = $list;
			$data["event_name"] = $list[0]->event_name;
		}
		$data["dashboard"] = 'active';
		$data["content"] = 'admin/tasks';
		$this->load->view('admin/includes/template', $data);

	}

		public function add_task()
	{	
		$this->load->model('supplier');
		$this->load->model('event');
		$this->load->model('task_type');
		$data["task"] = 'active';
		$data["events"] = $this->event->get_all();
		$data["task_types"] = $this->task_type->get_all();
		$data["suppliers"] = $this->supplier->get_all();
		$data["content"] = 'admin/task/add_task';
		$this->load->view('admin/includes/template', $data);
	}

	public function list_task()
	{
		$this->load->model('task');
		$list = $this->task->get_all();
		if($list){
			$data["list"] = $list;
		}
		$data["task"] = 'active';
		$data["content"] = 'admin/task/list_task';
		$this->load->view('admin/includes/template', $data);
	}

	public function edit_del_task($id = false,$action = false)
	{
		if($id && $action){
			$this->load->model('task');
			if($action === "delete"){
				$this->task->delete($id);
				$this->list_task();
			}else if($action === "edit"){
				$this->load->model('event');
				$this->load->model('task_type');
				$this->load->model('supplier');

				$list = $this->task->get_by_id($id);
				if($list){
					$data["events"] = $this->event->get_all();
					$data["task_types"] = $this->task_type->get_all();
					$data["list"] = $list;
					$data["task"] = 'active';
					$data["suppliers"] = $this->supplier->get_all();
					$data["content"] = 'admin/task/edit_task';
					$this->load->view('admin/includes/template', $data);
				}
			}
		}else
			show_404('edit_task');
	}

	public function add_event()
	{	
		$this->load->model('supplier');
		$data["suppliers"] = $this->supplier->get_all();
		$data["event"] = 'active';
		$data["content"] = 'admin/event/add_event';
		$this->load->view('admin/includes/template', $data);
	}

	public function list_event()
	{
		$this->load->model('event');
		$this->load->model('supplier');
		$list = $this->event->get_all();
		if($list){
			$data["list"] = $list;
		}

		$data["suppliers"] = $this->supplier->get_all();
		$data["event"] = 'active';
		$data["content"] = 'admin/event/list_event';
		$this->load->view('admin/includes/template', $data);
	}

	public function edit_del_event($id = false,$action = false)
	{
		$this->load->model('event');
		$this->load->model('supplier');
		if($id && $action){
			
			if($action === "delete"){
				$this->event->delete($id);
				$this->list_event();
			}else if($action === "edit"){

				$list = $this->event->get_by_id($id);
				if($list){
					$data["list"] = $list;
					$data["event_suppliers"] = $this->supplier->get_event_supplier($id);
					$data["event"] = 'active';
					$data["content"] = 'admin/event/edit_event';
					$this->load->view('admin/includes/template', $data);
				}
			}
		}else
			show_404('edit_supplier');
	}

	public function add_news()
	{
		$data["news"] = 'active';
		$data["content"] = 'admin/news/add_news';
		$this->load->view('admin/includes/template', $data);
	}

	public function list_news()
	{
		$this->load->model('news');
		$list = $this->news->get_all();
		if($list){
			$data["list"] = $list;
		}
		$data["news"] = 'active';
		$data["content"] = 'admin/news/list_news';
		$this->load->view('admin/includes/template', $data);
	}

	public function edit_del_news($id = false,$action = false)
	{

		if($id && $action){
			$this->load->model('news');
			if($action === "delete"){
				$this->news->delete($id);
				$this->list_news();
			}else if($action === "edit"){

				$list = $this->news->get_by_id($id);
				if($list){
					$data["list"] = $list;
					$data["news"] = 'active';
					$data["content"] = 'admin/news/edit_news';
					$this->load->view('admin/includes/template', $data);
				}
			}
		}else
			show_404('edit_news');
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
