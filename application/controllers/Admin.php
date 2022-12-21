<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("Mall_model");
    }
    
	public function index()
	{
        $data['judul'] = "Tampilan Admin";
        $data['active'] = "home";
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
    
	public function masterUser()
	{
        $data['judul'] = "Master User";
        $data['active'] = "user";
		$data['showAllUser'] = $this->User_model->showAllUser();
        
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
    
	public function editUser($idUser)
	{
        $data['judul'] = "Edit User";
        $data['active'] = "user";
		$data['showUserById'] = $this->User_model->showUserById($idUser);
        
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/editUser', $data);
		$this->load->view('templates/footerAdmin', $data);
	}

	public function masterMall()
	{
        $data['judul'] = "Master Mall";
        $data['active'] = "mall";
		$data['showAllMall'] = $this->Mall_model->showAllMall();

		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/mall', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
    
	public function masterBrand()
	{
        $data['judul'] = "Master Brand";
        $data['active'] = "brand";
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/brand', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
	
}