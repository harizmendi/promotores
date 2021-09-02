<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administradores_model extends CI_Model {

	function updateAdmin($data = null){
		$this->db->where('id', $data['id']);
		$existe = $this->db->get('users')->result_array();
		
		if(count($existe) > 0){
			$this->db->set('nombre', $data['nombre']);
			$this->db->set('apellido', $data['apellido']);
			$this->db->set('email', $data['email']);
			$this->db->set('password', $data['password']);
			$this->db->where('id',$existe[0]['id']);
			$this->db->update('users');
			$this->db->where('id', $data['id']);
		    $existe = $this->db->get('users')->result_array();
			return $existe[0];
		}else{
			return 0;
		}
	}

}



