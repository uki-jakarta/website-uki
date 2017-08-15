<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->model(array('m_News', 'm_Agenda', 'm_PageElements'));
    }
	 
	public function index()
	{
		$data['test'] = $this->m_PageElements->main_active_menu('id');
		$this->load->view('v_Home', $data);
	}
}
