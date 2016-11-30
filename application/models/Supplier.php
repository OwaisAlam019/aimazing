<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Model {


	public function add()
	{
		$salted_arr = $this->saltify($this->input->post("password"));
		// var_dump($_FILES);
		$processed_logo = $this->process_logo($_FILES["logo"]);

		$this->db->trans_start();
		$data = array(
			'username' => $this->input->post("username"),
			'password' => $salted_arr["pass"],
			'salt' => $salted_arr["salt"]
		);
		$this->db->insert('login',$data);
		$login_id = $this->db->insert_id();
		$data = array(
			'login_id' => $login_id,
			'name' => $this->input->post("name"),
			'image' => $processed_logo
		);
		$this->db->insert('supplier',$data);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE)
		{
			return true;
		}
		return false;

	}

	public function update()
	{
		$this->db->trans_start();


		$data = array(
			'name' => $this->input->post("name")
		);
		$processed_logo = $this->process_logo($_FILES["logo"]);

		if($processed_logo){
			$data['image'] = $processed_logo;
		}

		$this->db->where('login_id',$this->input->post('login_id'))->update('supplier',$data);


		$data = array(
			'username' => $this->input->post("username")
		);
		$this->db->where('login_id',$this->input->post('login_id'))->update('login',$data);
		

		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE)
		{
			return true;
		}
		return false;
	}

	public function update_password()
	{
		$salted_pass = $this->saltify($this->input->post('password'));
		if($this->db->where('login_id',$this->input->post('login_id'))->update('login',array('password'=>$salted_pass['pass'],'salt'=>$salted_pass['salt'])))
			return true;
		return false;
	}

	public function delete($id = false){
		$status = $this->db->where('login_id',$id)->delete('supplier');
		if ($status)
		{
			return true;
		}
		return false;
	}

	public function get_by_id($id = false)
	{
		$query = $this->db->select('login.username,supplier.*')
		->from('login')
		->join('supplier','login.login_id = supplier.login_id')
		->where('supplier.login_id',$id)
		->get();

		return $this->fetch_result($query);
	}

	public function get_all()
	{
		$query = $this->db->select('login.username,supplier.*')
		->from('login')
		->join('supplier','login.login_id = supplier.login_id')
		->get();

		return $this->fetch_result($query);
	}

	public function process_logo($file = false)
	{
		if($file['error'] === 0){
			$timestamped_filename = 'uploads/'.mt_rand().'_'.str_replace(' ','_', $file['name']);
			file_put_contents($timestamped_filename, file_get_contents($file['tmp_name']));
			return $timestamped_filename;
		}
		return false;
	}

	public function saltify($pass,$length = 4) {
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);
    	$randomString = '';

    	for ($i = 0; $i < $length; $i++) {
        	$randomString .= $characters[mt_rand(0, $charactersLength - 1)];
    	}

    	return array("salt"=>$randomString,"pass"=>md5($randomString.$pass.$randomString));
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

	public function get_event_supplier($id)
	{
		$this->db->select("*")
			     ->from("event_supplier")
			     ->join('supplier','event_supplier.supplier_id = supplier.supplier_id')
			     ->where('event_supplier.event_id',$id);
		$result=$this->db->get();
		return $result->result_array();



	}


}

/* End of file Supplier.php */
/* Location: ./application/models/Supplier.php */