<?php

class Mix extends Controller {

	function Mix()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('header');
		$this->load->view('welcome');
		$this->load->view('footer');
	}
	
	function create()
	{
		$this->load->helper(array('form'));

		$this->load->view('header');
		$this->load->view('create');
		$this->load->view('footer');
	}
	
	function edit()
	{

		$this->load->view('header');
		$this->load->view('edit');
		$this->load->view('footer');
	}
	
	function view()
	{
		$this->load->helper('file');
	
		$base = $this->config->item('base_upload_path');
		echo "<pre>";
		print_r(get_dir_file_info($base));
		print_r(get_dir_file_info("/tmp/"));
		echo "</pre>";
		
		
		
		$this->load->view('header');
		$this->load->view('viewAll');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */