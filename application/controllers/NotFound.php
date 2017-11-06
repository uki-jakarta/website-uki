<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('v_Start');
		$this->load->view('v_NotFound');
		$this->load->view('v_End');
    }
}