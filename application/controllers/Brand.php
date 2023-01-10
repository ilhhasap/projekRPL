<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {
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
        $data['judul'] = "Brands";
        $data['active'] = "brand";
		
		$data['namaUser '] = $this->session->userdata('namaUser');
		$data['showAllBrandInMall'] = $this->Brand_model->showAllBrandInMall();
		$this->load->view('templates/header', $data);
		$this->load->view('brand/index', $data);
		$this->load->view('templates/footer', $data);
	}
	
}