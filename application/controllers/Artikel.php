<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('m_PageElements', 'PE');
        $this->load->model('m_Articles', 'ARTICLE');
    }

    public function index() {
        redirect('artikel/list_artikel');
    }

    public function list_artikel() {
        $slug = $this->uri->segment(3);
        if (($slug != '') && (strlen($slug) > 9)) {
            $arrayslug = explode('-', $slug);
            $date = strtotime($arrayslug[0]);
            $slugtitle = substr($slug, 9);
            $articledetail = $this->ARTICLE->get_article_details($slugtitle, date('Y-m-d', $date));
            $meta['page_title'] = $articledetail['judul'];
            foreach ($articledetail['artikel_var'] as $k => $v) {
                $articledetail[$v['var_nama']] = $v['var_value'];
            }
            $meta['og_url'] = rawurlencode(base_url('/artikel/list_artikel/' . $articledetail['slug']));
            $meta['og_desc'] = substr(strip_tags($articledetail['isi']),0,300);
            $meta['og_img'] = json_decode($articledetail['image'])->url;
            unset($articledetail['artikel_var']);

            $recentarticles = $this->ARTICLE->get_recent_articles(5);
            foreach ($recentarticles as $k => $v) {
                foreach ($v['artikel_var'] as $vk => $vv) {
                    $recentarticles[$k][$vv['var_nama']] = $vv['var_value'];
                    $recentarticles[$k][$vv['var_nama'] . '_id'] = $vv['var_id'];
                }
                unset($recentarticles[$k]['artikel_var']);
            }

            $data = array(
                'articledetail' => $articledetail,
                'recentarticles' => $recentarticles
            );
            $this->load->view('v_Start', $meta);
            $this->load->view('v_Article', $data);
            $this->load->view('v_End');
        } else {
            $config = array();
            $config['base_url'] = site_url('artikel/list_artikel');
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

            $data['articles'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
            $articleslist = $this->ARTICLE->articles_list(($data['articles'] / $config["per_page"]), $config["per_page"]);
            $recentarticles = $articleslist['artikel'];
            foreach ($recentarticles as $k => $v) {
                foreach ($v['artikel_var'] as $vk => $vv) {
                    $recentarticles[$k][$vv['var_nama']] = $vv['var_value'];
                    $recentarticles[$k][$vv['var_nama'] . '_id'] = $vv['var_id'];
                }
                unset($recentarticles[$k]['artikel_var']);
            }
            $data['articleslist'] = $recentarticles;
            $config['total_rows'] = isset($articleslist['_results']) ? $articleslist['_results'] : 0;

            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();

            $this->load->view('v_Start');
            $this->load->view('v_ArticleList', $data);
            $this->load->view('v_End');
        }
    }

}
