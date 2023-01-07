<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->model("User_model");
        $this->load->model("Mall_model");
        $this->load->model("Brand_model");
    }
	
	public function index()
	{
        $data['judul'] = "Tampilan Home";
        $data['active'] = "home";
		
		$data['role'] = $this->session->userdata('role');
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['showAllMall'] = $this->Mall_model->showAllMall();
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer', $data);
	}
	
}