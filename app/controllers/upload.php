<?php

class Upload extends Controller {
	
	function Upload()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{	
		$this->load->view('uploadForm', array('error' => ' ' ));
	}

	function do_upload()
	{
			// create directory from the title
			// TODO Change Title name to take out spaces etc.
			$title = trim($this->input->post("title"));
			$upload_path = $this->config->item('base_upload_path').$title;
			

			
			mkdir($upload_path, 0777);
		
		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = 'mp3';
		$config['max_size']	= '1000000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
	
		
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			
			$this->load->view('uploadForm', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->load->view('uploadSuccess', $data);
		}
	}	
}
?>