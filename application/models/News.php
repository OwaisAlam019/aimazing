<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model {

	public function add()
	{
		$processed_image = $this->process_image($_FILES["image"]);
		$data = array(
			'title' => $this->input->post("title"),
			'details' => $this->input->post("details"),
			'image' => $processed_image
		);
		
		if ($this->db->insert('news',$data))
		{
			return true;
		}
		return false;

	}

	public function update()
	{
		$data = array(
			'title' => $this->input->post("title"),
			'details' => $this->input->post("details")
		);

		$processed_image = $this->process_image($_FILES["image"]);

		if($processed_image){
			$data['image'] = $processed_image;
		}
		
		$status = $this->db->where('news_id',$this->input->post('news_id'))->update('news',$data);

		if ($status)
		{
			return true;
		}
		return false;
	}

	public function delete($id = false){
		$status = $this->db->where('news_id',$id)->delete('news');
		if ($status)
		{
			return true;
		}
		return false;
	}

	public function get_by_id($id = false)
	{
		$query = $this->db->where('news_id',$id)->get('news');

		return $this->fetch_result($query);
	}

	public function get_all()
	{
		$query = $this->db->get('news');
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

	public function process_image($file = false)
	{
		if($file['error'] === 0){
			$timestamped_filename = 'uploads/news/'.mt_rand().'_'.str_replace(' ','_', $file['name']);
			file_put_contents($timestamped_filename, file_get_contents($file['tmp_name']));
			return $timestamped_filename;
		}
		return false;
	}

}

/* End of file News.php */
/* Location: ./application/models/News.php */