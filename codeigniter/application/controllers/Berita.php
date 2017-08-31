<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
         $this->load->library('session');
         $this->load->helper('url');
         $this->load->model('m_PageElements','PE');
         $this->load->model('m_News','NEWS');
		 
     }

	public function index()
	{
       redirect('berita/list_berita');
    }
    
    public function list_berita()
    {
        $slug = $this->uri->segment(3);
        if ($slug!='') {
            $arrayslug = explode('-', $slug);
            $date = strtotime($arrayslug[0]);
            $slugtitle = substr($slug, 8);
            $newsdetail = $this->NEWS->get_news_details($slugtitle, date('Y-m-d',$date));
            print_r($newsdetail);
        }
        else {

        }
    }

}
