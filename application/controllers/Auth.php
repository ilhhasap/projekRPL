<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model("User_model");
		$this->load->library('form_validation');
    }
	public function index()
	{
        $data['judul'] = "Login Pengguna";
		$this->load->view('templates/headerAuth', $data);
		$this->load->view('auth/index', $data);
		$this->load->view('templates/footerAuth', $data);
	}
    
	public function register()
	{
        $data['judul'] = "Register Pengguna";
		$this->load->view('templates/headerAuth', $data);
		$this->load->view('auth/register', $data);
		$this->load->view('templates/footerAuth', $data);
	}
	
	public function prosesLogin()
	{
        $emailUser = $this->input->post('emailUser');
        $password = md5($this->input->post('password'));
        
        $user = $this->db->get_where('user', ['emailUser' => $emailUser])->row_array();
        $emailUser = $user['emailUser'];
        $idUser = $user['idUser'];
        $namaUser = $user['namaUser'];
        $role = $user['role'];
        
        // $this->Login_model->cek_login('user',$where)->num_rows();
		if ($user['password'] == $password) {
			$data = [
                'emailUser' => $emailUser,
                'idUser' => $idUser,
                'namaUser' => $namaUser,
                'role' => $role,
                'status' => 'login'
			];
            $this->session->set_userdata($data);
            if ($user['role'] == 'admin') {
                redirect(base_url('Admin'));
            }
            redirect(base_url('Home'));
		} else {
			redirect('Auth');
		} 	
	}

	public function prosesSignUp()
    {
        $this->form_validation->set_rules('emailUser', 'emailUser', 'required|trim');
        $this->form_validation->set_rules('namaUser', 'namaUser', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password doesnt match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            redirect(base_url('Home'));	
        } else {
            $this->User_model->registerUser();
            // $this->session->set_flashdata('message', '<div class="alert alert-success font-weight-bold" role="alert">Anda telah tedaftar, silahkan login</div>');
            redirect(base_url('Auth'));
        }  
    }
	
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('Auth'));
	}


}