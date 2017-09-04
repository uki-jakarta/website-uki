<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
		 $this->load->library('session');
		 $this->load->model(array('m_PageElements'));
		 
     }

	public function index()
	{
		$name = array (
			'nama' => "Albert Sebastian",
			'page' => 'dashboard'
		);
		$data = array (
			'up' => $this->load->view('admin/v_up',$name,TRUE),
			'down' => $this->load->view('admin/v_down', '', TRUE)
		);
		$data['menu'] = $this->m_PageElements->get_menu_tree();
		$test = array (
			'menu1_id' => 15,
			'menu2' => array (),
			'nama' => 'Menu_Test',
			'path' => 'test/path',
			'icon' => '',
			'alias' => 'Menu Test',
			'level' => 1
		);
		$this->m_PageElements->update_menu($test);
		$this->load->view('admin/v_Dashboard', $data);
	}
}
