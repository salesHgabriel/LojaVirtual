<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	function setMsg($id, $msg, $tipo)
	{
		$CI =& get_instance();

		switch ($tipo)
		{
			case 'erro';
				$CI->session->set_flashdata($id, '<div class="alert alert-danger" role="alert">'. $msg .'</div>');
				 break;
			case 'sucesso';
				$CI->session->set_flashdata($id, '<div class="alert alert-success" role="alert">'. $msg .'</div>');
			     break;

		}
		return false;
	}


	function getMsg($id)
	{
		$CI =& get_instance();
		if($CI->session->flashdata($id))
		{
			echo $CI->session->flashdata($id);
		}

	}
	function errosValidacao()
	{
		if (validation_errors())
		{
			echo '<div class="alert alert-danger" role="alert">'. validation_errors() .'</div>';
		}
	}

	function dateTimeUtcNow()
	{
		date_default_timezone_set('America/Sao_paulo');
		return date(DATE_W3C, time());
		//$time = time();
	}


	function formatPhone($phone)
	{
		$formatedPhone = preg_replace('/[^0-9]/', '', $phone);
		$matches = array();
		preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
		if ($matches) {
			return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
		}

		return $phone; // return number without format
	}

	function formataDataDb($data = null)
	{
		// No input Entrada - 10/10/2010
		if($data)
		{
			$data = explode("/", $data);

			//Saida no banco - 2010-02-10
			return $data[2] .'-'. $data[1].'-'. $data[0];
		}

	}

	function formataDataBr($data = null)
	{
		// No input Entrada - 10/10/2010
		if($data)
		{
			$data = explode("-", $data);

			//Saida no banco - 2010-02-10
			return $data[2] .'/'. $data[1].'/'. $data[0];
		}
	}

	function tiraFormatacao($objeto) {
		return preg_replace("/[^0-9]/", "", $objeto);
	}


