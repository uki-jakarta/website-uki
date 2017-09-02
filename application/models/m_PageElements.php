<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_PageElements extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  $this->load->helper('url');
		  $this->load->helper('api');
     }
	 
	 function main_active_menu ($lang) {
		$url = WEBSITE_API_URL.'get_active_menu/1/'.$lang;
		return get_JSON_data($url);
	 }

	 function get_element($name) {
		 $url = WEBSITE_API_URL.'element?filter=sNama,eq,'.$name;
		 $result = get_JSON_data($url);
		 if (!isset($result['element'][0])) { $result['element'][0] = ''; } 
		 return $result['element'][0];
	 }

	 function update_element($name, $data) {
		 $url = WEBSITE_API_URL.'element/'.$this->get_element($name)['idElemen'];
		 $result = put_JSON_data($url, $data);
		 return $result;
	 }

	function get_menu_tree(){
		$array = $this->get_element('menu');
		$menu = json_decode($array['sIsi'], TRUE);
		if (!isset($menu['menu1'])) { return null; }
		return $menu;
	}
	
/*	function update_menu($data) {
		if (!isset($data['level'])) { return '0'; }
		$currentMenu = $this->get_menu_tree();
		if ($currentMenu == '') $currentMenu = array('menu1'=>array());
		switch ($data['level']){
			case '1':
				array_push($currentMenu['menu1'], $data);
				print_r($currentMenu);
				$updatedMenu = array (
						'sIsi' => json_encode($currentMenu)
				);
				return $this->update_element('menu', $updatedMenu);

			case '2':
			case '3':
			case '4':
		}
	}
	*/
	 
	 
}

?>