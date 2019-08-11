<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
		//Carrega biblioteca de form_valition
		$this->load->library('form_validation');

		//Seta o campos obrigatorios da minha view
		$this->form_validation->set_rules('email', 'E-mail', 'required');

		$this->form_validation->set_rules('senha', 'Senha', 'required');

		//valida se a execução do form_validation funcionou
		if ($this->form_validation->run())
		{
			$identity = $this->input->post('email');
			$password = $this->input->post('senha');
			$remember = $this->input->post('ManterConectado') != null ? true : false;
			$this->ion_auth->login($identity, $password, $remember);

			if ($this->ion_auth->login($identity, $password, $remember))
			{
				redirect('Admin/Principal', 'refresh');
			}
			else {
				redirect('Admin/Login', 'refresh');
			}
		}
		else
		{
			$this->load->view('Admin/Template/Login');

		}


	}

	public function Sair()
	{
		$this->ion_auth->logout();
		redirect('Admin/Login', 'refresh');
	}
}

