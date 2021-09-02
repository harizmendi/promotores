<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('Geolocation');
		$this->load->config('geolocation', true);
		
	}
	function index(){
		 if(count($this->session->get_userdata('user')) > 2) {
		 	 $logueado = $this->session->get_userdata('user'); 
		 	 if(isset($logueado['user']['isAdmin'])){
					redirect('administradores/perfil', 'refresh');
				}else{
					redirect('promotores', 'refresh');
				}
		 } else{
		 	$this->load->view('login');
		 } 
	}
	function registro(){
		
		$data['email'] = $this->input->post('user');
		$data['password'] = md5($this->input->post('password'));
		$user_id = $this->login_model->addUser($data);
		if($user_id != 0){
			$respuesta['success'] = 'true';
			echo json_encode($respuesta);
		}
	
	}
	function iniciasesion(){
		//obtiene ip
		$config = $this->config->config['geolocation'];
		$ip = $this->input->ip_address();
		$this->geolocation->initialize($config);
		$this->geolocation->set_ip_address($ip); // IP to locate
		//obtiene la ciudad
		$city = $this->geolocation->get_city();
		if($city !== FALSE){
		    $data['city'] = $city;
		}
		//obtiene datos de login
		$data['email'] = $this->input->post('user');
		$data['password'] = md5($this->input->post('password'));
		//envía los datos al controlador y realiza la busqueda y actualización en la base de datos
		$user = $this->login_model->login($data);
		// valida que el usuario exista
		if($user != 0){
			$this->session->set_userdata('loggedin', 'true');
			$data['user']['id'] = $user['id'];
			$data['user']['nombre'] = $user['nombre'];
			$data['user']['apellido'] = $user['apellido'];
			$data['user']['email'] = $user['email'];
			$data['user']['isAdmin'] = $user['isAdmin'];
			$data['user']['active'] = $user['active'];
			$data['user']['password'] = $this->input->post('password');
		 	$this->session->set_userdata('user', $data['user']);
			$this->session->set_userdata('error', 'false');
			if($data['user']['isAdmin'] == 1){
				redirect('administradores/perfil', 'refresh');
			}else{
				redirect('promotores', 'refresh');
			}
			$this->load->view('_footer');
		}else{
			$this->session->set_userdata('error', 'true');
			redirect('login', 'refresh');
		}
		
	}
	function desconectar(){
		session_destroy();
		$this->session->set_userdata('error', 'false');
		redirect('login', 'refresh');
	}
	
}
