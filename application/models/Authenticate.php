<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Model {

	private $admin_username = "admin";
	private $admin_password_hash = "202cb962ac59075b964b07152d234b70";


	
	public function auth(){
		return $this->login($this->input->post('password'));
	}


	public function login($pass){

		if($this->input->post('username') === $this->admin_username){

			if(md5($this->input->post('password')) === $this->admin_password_hash){
				return array(
					'is_logged_in' => 'yes',
					'auth_type' => 'admin'
				);
			}

		}else{
			if($this->input->post('username') == NULL){
				return false;
			}

			$this->db->where('username',$this->input->post('username'));
			$query = $this->db->get('login');
			

			

		
			if($query->num_rows() > 0){

				foreach ($query->result() as $row) {
					$salt = $row->salt;
					$password = $row->password;
					$login_id = $row->login_id;
				}


				if(md5($salt.$pass.$salt) == $password){

					$sess_data = array(
						'is_logged_in' => 'yes',
						'auth_type' => 'supplier',
						'login_id' => $login_id
					);
					
					// $this->session->set_userdata($sess_data);

					return $sess_data;
				}
			}
		
		}

		return false;
	}

}

/* End of file authenticate.php */
/* Location: ./application/models/authenticate.php */