<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Promotores_model extends CI_Model {

	function getAll(){
		$this->db->where('active' ,1);
		$this->db->where('isAdmin', 0);
		$existe = $this->db->get('users')->result_array();
		
		if(count($existe) > 0){
			
			return $existe[0];
		}else{
			return 0;
		}
	}

}


