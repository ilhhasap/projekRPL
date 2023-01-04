<?php

class User_model extends CI_model {
    public function showAllUser() {
        return $this->db->get('user')->result_array();
    }
    public function showCountUser() {
        return $this->db->get('user')->num_rows();
    }

    public function showUserById($idUser) {
        return $this->db->get_where('user', ['idUser' => $idUser])->row_array();
        // $data['nama'] = $this->db->get_where('user', ['id']);
    }
    
    public function registerUser()
    {
         $data = [
            "emailUser" => $this->input->post('emailUser',true),
            "password" => md5($this->input->post('password1')),
            "namaUser" => $this->input->post('namaUser',true),
            "role" => $this->input->post('role',true),
        ];

        $this->db->insert('user',$data);
    }

    public function addUser()
    {
        $data = [
            "emailUser" => $this->input->post('emailUser',true),
            "password" => md5($this->input->post('password')),
            "namaUser" => $this->input->post('namaUser',true),
            "role" => $this->input->post('role',true),
        ];

        $this->db->insert('user',$data);
    }

    public function editUser($data)
    {
        // Tidak mengganti password
        if(empty($data['password'])) {
            $password = $data['currentPassword'];
        } else {
            $password = md5($data['password']);
        }
        
        $datas = [
            "idUser" => $data['idUser'],
            "emailUser" => $data['emailUser'],
            "password" => $password,
            "namaUser" => $data['namaUser'],
            "role" => $data['role'],
        ];
        
        $this->db->where('idUser', $data['idUser']);
        $this->db->update('user', $datas);
    }
}