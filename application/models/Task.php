<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Model {

	public function add()
	{

		$data = array(
			'name' => $this->input->post("name"),
			'task_type_id' => $this->input->post("task_type_id"),
			'event_id' => $this->input->post("event_id"),
			'reward' => $this->input->post("reward"),
			'placeholder_text' => $this->input->post("placeholder_text"),
			'login_id' => $this->input->post('supplier_login_id')!=''?$this->input->post('supplier_login_id'):$this->session->userdata('login_id')
		);

		if ($this->db->insert('task',$data))
		{
			return true;
		}
		return false;

	}

	public function update()
	{
		$data = array(
			'name' => $this->input->post("name"),
			'task_type_id' => $this->input->post("task_type_id"),
			'event_id' => $this->input->post("event_id"),
			'reward' => $this->input->post("reward"),
			'placeholder_text' => $this->input->post("placeholder_text"),
			'login_id' => $this->input->post('supplier_login_id')!=''?$this->input->post('supplier_login_id'):$this->session->userdata('login_id')
		);

		$status = $this->db->where('task_id',$this->input->post('task_id'))->update('task',$data);

		if ($status)
		{
			return true;
		}
		return false;
	}

	public function delete($id = false){
		$status = $this->db->where('task_id',$id)->delete('task');
		if ($status)
		{
			return true;
		}
		return false;
	}

	public function get_by_id($id = false)
	{
		if($this->check_completed($id))
			return false;

		$query = $this->db->select('event.name AS event_name,task.*,task_type.name AS task_type,task_type.image AS task_image,supplier.name AS supplier_name,event_supplier.booth_no')
		->from('task')
		->join('event','task.event_id = event.event_id','inner')
		->join('supplier','supplier.login_id = task.login_id','inner')
		->join('task_type','task.task_type_id = task_type.task_type_id','inner')
		->join('event_supplier','supplier.supplier_id = event_supplier.supplier_id')
		->where('event_supplier.event_id',$id)
		->where('task.task_id',$id)
		->get();
		return $this->fetch_result($query);
	}

	public function get_placeholder_text($id)
	{
		$query = $this->db->select('placeholder_text')->where('task_id',$id)->get('task');
		return $this->fetch_result($query);
	}

	private function check_completed($id)
	{
		$query = $this->db->where('user_id',$this->session->userdata('user_id'))
		->where('task_id',$id)
		->get('task_completed');
		if($query->num_rows() > 0)
			return true;
		else
			return false;
	}

	public function get_by_event_id($id = false)
	{
		$query = $this->db->select('event.name AS event_name,task.*,event.image,task_type.name AS task_type,task_type.image AS task_image,supplier.name AS supplier_name,event_supplier.booth_no')
		->from('task')
		->join('event','task.event_id = event.event_id')
		->join('supplier','supplier.login_id = task.login_id')
		->join('task_type','task.task_type_id = task_type.task_type_id')
		->join('event_supplier','supplier.supplier_id = event_supplier.supplier_id')
		->where('event.event_id',$id)
		->where('event_supplier.event_id',$id)
		->order_by('event_supplier.booth_no','asc')
		->get();
		return $this->fetch_result($query);
	}

	public function get_tasks_for_dash($id = false)
	{
		$query = $this->db->select('event.name AS event_name,event.start,event.end,task.*,task_type.name as task_type,COUNT(task_completed.task_id) as completed')
		->from('task')
		->join('event','task.event_id = event.event_id')
		->join('task_completed','task.task_id = task_completed.task_id','left')
		->join('task_type','task.task_type_id = task_type.task_type_id')
		->where('task.event_id',$id)
		->group_by('task.task_id')
		->get();
		return $this->fetch_result($query);
	}



	public function get_all($login_id = false)
	{
		$this->db->select('supplier.name AS supplier_name,event.name AS event_name,task.*,task_type.name AS task_type,COUNT(task_completed.task_id) AS num_completed')
		->from('task')
		->join('event','task.event_id = event.event_id')
		->join('task_completed','task.task_id = task_completed.task_id','left')
		->join('task_type','task.task_type_id = task_type.task_type_id')
		->join('supplier','task.login_id = supplier.login_id')
		->group_by('task.task_id');
		if($login_id !== false)
			$this->db->where("task.login_id",$login_id);
		$query = $this->db->get();
		return $this->fetch_result($query);
	}

	public function fetch_result($query = false)
	{
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}

}

/* End of file Task.php */
/* Location: ./application/models/Task.php */