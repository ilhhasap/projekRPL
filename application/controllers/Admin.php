<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Auth"));
		}
        $this->load->model("User_model");
        $this->load->model("Mall_model");
    }
    
	public function index()
	{
        $data['judul'] = "Tampilan Admin";
        $data['active'] = "home";
		$data['namaUser '] = $this->session->userdata('namaUser');
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
    
	public function masterUser()
	{
        $data['judul'] = "Master User";
        $data['active'] = "user";
		$data['showAllUser'] = $this->User_model->showAllUser();
		$data['showCountUser'] = $this->User_model->showCountUser();
        
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('templates/footerAdmin', $data);
	}

	public function addUser()
	{
		$this->User_model->addUser();
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterUser'));
	}
    
    public function editUser()
	{
		$this->User_model->editUser($this->input->post());
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterUser'));
	}
    
    public function deleteUser($idUser)
    {
        $this->db->delete('user', ['idUser' => $idUser]);
        redirect(base_url('admin/masterUser'));
    }



	
	public function masterMall()
	{
        $data['judul'] = "Master Mall";
        $data['active'] = "mall";
		$data['showAllMall'] = $this->Mall_model->showAllMall();
		$data['showCountMall'] = $this->Mall_model->showCountMall();

		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/mall', $data);
		$this->load->view('templates/footerAdmin', $data);
	}

	public function addMall()
	{
		$this->Mall_model->addMall();
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterMall'));
	}
    
    public function editMall()
	{
		$this->Mall_model->editMall($this->input->post());
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterMall'));
	}
    
    public function deleteMall($idMall)
    {
        $this->db->delete('malls', ['idMall' => $idMall]);
        redirect(base_url('admin/masterMall'));
    }



    
	public function masterBrand()
	{
        $data['judul'] = "Master Brand";
        $data['active'] = "brand";
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/brand', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
	
	public function addBrand()
	{
		$this->Brand_model->addBrand();
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterBrand'));
	}
    
    public function editBrand()
	{
		$this->Brand_model->editBrand($this->input->post());
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterBrand'));
	}
    
    public function deleteBrand($idBrand)
    {
        $this->db->delete('Brand', ['idBrand' => $idBrand]);
        redirect(base_url('admin/masterBrand'));
    }


}