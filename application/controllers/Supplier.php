<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);

		$logged_in = $this->session->userdata('is_logged_in');
		$auth_type = $this->session->userdata('auth_type');

		if(!($logged_in == 'yes') || !($auth_type == 'supplier')){

			$this->logout();
		}
	}

	public function index()
	{

		$data['dash'] = "active";
		$data['content'] = "supplier/dashboard";
		$this->load->view("supplier/includes/template",$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}


	public function add_task()
	{
		$this->load->model('event');
		$this->load->model('task_type');
		$data["task"] = 'active';
		$data["events"] = $this->event->get_all();
		$data["task_types"] = $this->task_type->get_all();
		$data["content"] = 'supplier/task/add_task';
		$this->load->view('supplier/includes/template', $data);
	}

	public function list_task()
	{
		$this->load->model('task');
		$list = $this->task->get_all($this->session->userdata("login_id"));
		if($list){
			$data["list"] = $list;
		}
		$data["task"] = 'active';
		$data["content"] = 'supplier/task/list_task';
		$this->load->view('supplier/includes/template', $data);
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

				$list = $this->task->get_by_id($id);
				if($list){
					$data["events"] = $this->event->get_all();
					$data["task_types"] = $this->task_type->get_all();
					$data["list"] = $list;
					$data["task"] = 'active';
					$data["content"] = 'supplier/task/edit_task';
					$this->load->view('supplier/includes/template', $data);
				}
			}
		}else
			show_404('edit_task');
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */
