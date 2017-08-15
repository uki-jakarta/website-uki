<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_Pages extends CI_Model
{	
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  $this->load->helper('url');
		  $this->load->helper('api');
     }

     function all_pages() {
        $url = WEBSITE_API_URL.'halaman';
        $result = get_JSON_data($url);
		return $result['halaman'];
     }

     function total_pages() {
         $url = WEBSITE_API_URL.'halaman';
         $result = count_JSON_data($url);
         return $result;
     }

     function get_page($page_id) {
        $url = WEBSITE_API_URL.'halaman/'.$page_id;
        $result = get_JSON_data($url);
		return $result['halaman'];
     }

     function insert_page($data) {
         $url = WEBSITE_API_URL.'halaman';
         return post_JSON_data($url,$data);
     }

     function update_page($data, $id){
         $url = WEBSITE_API_URL.'halaman';
         return put_JSON_data($url,$data);
     }

     function delete_page($id){
        $data = array(
            'status' => 'deleted'
        );
        return $this->update_page($data, $id);
     }
	 
	 
}?>