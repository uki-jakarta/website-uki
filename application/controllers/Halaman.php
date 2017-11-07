<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('m_Pages', 'PAGES');
        $this->load->model('m_PageElements', 'PE');
    }

    public function index(){
        $pagename = $this->uri->segment(3);
        if (($pagename == NULL) && ($pagename == '')) {
            redirect('home');
        }
        else {
            $pagedata = $this->PAGES->get_page($pagename);
            foreach ($pagedata as $k => $v) {
                foreach ($v['halaman_var'] as $vk => $vv) {
                    $pagedata[$k][$vv['var_nama']] = $vv['var_value'];
                    $pagedata[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
                }
                unset($pagedata[$k]['halaman_var']);
            }

            $sidebar = $this->PE->get_element('sidebar');
            $sidebar = (array) json_decode($sidebar['isi']);
        

            if (isset($sidebar[$pagedata[0]['sidebar']])) {
                $sidebarlist = array ();
                foreach ($sidebar[$pagedata[0]['sidebar']] as $k => $v) {
                    $sidebarlist[$k]['label'] = $v->label;
                    if ($v->page_id == '') $sidebarlist[$k]['url'] = $v->url;
                    else $sidebarlist[$k]['url'] = $this->PAGES->get_page_link($v->page_id); 
                }
                $pagedata[0]['sidebarlist'] = $sidebarlist;
            }

            $data = array (
                "dataPage" => $pagedata[0]
            );
            $this->load->view('v_Start');
            $this->load->view('v_Page_Layout_'.$pagedata[0]['layout'], $data); 
            $this->load->view('v_End');
        }
    }

}