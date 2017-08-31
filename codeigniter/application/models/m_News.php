<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_News extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  $this->load->helper('url');
		  $this->load->helper('api');
		  $this->load->database();
     }

	 function get_all_news() {
		$url = WEBSITE_API_URL.'berita';
		$dataBerita = get_JSON_data($url);
		return $dataBerita['berita'];
	 }
	 
	 function get_news($nId) {
		$url = WEBSITE_API_URL.'berita/'.$nId;
		return get_JSON_data($url);
	 }

	 function get_recent_news($total) {
		 $url = WEBSITE_API_URL.'berita?page=1,'.$total;
		 $dataBerita = get_JSON_data($url);
		 return $dataBerita['berita'];
	 }

	 function get_news_details($slugtitle, $date) {
		return 1;
	 }
}?>