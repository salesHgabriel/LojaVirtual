<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//	Modal para página configuração loja

	class ConfigModel extends CI_Model
	{
		public function getConfig()
		{    //Pega dados da tabela config
			$this->db->where('id', 1);
			$this->db->limit(1);
			$query = $this->db->get('config');
			if (!$query) {
				echo 'Erro ao executar query';
			} else {
				return $query->row();
			}
		}

		public function doUpdate($dados = null)
		{
			if(is_array($dados))
			{
				$this->db->update('config', $dados, array('id' => 1));
				if($this->db->affected_rows() > 0)
				{
					setMsg('msgCadastro', 'Configuração atualizada com sucesso', 'sucesso');
				}
				else
				{
					setMsg('msgCadastro', 'Erro ao atualizar configuração', 'erro');
				}
			}
		}


	}
