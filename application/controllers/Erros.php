<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Erros extends CI_Controller {

	public function __construct() {

		parent::__construct();

		// load base_url
		$this->load->helper('url');
	}

	public function index(){

		$this->output->set_status_header('404');
		$this->load->view('errors/html/404_not_found');

	}

}



