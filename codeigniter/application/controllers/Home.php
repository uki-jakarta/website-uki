<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
		 $this->load->library('session');
         $this->load->model('m_PageElements','PE');
         $this->load->model('m_Agendas','AGENDA');
         $this->load->model('m_News','NEWS');
		 
     }

	public function index()
	{
        $this->load->view('v_Start');
        $this->load->view('v_Home');
        $this->load->view('v_End');
	}
}
