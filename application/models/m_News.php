<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_News extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('api');
    }

    function get_all_news() {
        $url = WEBSITE_API_URL . 'berita';
        $dataBerita = get_JSON_data($url);
        return $dataBerita['berita'];
    }

    function get_news($nId) {
        $url = WEBSITE_API_URL . 'berita/' . $nId;
        return get_JSON_data($url);
    }

    function get_recent_news($total) {
        $url = WEBSITE_API_URL . 'berita?page=1,' . $total;
        $dataBerita = get_JSON_data($url);
        return $dataBerita['berita'];
    }

    function get_news_details($slugtitle, $date) {
        $url = WEBSITE_API_URL . 'berita?filter[]=dTglPembuatan,ge,'. $date .'%2000:00:00&filter[]=dTglPembuatan,le,' . $date . '%2023:59:59&satisfy=all';
        $allnews = get_JSON_data($url);
        $news = $allnews['berita'];
        foreach ($news as $k =>$v) {
            if (url_title(strtolower($v['judul'])) == $slugtitle) {
                return $v;
            }
        }
        return null;
    }

    function news_list($page = 1, $perpage = 10) {
        $url = WEBSITE_API_URL.'berita?&page='.$page.','.$perpage;
		$result = get_JSON_data($url);
		return $result;
     }

}

?>