<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//validação se esta logado
		if (!$this->ion_auth->logged_in())
		{
			redirect('Admin/Login');
		}
		$this->load->model('ConfigModel');
	}

	public function index()
    {
		$this->form_validation->set_rules('titulo','Titulo', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('empresa','Nome da empresa', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('cep','Cep', 'trim|required|max_length[9]');
		$this->form_validation->set_rules('endereco','Endereço', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('bairro','Bairro', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('cidade','Cidade', 'trim|required|min_length[3]');


		if ($this->form_validation->run())
		{

		$dados['titulo']		    = $this->input->post('titulo');
		$dados['empresa'] 		    = $this->input->post('empresa');
		$dados['cep'] 		 		= $this->input->post('cep');
		$dados['endereco']    		= $this->input->post('endereco');
		$dados['bairro']      		= $this->input->post('bairro');
		$dados['complemento'] 		= $this->input->post('complemento');
		$dados['cidade']      		= $this->input->post('cidade');
		$dados['estado']      		= $this->input->post('estado');
		$dados['telefone']   	    = $this->input->post('telefone');
		$dados['email']      	 	= $this->input->post('email');
		$dados['p_destaque'] 	 	= $this->input->post('p_destaque');
		$dados['data_atualizada'] 	= dateTimeUtcNow();

			$this->ConfigModel->doUpdate($dados);

			redirect('Admin/Config', 'refresh');
		}else
		{
			$data['titulo'] = 'Configuração da loja';
			$data['view'] 	= 'Admin/Config/index';
			$data['query']  = $this->ConfigModel->getConfig();

			$this->load->view('Admin/Template/index',$data);
		}


    }


}
