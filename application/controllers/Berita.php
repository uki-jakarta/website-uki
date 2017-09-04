<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('m_PageElements', 'PE');
        $this->load->model('m_News', 'NEWS');
    }

    public function index() {
        redirect('berita/list_berita');
    }

    public function list_berita() {
        $slug = $this->uri->segment(3);
        if (($slug != '')&&(strlen($slug)>9)) {
            $arrayslug = explode('-', $slug);
            $date = strtotime($arrayslug[0]);
            $slugtitle = substr($slug, 9);
            $newsdetail = $this->NEWS->get_news_details($slugtitle, date('Y-m-d', $date));

            foreach ($newsdetail['berita_var'] as $k => $v) {
				$newsdetail[$v['var_nama']] = $v['var_value'];
            }
            unset($newsdetail['berita_var']);

            $recentnews = $this->NEWS->get_recent_news(5);
            foreach ($recentnews as $k => $v) {
                foreach ($v['berita_var'] as $vk => $vv) {
                    $recentnews[$k][$vv['var_nama']] = $vv['var_value'];
                    $recentnews[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
                }
                unset($recentnews[$k]['berita_var']);
            }

            $data = array (
                'newsdetail' => $newsdetail,
                'recentnews' => $recentnews
            );
            $this->load->view('v_Start');
            $this->load->view('v_News', $data);
            $this->load->view('v_End');
        } else {
             $config = array ();
             $config['base_url'] = site_url('berita/list_berita');		
             $config['per_page'] = 10;
             $config["uri_segment"] = 3;
             $config["num_links"] = 5;
     
             //config for bootstrap pagination class integration
             $config['full_tag_open'] = '<ul style="text-align:center" class="pagination">';
             $config['full_tag_close'] = '</ul>';
             $config['first_link'] = false;
             $config['last_link'] = false;
             $config['first_tag_open'] = '<li>';
             $config['first_tag_close'] = '</li>';
             $config['prev_link'] = '&laquo';
             $config['prev_tag_open'] = '<li class="prev">';
             $config['prev_tag_close'] = '</li>';
             $config['next_link'] = '&raquo';
             $config['next_tag_open'] = '<li>';
             $config['next_tag_close'] = '</li>';
             $config['last_tag_open'] = '<li>';
             $config['last_tag_close'] = '</li>';
             $config['cur_tag_open'] = '<li class="active"><a href="#">';
             $config['cur_tag_close'] = '</a></li>';
             $config['num_tag_open'] = '<li>';
             $config['num_tag_close'] = '</li>';            
            
             $data['news']= ($this->uri->segment(3)) ? $this->uri->segment(3) : 1; 
             $newslist = $this->NEWS->news_list(($data['news']/$config["per_page"]), $config["per_page"]);
             $recentnews = $newslist['berita'];
             foreach ($recentnews as $k => $v) {
                 foreach ($v['berita_var'] as $vk => $vv) {
                     $recentnews[$k][$vv['var_nama']] = $vv['var_value'];
                     $recentnews[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
                 }
                 unset($recentnews[$k]['berita_var']);
             }
             $data['newslist'] = $recentnews;
             $config['total_rows'] = isset($newslist['_results']) ? $newslist['_results'] : 0;

             $this->pagination->initialize($config);
             $data['pagination'] = $this->pagination->create_links();

            $this->load->view('v_Start');
            $this->load->view('v_NewsList', $data);
            $this->load->view('v_End');
        }
    }

}
