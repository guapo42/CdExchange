<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends Controller {
    
    function Upload()
    {
        parent::Controller();
        $this->load->helper(array('form', 'url'));
    }
    
    function index()
    {    
        $this->load->view('upload_form');
    }

    function do_upload()
    {
		$title = trim($this->input->post("title"));
		$upload_path = $this->config->item('base_upload_path').$title;
		

		
		mkdir($upload_path, 0777);
        $config['upload_path'] = $upload_path; // server directory
        $config['allowed_types'] = 'gif|jpg|png|mp3'; // by extension, will check for whether it is an image
        $config['max_size']    = '100000'; // in kb
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        $this->load->library('Multi_upload');

        $files = $this->multi_upload->go_upload();
        
        if ( ! $files )        
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }    
        else
        {
            $data = array('upload_data' => $files);
            $this->load->view('upload_success', $data);
        }
    }    
}
?>