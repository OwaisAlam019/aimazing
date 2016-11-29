<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Model {

	public function add()
	{
		$data = array(
			'name' => $this->input->post("name"),
			'start' => date("Y-m-d", strtotime($this->input->post("start"))),
			'end' => date("Y-m-d", strtotime($this->input->post("end")))
		);

		$processed_image = $this->process_image($_FILES["image"]);

		if($processed_image){
			$data['image'] = $processed_image;
		}

		if ($this->db->insert('event',$data))
		{
			return true;
		}
		return false;

	}

	public function update()
	{
		$data = array(
			'name' => $this->input->post("name"),
			'start' => date("Y-m-d", strtotime($this->input->post("start"))),
			'end' => date("Y-m-d", strtotime($this->input->post("end")))
		);

		$processed_image = $this->process_image($_FILES["image"]);

		if($processed_image){
			$data['image'] = $processed_image;
		}

		$status = $this->db->where('event_id',$this->input->post('event_id'))->update('event',$data);

		if ($status)
		{
			return true;
		}
		return false;
	}

	public function delete($id = false){
		$status = $this->db->where('event_id',$id)->delete('event');
		if ($status)
		{
			return true;
		}
		return false;
	}

	public function get_events_for_dash()
	{
		$query = $this->db->select('event.name AS event_name,event.start,event.end,event.event_id,COUNT(task.task_id) AS total_tasks')
		->from('event')
		->join('task','event.event_id = task.event_id','left')
		->group_by('event.event_id')
		->get();

		$res = $this->fetch_result($query);
		if($res){
			foreach ($res as $key => $value) {
				$query2 = $this->db->select("COUNT(task_completed_id) as tasks_completed")
						->from('task')
						->join('task_completed','task.task_id = task_completed.task_id')
						->where('task.event_id',$value->event_id)->get();
				$tot_completed = $this->fetch_result($query2);
				if($tot_completed)
					$res[$key]->tasks_completed = $tot_completed[0]->tasks_completed;
			}
		}
		return $res;
	}

	public function get_by_id($id = false)
	{
		$query = $this->db->where('event_id',$id)->get('event');

		return $this->fetch_result($query);
	}

	public function fetch_valid_events()
	{
		$query = $this->db->where('NOW() BETWEEN start AND end')->get('event');
		return $this->fetch_result($query);
	}

	public function get_all()
	{
		$query = $this->db->get('event');
		return $this->fetch_result($query);
	}

	public function process_image($file = false)
	{
		if($file['error'] === 0){
			$timestamped_filename = 'uploads/events/'.mt_rand().'_'.str_replace(' ','_', $file['name']);
			file_put_contents($timestamped_filename, file_get_contents($file['tmp_name']));
			return $timestamped_filename;
		}
		return false;
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

/* End of file Event.php */
/* Location: ./application/models/Event.php */
