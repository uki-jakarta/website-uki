<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
		 $this->load->library(array('session', 'pagination'));
		 $this->load->model(array('m_PageElements','m_Pages'));
		  
     }

	public function index()
	{
		$name = array (
			'nama' => "Albert Sebastian",
			'page' => 'pages'
		);
		
		$data = array (
			'up' => $this->load->view('admin/v_up',$name,TRUE),
			'down' => $this->load->view('admin/v_down', '', TRUE)
		);

		$data['pagelist'] = $this->m_Pages->all_pages();

		$this->load->view('admin/pages/v_PagesList', $data);
	}
}
