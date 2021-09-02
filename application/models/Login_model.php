<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {



	public function addUser($data){
		$this->db->where('user',$data['user']);
		$this->db->where('email', $data['email']);
		$existe = $this->db->get('users')->result_array();
		if(count($existe) == 0){
			$this->db->set($data);
			$this->db->insert('usuarios');
			$insert_id = $this->db->insert_id();
		}else{
			$insert_id = 0;
		};

		return $insert_id;

	}
	function login( $data = null){
		
		
		$this->db->where('email', $data['email']);
		$this->db->where('password', $data['password']);
		$existe = $this->db->get('users')->result_array();
	
		if(count($existe) > 0){
			
			$this->db->set('last_login', date('Y-m-d H:i:s'));
			$this->db->set('last_ip_used', $data['city']['ipAddress']);
			$this->db->set('geo_location', 'latitude: ' . $data['city']['latitude'] . ' ' . 'longitude: ' . $data['city']['longitude']);
			$this->db->where('id',$existe[0]['id']);
			$this->db->update('users');
			return $existe[0];
		}else{
			return 0;
		}
	}

}