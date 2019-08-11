<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
/*
 * Controller modulo cliente
 * */

	public function __construct()
	{
		parent::__construct();
		//validação se esta logado do plugin ion_auth
		if (!$this->ion_auth->logged_in())
		{
			redirect('Admin/Login');
		}
		//Carrega o modelo e passa um apelido a ele
		$this->load->model('ClientesModel', 'clientesLoja');


	}

	//Listar clientes
    public function index()
    {
        $data['titulo'] = 'Lista de clientes';
        $data['view'] = 'Admin/Clientes/Listar';
		$data['cliente'] = $this->clientesLoja->getClientes();
        $this->load->view('Admin/Template/index', $data);
    }

    public function modulo($idCliente = null)
	{
		$dados = null;
		if ($idCliente)
		{
			$data['titulo'] = 'Atualizar cliente';
			$dados = $this->clientesLoja->getClienteId($idCliente);
			if(!$dados)
			{
				getMsg('msgCadastro', 'Cliente não cadastrado', 'erro');
				redirect('Admin/Clientes','refresh');
			}
		}
		else
		{
			$data['titulo'] = 'Novo cliente';
		}
		$data['view'] = 'Admin/Clientes/Modulo';
		$data['dados'] = $dados;
		$this->load->view('Admin/Template/index', $data);

	}

	public function core()
	{

		//Regras de validação
		$this->form_validation->set_rules('nome', 'Nome','trim|required|min_length[5]');
		$this->form_validation->set_rules('cpf', 'Cpf','trim|required|is_unique[Clientes.cpf]');
		$this->form_validation->set_rules('data_Nascimento', 'Data de nascimento','trim|required');
		$this->form_validation->set_rules('email', 'E-mail','trim|required|valid_email');
		$this->form_validation->set_rules('bairro', 'Bairro','trim|required');
		$this->form_validation->set_rules('cidade', 'Cidade','trim|required');
		$this->form_validation->set_rules('senha', 'Senha','trim|required');


		//Verificação se as regras foram atendidas
		if ($this->form_validation->run())
		{
			$dadosCliente['nome'] = $this->input->post('nome');
			$dadosCliente['cpf'] = tiraFormatacao($this->input->post('cpf'));
			$dadosCliente['telefone'] = tiraFormatacao($this->input->post('telefone'));
			$dadosCliente['cep'] = tiraFormatacao($this->input->post('cep'));
			$dadosCliente['data_Nascimento'] = formataDataDb($this->input->post('data_Nascimento'));
			$dadosCliente['bairro'] = $this->input->post('bairro');
			$dadosCliente['complemento'] = $this->input->post('complemento');
			$dadosCliente['numero'] = $this->input->post('numero');
			$dadosCliente['cidade'] = $this->input->post('cidade');
			$dadosCliente['estado'] = $this->input->post('estado');
			$dadosCliente['email'] = $this->input->post('email');
			$dadosCliente['senha'] = $this->input->post('senha');
			$dadosCliente['ativo'] = $this->input->post('ativo');
			$dadosCliente['dataCadastro'] = dateTimeUtcNow();

			//Verica se foi passado um id para cliente
			// se não sera criar cadastro
			if($this->input->post('id_cliente'))
			{
				//se passodo, Atualiza o cadastro
				$dadosCliente['ultimaAtualizacao'] = dateTimeUtcNow();
				$this->clientesLoja->atualizaCliente($dadosCliente, $this->input->post('id_cliente'));
				redirect('Admin/Clientes','refresh');
			}
			else
			{
				//Novo cadastro
				//se não passado cria novo cadastro
				$dadosCliente['dataCadastro'] = dateTimeUtcNow();
				$this->clientesLoja->incluirCliente($dadosCliente);
				redirect('Admin/Clientes','refresh');

			}
			if($this->clientesLoja->validaCpf($dadosCliente['cpf']))
			{
				setMsg('msgCadastro', 'cpf já está cadastrado', 'erro');
				redirect('Admin/Clientes/Modulo','refresh');
			}
			else if($this->clientesLoja->validaEmail($dadosCliente['email']))
			{
				setMsg('msgCadastro', 'e-mail já está cadastrado', 'erro');
				redirect('Admin/Clientes/Modulo','refresh');
			}


		}
		else
		{
			$this->modulo();
		}

	}

	public function excluirUsuario($id = null)
	{
		if($id)
		{
			$this->clientesLoja->doDelete($id);
			setMsg('msgCadastro', 'Cliente excluido com sucesso', 'sucesso');
			redirect('Admin/Clientes','refresh');
		}
		else
		{
			getMsg('msgCadastro', 'Erro ao excluir cliente', 'erro');
			redirect('Admin/Clientes','refresh');
		}
	}



}
