<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_Informations extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('api');
    }

    function get_all_informations() {
        $url = WEBSITE_API_URL . 'informasi';
        $dataBerita = get_JSON_data($url);
        return $dataBerita['informasi'];
    }

    function get_information($nId) {
        $url = WEBSITE_API_URL . 'informasi/' . $nId;
        return get_JSON_data($url);
    }

    function get_recent_informations($total) {
        $url = WEBSITE_API_URL . 'informasi?page=1,' . $total;
        $dataBerita = get_JSON_data($url);
        return $dataBerita['informasi'];
    }

    function get_information_details($slugtitle, $date) {
        $url = WEBSITE_API_URL . 'informasi?filter[]=dTglPembuatan,ge,'. $date .'%2000:00:00&filter[]=dTglPembuatan,le,' . $date . '%2023:59:59&satisfy=all';
        $allinformations = get_JSON_data($url);
        $slugtitle = str_replace('-','',$date).'-'.$slugtitle;
        $informations = $allinformations['informasi'];
        foreach ($informations as $k =>$v) {
            foreach ($v['informasi_var'] as $ki => $vi) {
                if (($vi['var_nama'] == 'slug') && ($vi['var_value'] == $slugtitle))
                {
                    return $v;
                }
            }
        }
        return null;
    }

    function informations_list($page = 1, $perpage = 10) {
        $url = WEBSITE_API_URL.'informasi?&page='.$page.','.$perpage;
		$result = get_JSON_data($url);
		return $result;
     }

}

?>