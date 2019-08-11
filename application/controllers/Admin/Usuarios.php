<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//validação se esta logado
		if (!$this->ion_auth->logged_in())
		{
			redirect('Admin/Login');
		}

		//Carregar sempre nesse controle a library form_validation
		//info[Criado construtor pois somente alguns controllers terao essa library]
	}

    public function index()
    {
        $data['titulo'] = 'Lista de usuarios';
        $data['view'] = 'Admin/Usuarios/Listar';
		$data['usuario'] = $this-> ion_auth->users()->result();
        $this->load->view('Admin/Template/index', $data);
    }

    public function modulo($id = null)
	{
		$dados = null;
		if ($id)
		{
			$dados = $this->ion_auth->user($id)->row();
			if(!$dados)
			{
				setMsg('msgCadastro', 'Usuário não encontrado', 'erro');
				redirect('Admin/Usuarios','refresh');
			}
			$data['titulo'] = 'Atualizar cadastro';
		}
		else
		{
			$data['titulo'] = 'Novo cadastro';
		}

		$data['dados'] = $dados;
		$data['view'] = 'Admin/Usuarios/Modulo';
		$data['navegacao'] = array('Titulo' => 'Lista de usuarios', 'link' => 'Admin/Usuarios');

		$this->load->view('Admin/Template/index', $data);

	}

	public function core()
	{
		//Regras dos campos
		$this->form_validation->set_rules('nome', 'Nome','trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
		if(!$this->input->post('id_usuario'))
		{
			$this->form_validation->set_rules('senha', 'Senha','trim|required|min_length[6]|max_length[8] ');
		}

		//Verificação se as regras foram atendidas

		if ($this->form_validation->run())
		{
			$username 			= $this->input->post('nome');
			$password 			= $this->input->post('senha');
			$email 				= $this->input->post('email');
			$additional_data 	= null;
			$group = array('1'); // Sets user to admin.

			//Verica se possui id no submit [atualiza usuario]
			if ($this->input->post('id_usuario'))
			{
				$id = $this->input->post('id_usuario');
				$data['username'] 	= $this->input->post('nome');
				$data['email'] 		= $this->input->post('email');
				$data['active'] 	= $this->input->post('ativo');

				if ($this->input->post('senha'))
				{
					$data['password'] 	= $this->input->post('senha');
				}

				if($this->ion_auth->update($id, $data))
				{
					setMsg('msgCadastro', 'Usuário atualizado com sucesso', 'sucesso');
					redirect('Admin/Usuarios');
				}
				else
				{
					setMsg('msgCadastro', 'Erro ao atualizar usuario', 'erro');
					redirect('Admin/Usuarios');
				}

			}
			else
			{
				//Novo usuario[criar usuario]
				//Verifica se existe e-mail cadastro
				if($this->ion_auth->email_check($email))
				{
					setMsg('msgCadastro', 'E-mail já cadastrado', 'erro');
					redirect('Admin/Usuarios');
				}
				if($this->ion_auth->register($username, $password, $email, $additional_data , $group))
				{
					setMsg('msgCadastro', 'Usuário cadastrado com sucesso', 'sucesso');
					redirect('Admin/Usuarios/Modulo');
				}
				else
				{
					setMsg('msgCadastro', 'Erro ao cadastrar usuario', 'erro');
					redirect('Admin/Usuarios');
				}
			}
		}
		else
		{
			$this->modulo();
		}

	}
	public function excluirUsuario($id_usuario = null)
	{
		if($id_usuario)
		{
			if($id_usuario == 1)
			{
				setMsg('msgCadastro', 'Você não tem permissão para apagar este usuário', 'erro');
				redirect('Admin/Usuarios','refresh');
			}
			if($id_usuario == $this->session->userdata('user_id'))
			{
				setMsg('msgCadastro', 'Você não pode apagar você mesmo', 'erro');
				redirect('Admin/Usuarios','refresh');
			}

			if($this->ion_auth->delete_user($id_usuario))
			{
				setMsg('msgCadastro', 'Usuário apagado com sucesso', 'sucesso');
				redirect('Admin/Usuarios','refresh');
			}
			else
			{
				setMsg('msgCadastro', 'Erro ao apagar este usuário', 'erro');
				redirect('Admin/Usuarios','refresh');

			}
		}
		else
		{
			setMsg('msgCadastro', 'Necessário selecionar um usuário', 'erro');
			redirect('Admin/Usuarios','refresh');
		}




	}
}
