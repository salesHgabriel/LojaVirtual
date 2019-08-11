<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//validação se esta logado
		if (!$this->ion_auth->logged_in())
		{
			redirect('Admin/Login');
		}
	}


	public function index()
    {
        $this->load->view('Admin/Template/index.php');

    }


}
