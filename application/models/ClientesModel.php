<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class ClientesModel extends CI_Model
	{
		//Lista todos os clientes
		public function getClientes()
		{    //Pega dados da tabela cliente
			return $this->db->get('Clientes')->result();

		}

		//Incluir cliente na tabela
		public function incluirCliente($dados = null)
		{
			if(is_array($dados))
			{
				$this->db->insert('Clientes', $dados);

				if($this->db->affected_rows()>0)
				{
					setMsg('msgCadastro', 'Cliente cadastrado com sucesso', 'sucesso');
				}
				else
				{
					setMsg('msgCadastro', 'Erro ao cadastrar cliente', 'erro');
				}
			}
			else
			{
				return false;
			}
		}


		//Pega o cliente pelo seu id
		//cliente atual
		public function getClienteId($id = null)
		{
			if($id)
			{
				$this->db->where('id', $id);
				$this->db->limit(1);
				$query = $this->db->get('Clientes');
				return $query->row();
			}
		}

		public function atualizaCliente($dados = null, $id_cliente = null)
		{
			if(is_array($dados) && $id_cliente)
			{
				$this->db->update('Clientes', $dados, array('id' => $id_cliente));
				if($this->db->affected_rows() > 0)
				{
					setMsg('msgCadastro', 'Cliente atualizado com sucesso', 'sucesso');
				}
				else
				{
					setMsg('msgCadastro', 'Erro ao atualizar cliente', 'erro');
				}
			}
		}


		public function doDelete($id = null)
		{
			if($id)
			{
				$this->db->delete('Clientes', array('id' => $id));
			}

			if($this->db->affected_rows() > 0)
			{
				setMsg('msgCadastro', 'Cliente apagado com sucesso', 'sucesso');
			}
			else
			{
				setMsg('msgCadastro', 'Erro ao apagar cliente', 'erro');
			}
		}

		public function validaCpf($cpf=null)
		{
			$this->db->where('cpf', $cpf);
			return $this->db->get('Clientes')->row_array();

			return null;
		}

		public function validaEmail($email=null)
		{
			$this->db->where('email', $email);
			return $this->db->get('Clientes')->row_array();

			return null;
		}

	}
