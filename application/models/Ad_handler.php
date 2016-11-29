<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_handler extends CI_Model{

    public function __construct()
    {
        parent::__construct();

    }

    public function get_current_ad()
    {
        $directory = 'uploads/ad/';
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));
        if(sizeof($scanned_directory) > 0){
            foreach ($scanned_directory as $img) {
                return array(base_url().$directory.$img,$directory.$img,$img);
            }
        }
        return false;
    }

    public function add_ad(){
        if(isset($_FILES['ad'])){
            return $this->process_image($_FILES['ad']);
        }

        return false;
    }

    public function process_image($file = false)
	{
        // var_dump($file);exit;
        $directory = 'uploads/ad/';
		if($file['error'] === 0){
            @unlink($this->get_current_ad()[1]);
			file_put_contents($directory.$file["name"], file_get_contents($file['tmp_name']));
			return $directory.$file["name"];
		}
		return false;
	}



}
