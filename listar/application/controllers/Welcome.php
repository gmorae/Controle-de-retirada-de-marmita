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
		$data['table'] = $this->model->listar();
		$this->load->view('form', $data);
	}

	public function remove($id)
    {
        $this->model->remover($id);
        redirect();
    }
}
