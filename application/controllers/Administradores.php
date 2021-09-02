<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administradores extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('administradores_model');
		$this->load->model('promotores_model');
		
		
	}
	function index(){
		$this->perfil();
	}
	function perfil(){
		$this->load->view('_header');
		$this->load->view('perfilAdmin');
		$this->load->view('_footer');
	}
	function promotores(){
		$this->load->view('_header');
		$data['promotores'] = $this->promotores_model->getAll();
		$this->load->view('promotores', $data);
		$this->load->view('_footer');
	}
	function marcas(){
		$this->load->view('_header');
		$this->load->view('marcas');
		$this->load->view('_footer');
	}
	function tiendas(){
		$this->load->view('_header');
		$this->load->view('tiendas');
		$this->load->view('_footer');
	}
	function updatePerfil(){

		$user = $this->session->get_userdata('user');;
		$data['id'] = $user['user']['id'];
		$data['nombre'] = $this->input->post('nombre');
		$data['apellido'] = $this->input->post('apellido');
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));
		$user = $this->administradores_model->updateAdmin($data);
		if(count($user) != 0){
			$data['user']['id'] = $user['id'];
			$data['user']['nombre'] = $user['nombre'];
			$data['user']['apellido'] = $user['apellido'];
			$data['user']['email'] = $user['email'];
			$data['user']['isAdmin'] = $user['isAdmin'];
			$data['user']['active'] = $user['active'];
			$data['user']['password'] = $this->input->post('password');
		 	$this->session->set_userdata('user', $data['user']);
		 	$this->session->set_userdata('actualizado', 'true');
		 	redirect('administradores/perfil', 'refresh');
		 }
		 

	}
}