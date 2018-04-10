<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('m_PageElements', 'PE');
        $this->load->model('m_Informations', 'INFORMATION');
    }

    public function index() {
        redirect('informasi/list_informasi');
    }

    public function list_informasi() {
        $slug = $this->uri->segment(3);
        if (($slug != '')&&(strlen($slug)>9)) {
            $arrayslug = explode('-', $slug);
            $date = strtotime($arrayslug[0]);
            $slugtitle = substr($slug, 9);
            $informationdetail = $this->INFORMATION->get_information_details($slugtitle, date('Y-m-d', $date));
            $meta['page_title'] = $informationdetail['judul'];
            foreach ($informationdetail['informasi_var'] as $k => $v) {
				$informationdetail[$v['var_nama']] = $v['var_value'];
            }
            unset($informationdetail['informasi_var']);

            $recentinformations = $this->INFORMATION->get_recent_informations(5);
            foreach ($recentinformations as $k => $v) {
                foreach ($v['informasi_var'] as $vk => $vv) {
                    $recentinformations[$k][$vv['var_nama']] = $vv['var_value'];
                    $recentinformations[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
                }
                unset($recentinformations[$k]['informasi_var']);
            }

            $data = array (
                'informationdetail' => $informationdetail,
                'recentinformations' => $recentinformations
            );
            $this->load->view('v_Start',$meta);
            $this->load->view('v_Information', $data);
            $this->load->view('v_End');
        } else {
             $config = array ();
             $config['base_url'] = site_url('informasi/list_informasi');		
             $config['per_page'] = 10;
             $config["uri_segment"] = 3;
             $config["num_links"] = 5;

             //config for bootstrap pagination class integration
             $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
             $config['full_tag_close'] = '</ul>';
             $config['first_link'] = false;
             $config['last_link'] = false;
             $config['first_tag_open'] = '<li class="page-item">';
             $config['first_tag_close'] = '</li>';
             $config['prev_link'] = '&laquo';
             $config['prev_tag_open'] = '<li class="prev">';
             $config['prev_tag_close'] = '</li>';
             $config['next_link'] = '&raquo;';
             $config['next_tag_open'] = '<li class="page-item">';
             $config['next_tag_close'] = '</li>';
             $config['last_tag_open'] = '<li class="page-item">';
             $config['last_tag_close'] = '</li>';
             $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
             $config['cur_tag_close'] = '</a></li>';
             $config['num_tag_open'] = '<li class="page-item">';
             $config['num_tag_close'] = '</li>';
             $config['attributes'] = array('class' => 'page-link');            
            
             $data['informations']= ($this->uri->segment(3)) ? $this->uri->segment(3) : 1; 
             $informationslist = $this->INFORMATION->informations_list(($data['informations']/$config["per_page"]), $config["per_page"]);
             $recentinformations = $informationslist['informasi'];
             foreach ($recentinformations as $k => $v) {
                 foreach ($v['informasi_var'] as $vk => $vv) {
                     $recentinformations[$k][$vv['var_nama']] = $vv['var_value'];
                     $recentinformations[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
                 }
                 unset($recentinformations[$k]['informasi_var']);
             }
             $data['informationslist'] = $recentinformations;
             $config['total_rows'] = isset($informationslist['_results']) ? $informationslist['_results'] : 0;

             $this->pagination->initialize($config);
             $data['pagination'] = $this->pagination->create_links();

            $this->load->view('v_Start');
            $this->load->view('v_InformationList', $data);
            $this->load->view('v_End');
        }
    }

}
