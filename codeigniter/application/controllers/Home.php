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
        $carousel = $this->PE->get_element('MainCarousel');
        $pengumuman = $this->PE->get_element('MainPengumuman');
        $isiPengumuman = json_decode($pengumuman['sIsi']);
        $data = array(
            'carousel' => json_decode($carousel['sIsi']),
            'pengumuman' => $isiPengumuman[0]
        );

        $this->load->view('v_Start');
        $this->load->view('v_Home', $data);
        $this->load->view('v_End');
	}
}
