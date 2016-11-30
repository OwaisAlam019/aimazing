<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

	public function add_supplier()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[login.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[password]');
		$this->form_validation->set_rules('conf_password', 'Confirmation Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('supplier');
			if($this->supplier->add()){
				$data["status"] = true;
				$data["supplier"] = 'active';
				$data["content"] = 'admin/supplier/add_supplier';
				$this->load->view('admin/includes/template', $data);
			}

		} else {
			$data["supplier"] = 'active';
			$data["content"] = 'admin/supplier/add_supplier';
			$this->load->view('admin/includes/template', $data);
		}
	}

	public function update_supplier()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		if ($this->form_validation->run() == TRUE) {

			$this->load->model('supplier');
			if($this->supplier->update()){
				redirect('admin/list_supplier');
			}

		}

		redirect("admin/supplier/edit/".$this->input->post("login_id"));
	}

	public function update_supplier_credentials()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('supplier');
			if($this->supplier->update_password()){
				redirect('admin/list_supplier');
			}
		} else {
			redirect("admin/supplier/edit/".$this->input->post("login_id"));
		}
	}

	public function add_event()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('start', 'Start Date', 'required');
		$this->form_validation->set_rules('end', 'End Date', 'required');
		
		$this->load->model('event');
		$this->load->model('supplier');
		if ($this->form_validation->run() == TRUE) {

			if($this->event->add()){
				$data["event"] = 'active';
				$data["status"] = 'true';
				$data["suppliers"] = $this->supplier->get_all();
				$data["content"] = 'admin/event/add_event';
				$this->load->view('admin/includes/template', $data);
			}

		} else {
			$data["event"] = 'active';
			$data["suppliers"] = $this->supplier->get_all();
			$data["content"] = 'admin/event/add_event';
			$this->load->view('admin/includes/template', $data);
		}
	}

	public function update_event()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('start', 'Start Date', 'required');
		$this->form_validation->set_rules('end', 'End Date', 'required');

		if ($this->form_validation->run() == TRUE) {

			$this->load->model('event');
			if($this->event->update()){
				redirect('admin/list_event');
			}

		}

		redirect("admin/event/edit/".$this->input->post("login_id"));
	}

	public function add_news()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('details', 'Details', 'required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('news');
			if($this->news->add()){
				$data["news"] = 'active';
				$data["status"] = 'true';
				$data["content"] = 'admin/news/add_news';
				$this->load->view('admin/includes/template', $data);
			}

		} else {
			$data["news"] = 'active';
			$data["content"] = 'admin/news/add_news';
			$this->load->view('admin/includes/template', $data);
		}
	}

	public function update_news()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('details', 'Details', 'required');

		if ($this->form_validation->run() == TRUE) {

			$this->load->model('news');
			if($this->news->update()){
				redirect('admin/list_news');
			}

		}

		redirect("admin/edit_del_news/".$this->input->post("news_id")."/edit");
	}

	public function add_ad()
	{

		$this->load->model('ad_handler');
		if($this->ad_handler->add_ad()){
			redirect('admin/ad');
		}

		redirect("admin/ad/");
	}



	public function add_task()
	{
		$this->form_validation->set_rules('name', 'Task Name', 'required');
		$this->form_validation->set_rules('reward', 'Reward', 'required');
		$this->form_validation->set_rules('task_type_id', 'Task Type', 'required');
		$this->form_validation->set_rules('event_id', 'Event', 'required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('task');
			if($this->task->add()){
				$this->load->model('event');
				$this->load->model('task_type');
				$this->load->model('supplier');
				$data["task"] = 'active';
				$data["events"] = $this->event->fetch_valid_events();
				$data["task_types"] = $this->task_type->get_all();
				$data["status"] = 'true';
				if ($this->input->post('supplier_login_id')!="") {
				$data["suppliers"] = $this->supplier->get_all();
				$data["content"] = 'admin/task/add_task';
				$this->load->view('admin/includes/template', $data);
				
				}
				else{
					$data["content"] = 'supplier/task/add_task';
					$this->load->view('supplier/includes/template', $data);
				}
			}

		} else {
			
			if ($this->input->post('supplier_login_id')!="") {
				$data["suppliers"] = $this->supplier->get_all();
				$data["task"] = 'active';
				$data["content"] = 'admin/task/add_task';
				$this->load->view('admin/includes/template', $data);
			}
			else{
				$data["task"] = 'active';
				$data["content"] = 'supplier/task/add_task';
				$this->load->view('supplier/includes/template', $data);
			}
		}
	}

	public function update_task()
	{
		$this->form_validation->set_rules('name', 'Task Name', 'required');
		$this->form_validation->set_rules('reward', 'Reward', 'required');
		$this->form_validation->set_rules('task_type_id', 'Task Type', 'required');
		$this->form_validation->set_rules('event_id', 'Event', 'required');

		if ($this->form_validation->run() == TRUE) {

			$this->load->model('task');
			if($this->task->update()){
				if ($this->input->post('supplier_login_id')!="") {
					redirect('admin/list_task');
				}
				redirect('supplier/list_task');
			}

		}
		if ($this->input->post('supplier_login_id')!="") {
					redirect("admin/edit_del_task/".$this->input->post("task_id")."/edit");
				}
		redirect("supplier/edit_del_task/".$this->input->post("task_id")."/edit");
	}

}

/* End of file Process.php */
/* Location: ./application/controllers/Process.php */
