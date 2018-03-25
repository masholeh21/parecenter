<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('program_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['program'] = $this ->program_model->get_program();
		$this->load->view('templates/header');
		$this->load->view('program/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id_paket_program = NULL)
	{
		$data['program_item'] = $this ->program_model->get_program($id_paket_program); 
		
		$this->load->view('templates/header');
		$this->load->view('program/view', $data);
		$this->load->view('templates/footer');
	}
	
}