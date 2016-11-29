<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function check_user($fb_data)
	{
        $fb_id = $fb_data["id"];
        $user_name = $fb_data["name"];
        $user_email = $fb_data["email"];

        $user_exists = $this->check_exists($fb_id);
        if(!$user_exists){
            $query = $this->db->insert('user',array(
                "facebook_id" => $fb_id,
                "user_name" => $user_name,
                "user_email" => $user_email
            ));
            if($query){
                return $this->db->insert_id();
            }
        }else{
            return $user_exists;
        }

        return false;
	}

    private function check_exists($fb_id)
    {
        $query = $this->db->where('facebook_id',$fb_id)->get('user');
        return ($query->num_rows() > 0)?$query->row()->user_id:false;
    }

    public function get_all()
    {
        $query = $this->db->get("user");
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

/* End of file User.php */
/* Location: ./application/models/User.php */
