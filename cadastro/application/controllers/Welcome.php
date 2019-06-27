<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * @author Gabriel Moraes Martins
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->model('MarmitaModel', 'model');
		$this->load->view('footer');
	}

	public function index()
	{

		$this->model->atualiza();
		$this->load->view('form');
	}

	public function cadastro()
	{

		$this->model->cadastrar();
		$this->load->view('form_cadastro');
	}

}
