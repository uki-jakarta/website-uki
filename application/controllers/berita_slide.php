<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_Slide extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
    }

    public function index() {
        redirect('berita_slide/slide');
    }

    public function slide() {
        $this->load->view('v_Start');
        $this->load->view('v_BeritaList');
        $this->load->view('v_End');
    }

}
