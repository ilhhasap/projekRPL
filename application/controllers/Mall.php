<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mall extends CI_Controller {
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
        $data['judul'] = "Malls";
        $data['active'] = "mall";
		
		$data['namaUser '] = $this->session->userdata('namaUser');
		$data['showAllMall'] = $this->Mall_model->showAllMall();
		$this->load->view('templates/header', $data);
		$this->load->view('mall/index', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function detail($idMall)
	{
		$data['active'] = "home";
		
		$data['namaUser '] = $this->session->userdata('namaUser');
		$data['showMallById'] = $this->Mall_model->showMallById($idMall);
        $data['judul'] = $data['showMallById']['namaMall'];
		
		$data['showBrandInMall'] = $this->Brand_model->showBrandInMall($idMall);
		$this->load->view('templates/header', $data);
		$this->load->view('mall/detail', $data);
		$this->load->view('templates/footer', $data);
	}
	
}