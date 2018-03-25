<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembaga extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('lembaga_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['lembaga'] = $this ->lembaga_model->get_lembaga();
		$this->load->view('templates/header');
		$this->load->view('lembaga/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id_lembaga)
	{
		
			$data['lembaga_item'] = $this ->lembaga_model->get_lembaga($id_lembaga); 
		 	$this->load->view('templates/header');
			$this->load->view('lembaga/view', $data);
			$this->load->view('templates/footer');
	}
	
}