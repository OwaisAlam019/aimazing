<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_completed extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function insert($task_id)
    {
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->insert('task_completed',array(
            'task_id' => $task_id,
            'user_id' => $user_id
        ));

        if($query){
            return true;
        }

        return false;

    }

    public function get_all()
    {
        return $this->fetch_result(
            $this->db->get('task_completed')
        );
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
