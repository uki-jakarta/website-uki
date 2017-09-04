<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_Articles extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('api');
    }

    function get_all_articles() {
        $url = WEBSITE_API_URL . 'artikel';
        $dataBerita = get_JSON_data($url);
        return $dataBerita['artikel'];
    }

    function get_article($nId) {
        $url = WEBSITE_API_URL . 'artikel/' . $nId;
        return get_JSON_data($url);
    }

    function get_recent_articles($total) {
        $url = WEBSITE_API_URL . 'artikel?page=1,' . $total;
        $dataBerita = get_JSON_data($url);
        return $dataBerita['artikel'];
    }

    function get_article_details($slugtitle, $date) {
        $url = WEBSITE_API_URL . 'artikel?filter[]=dTglPembuatan,ge,'. $date .'%2000:00:00&filter[]=dTglPembuatan,le,' . $date . '%2023:59:59&satisfy=all';
        $allarticles = get_JSON_data($url);
        $articles = $allarticles['artikel'];
        foreach ($articles as $k =>$v) {
            if (url_title(strtolower($v['judul'])) == $slugtitle) {
                return $v;
            }
        }
        return null;
    }

    function articles_list($page = 1, $perpage = 10) {
        $url = WEBSITE_API_URL.'artikel?&page='.$page.','.$perpage;
		$result = get_JSON_data($url);
		return $result;
     }

}

?>