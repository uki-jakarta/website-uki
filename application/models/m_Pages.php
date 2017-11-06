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

     function get_page($pagename) {
        $urlvar = WEBSITE_API_URL.'halaman_var?filter[]=var_value,eq,'.$pagename;
        $var = get_JSON_data($urlvar);
        $url = WEBSITE_API_URL.'halaman?filter[]=id_halaman,eq,'.$var['halaman_var'][0]['id_halaman'];
        $result = get_JSON_data($url);
		return $result['halaman'];
     }

     function get_page_link($page_id) {
        $url = $urlvar = WEBSITE_API_URL.'halaman_var?filter[]=id_halaman,eq,'.$page_id.'&filter[]=var_nama,eq,slug';;
        $result = get_JSON_data($url);
        return site_url('halaman/index/'.$result['halaman_var'][0]['var_value']);
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