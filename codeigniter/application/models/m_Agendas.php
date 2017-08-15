<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_agenda extends CI_Model
{
	 protected $table_name = 'Agenda';
     protected $pk ='Agenda_id';
	
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  $this->load->helper('url');
		  $this->load->database();
     }
	 
	 function get_all_agenda() {
		$sql = "SELECT * FROM ".$table_name;
		$res = $this->db->query($sql);
		return $res->result();
	 }
	 
	 function get_agenda($id) {
		 $sql = "SELECT * FROM ".$table_name." WHERE ".$pk."='".$id."'";
		 $res = $this->db->query($sql);
		 return $res->result();
	 }
	 
	 function count_agenda() {
		$sql = "SELECT * FROM ".$table_name;
		$res = $this->db->query($sql);
		return $res->num_rows();
	 }
	 
	 function certain_agenda($filter, $op) {
		$where='';
		foreach ($filter as $column) {
			for ($counter = 0; $counter<count($column); $counter++){
				if ($counter==0) {
					if ($where == '') $where.=' (';
					else $where .=' AND (';
				}
				else if ($counter+1==count($column)) $where.= $column[0].$op.'"'.$column[$counter].'") ';
				else $where.=$column[0].$op.'"'.$column[$counter].'" OR ';
			}
		}
		
		$sql = 'SELECT * FROM '.$table_name.' WHERE '.$where;
		$res = $this->db->query($sql);
		return $res->result();
	 }
	 
	 function count_certain_agenda($filter, $op) {
		$where='';
		foreach ($filter as $column) {
			for ($counter = 0; $counter<count($column); $counter++){
				if ($counter==0) {
					if ($where == '') $where.=' (';
					else $where .=' AND (';
				}
				else if ($counter+1==count($column)) $where.= $column[0].$op.'"'.$column[$counter].'") ';
				else $where.=$column[0].$op.'"'.$column[$counter].'" OR ';
			}
		}
		
		$sql = 'SELECT * FROM '.$table_name.' WHERE '.$where;
		$res = $this->db->query($sql);
		return $res->num_rows();
	 }
	 
}?>