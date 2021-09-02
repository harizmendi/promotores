<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Promotores extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('administradores_model');
		$this->load->model('promotores_model');
		
		
	}
	function nuevo(){
		$this->load->view('_header');
		$this->load->view('altaPromotor');
		$this->load->view('_footer');
	}
	function addPromotor(){
		
	}
}
	