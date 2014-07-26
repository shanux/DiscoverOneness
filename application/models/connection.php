<?php

class Connection extends CI_Model{
	
/*	public function __construct(){
 		 $this->load->database(); 
}*/
	public function get_schools()
	{
		$query=$this->db->query('SELECT * FROM school');
		return $query;
	}
}

?>
