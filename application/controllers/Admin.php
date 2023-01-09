<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		if($this->session->userdata('status') != "login" || $this->session->userdata('role') != "admin"){
			redirect(base_url());
		}
		$this->load->helper(array('form', 'url'));
        $this->load->model("User_model");
        $this->load->model("Mall_model");
        $this->load->model("Brand_model");
    }
    
	public function index()
	{
		$data['judul'] = "Brand di beberapa mall";
        $data['active'] = "home";
		$data['namaUser '] = $this->session->userdata('namaUser');
		$data['showAllMall'] = $this->Mall_model->showAllMall();
		$data['showAllBrand'] = $this->Brand_model->showAllBrand();
		$data['showAllBrandInMall'] = $this->Brand_model->showAllBrandInMall();
        
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footerAdmin', $data);
	}

	public function addBrandInMall()
	{
		$this->Brand_model->addBrandInMall();
		$this->session->set_flashdata('success');

		redirect(base_url('admin'));
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
		$thumbnail = $_FILES['thumbnail'];

		if($thumbnail == "") {

		} else {
			$config['upload_path']		= './upload/mall';
			$config['allowed_types']	= 'gif|png|jpg|jpeg';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('thumbnail')) {
				echo $this->upload->display_errors(); die();
			} else {
				$this->Mall_model->addMall();
				$this->session->set_flashdata('success');
			}
		}

		redirect(base_url('admin/masterMall'));
	}
    
    public function editMall()
	{
		$thumbnail = $_FILES['thumbnail'];

		if($thumbnail == "") {
			$thumbnail = $this->input->post('currentThumbnail');
			$this->Mall_model->editMall($this->input->post(), $thumbnail);
		} else {
			$config['upload_path']		= './upload/mall';
			$config['allowed_types']	= 'gif|png|jpg|jpeg';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('thumbnail')) {
				echo $this->upload->display_errors(); die();
			} else {
				$thumbnail = $this->upload->data('file_name');
				$this->Mall_model->editMall($this->input->post(), $thumbnail);
				$this->session->set_flashdata('success');
			}
		}
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterMall'));
	}
    
    public function deleteMall($idMall)
    {
        $this->db->select('thumbnail');
		$query = $this->db->get_where('malls', array('idMall' => $idMall));
		$thumbnail = $query->row()->thumbnail;

		$path = './upload/mall/'.$thumbnail;
		chmod($path, 0777);
		unlink($path);
        $this->db->delete('malls', ['idMall' => $idMall]);
        redirect(base_url('admin/masterMall'));
    }



    
	public function masterBrand()
	{
        $data['judul'] = "Master Brand";
        $data['active'] = "brand";
		$data['showAllBrand'] = $this->Brand_model->showAllBrand();
		$data['showCountBrand'] = $this->Brand_model->showCountBrand();

		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('admin/brand', $data);
		$this->load->view('templates/footerAdmin', $data);
	}
	
	public function addBrand()
	{
		$logoBrand = $_FILES['logoBrand'];

		if($logoBrand == "") {

		} else {
			$config['upload_path']		= './upload/brand';
			$config['allowed_types']	= 'gif|png|jpg|jpeg|svg';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('logoBrand')) {
				echo $this->upload->display_errors(); die();
			} else {
				$this->Brand_model->addBrand();
				$this->session->set_flashdata('success');
			}
		}

		redirect(base_url('admin/masterBrand'));
	}
    
    public function editBrand()
	{
		$logoBrand = $_FILES['logoBrand'];

		if($logoBrand == "") {
			$logoBrand = $this->input->post('currentLogo');
			$this->Brand_model->editBrand($this->input->post(), $logoBrand);
		} else {
			$config['upload_path']		= './upload/brand';
			$config['allowed_types']	= 'gif|png|jpg|jpeg|svg';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('logoBrand')) {
				echo $this->upload->display_errors(); die();
			} else {
				$logoBrand = $this->upload->data('file_name');
				$this->Brand_model->editBrand($this->input->post(), $logoBrand);
				$this->session->set_flashdata('success');
			}
		}
		$this->session->set_flashdata('success');

		redirect(base_url('admin/masterBrand'));
	}
    
    public function deleteBrand($idBrand)
    {
		$this->db->select('logoBrand');
		$query = $this->db->get_where('brands', array('idBrand' => $idBrand));
		$namaFileLogo = $query->row()->logoBrand;

		$path = './upload/brand/'.$namaFileLogo;
		chmod($path, 0777);
		unlink($path);
        $this->db->delete('brands', ['idBrand' => $idBrand]);
        redirect(base_url('admin/masterBrand'));
    }


}