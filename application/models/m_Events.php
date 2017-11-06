<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_Events extends CI_Model
{
	function __construct()
	{
		 // Call the Model constructor
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->helper('api');
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

	function get_event_details($slugtitle, $date) {
        $url = WEBSITE_API_URL . 'event?filter[]=tanggal_pembuatan,ge,'. $date .'%2000:00:00&filter[]=tanggal_pembuatan,le,' . $date . '%2023:59:59&satisfy=all';
		$allevent = get_JSON_data($url);
        $event = $allevent['event'];
        foreach ($event as $k =>$v) {
            if (url_title(strtolower($v['judul'])) == $slugtitle) {
                return $v;
            }
        }
        return null;
    }

	function get_upcoming_events($total = 0) {
		if ($total==0) { $time = strtotime("-2 year", time()); $url = WEBSITE_API_URL.'event?filter=dTglAwal,ge,'.date("Y-m-d%20H:i:s", $time); }
		else { $url = WEBSITE_API_URL.'event?filter=dTglAwal,ge,'.date("Y-m-d%20H:i:s").'&order[]=dTglAwal,asc&page=1,'.$total;}
		$dataEvent = get_JSON_data($url);
		return $dataEvent['event'];
	}
	
	 
}?>