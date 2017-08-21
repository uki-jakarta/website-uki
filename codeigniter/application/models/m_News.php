<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_News extends CI_Model
{
	 protected $table_name = 'Berita';
     protected $pk ='berita_id';
	
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  $this->load->helper('url');
		  $this->load->helper('api');
		  $this->load->database();
     }

	 function get_all_news() {
		$url = WEBSITE_API_URL.'news/';
		return get_JSON_data($url);
	 }
	 
	 function get_news($nId) {
		$url = WEBSITE_API_URL.'news/'.$nId;
		return get_JSON_data($url);
	 }
	 
	 function count_news() {

	 }
}?>