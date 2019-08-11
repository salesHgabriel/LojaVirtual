<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Categorias extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			//validação se esta logado do plugin ion_auth
			if (!$this->ion_auth->logged_in())
			{
				redirect('Admin/Login');
			}
			//Carrega o modelo e passa um apelido a ele
			$this->load->model('CategoriasModel', 'categoriasModel');


		}


		public function index()
		{
			$data['titulo'] = 'Lista categorias';
			$data['view'] = 'Admin/Categorias/Listar';
			$data['categorias'] = $this->categoriasModel->getCategorias();

			$this->load->view('Admin/Template/index', $data);

		}


		public function Modulo($idCategoria = null)
		{
			$dados = null;

			if($idCategoria)
			{
				$data['titulo'] = 'Atualizar categoria';
			}
			else
			{
				$data['titulo'] = 'Nova categoria';
			}


			$data['view'] = 'Admin/Categorias/Modulo';
			$data['dados'] = $dados;
			$this->load->view('Admin/Template/index', $data);
		}

		public function Core()
		{
			///VIDEO : CADASTRANDO CATEGORIA PARTE 2
		}

	}
