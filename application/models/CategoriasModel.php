<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriasModel extends CI_Model
{



	//Lista todas as categorias
	public function getCategorias()
	{
		return $this->db->get('Categorias')->result();
	}



}
