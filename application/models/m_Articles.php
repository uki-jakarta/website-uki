<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_Articles extends CI_Model
{
	function __construct()
	{
		 // Call the Model constructor
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->helper('api');
	}

	function get_all_articles() {
	   $url = WEBSITE_API_URL.'article';
	   $dataArtikel = get_JSON_data($url);
	   return $dataArtikel['article'];
	}
	
	function get_article($nId) {
	   $url = WEBSITE_API_URL.'article/'.$nId;
	   return get_JSON_data($url);
	}

	function get_recent_articles($total) {
		$url = WEBSITE_API_URL.'article?page=1,'.$total;
		$dataArtikel = get_JSON_data($url);
		return $dataArtikel['article'];
	}
	 
}?>