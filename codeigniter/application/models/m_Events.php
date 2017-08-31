<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_Events extends CI_Model
{
	function __construct()
	{
		 // Call the Model constructor
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->helper('api');
		 $this->load->database();
	}

	function get_all_events() {
	   $url = WEBSITE_API_URL.'event';
	   $dataEvent = get_JSON_data($url);
	   return $dataEvent['event'];
	}
	
	function get_event($nId) {
	   $url = WEBSITE_API_URL.'event/'.$nId;
	   return get_JSON_data($url);
	}

	function get_recent_events($total) {
		$url = WEBSITE_API_URL.'event?page=1,'.$total;
		$dataEvent = get_JSON_data($url);
		return $dataEvent['event'];
	}
	
	 
}?>