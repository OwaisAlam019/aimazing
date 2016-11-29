<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_type extends CI_Model {

	public function get_all()
	{
		$query = $this->db->get('task_type');
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

/* End of file Task_type.php */
/* Location: ./application/models/Task_type.php */