<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {
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
        $data['judul'] = "Wishlist";
        $data['active'] = "wishlist";
		
		$data['namaUser '] = $this->session->userdata('namaUser');
		$data['showWishlistById'] = $this->User_model->showWishlistById($this->session->userdata('idUser'));
		$this->load->view('templates/header', $data);
		$this->load->view('wishlist/index', $data);
		$this->load->view('templates/footer', $data);
	}
    
	
}