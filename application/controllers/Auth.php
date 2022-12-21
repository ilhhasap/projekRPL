<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function index()
	{
        $data['judul'] = "Login Pengguna";
		$this->load->view('auth/index', $data);
	}
    
	public function register()
	{
        $data['judul'] = "Register Pengguna";
		$this->load->view('auth/register', $data);
	}

	
}