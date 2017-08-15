<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
		 $this->load->library('session');
		 $this->load->model(array('m_PageElements'));
		 $this->load->helper('form');
   		 $this->load->helper('url');
		  
     }

	public function index()
	{
		$name = array (
			'nama' => "Albert Sebastian"
		);

		$carousel = $this->m_PageElements->get_element('carousel');
		$data = array (
			'up' => $this->load->view('admin/v_up',$name,TRUE),
			'down' => $this->load->view('admin/v_down', '', TRUE),
			'carousel' => $carousel,
			'upload_data' => '',
			'msg' => ''
		);
		$this->load->view('admin/v_Carousel', $data);
	}

	public function upload_file(){
		$this->load->helper('form');
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|svg|tiff';
		

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types('');

		$data['upload_data'] = '';
    
		//if not successful, set the error message
		if (!$this->upload->do_upload('userfile')) {
			$data = array('msg' => $this->upload->display_errors());

		} else { //else, set the success message
			$data = array('msg' => "Upload success!");
      
      	$data['upload_data'] = $this->upload->data();

		}
		
		//load the view/upload.php
		$this->load->view('v_Carousel', $data);
	}

	public function insert_image(){

	}

	public function update_image(){

	}

	public function delete_image(){

	}

}
