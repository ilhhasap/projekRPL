<?php

class Brand_model extends CI_model {
    public function showAllBrand() {
        return $this->db->get('brands')->result_array();
    }
    public function showCountBrand() {
        return $this->db->get('brands')->num_rows();
    }

    public function showBrandById($idBrand) {
        return $this->db->get_where('brands', ['idBrand' => $idBrand])->row_array();
        // $data['nama'] = $this->db->get_where('brands', ['id']);
    }
    
    public function registerBrand()
    {
         $data = [
            "emailBrand" => $this->input->post('emailBrand',true),
            "password" => md5($this->input->post('password1')),
            "namaBrand" => $this->input->post('namaBrand',true),
            "role" => $this->input->post('role',true),
        ];

        $this->db->insert('brands',$data);
    }

    public function addBrand()
    {
        $data = [
            "emailBrand" => $this->input->post('emailBrand',true),
            "password" => md5($this->input->post('password')),
            "namaBrand" => $this->input->post('namaBrand',true),
            "role" => $this->input->post('role',true),
        ];

        $this->db->insert('brands',$data);
    }

    public function editBrand($data)
    {
        // Tidak mengganti password
        if(empty($data['password'])) {
            $password = $data['currentPassword'];
        } else {
            $password = md5($data['password']);
        }
        
        $datas = [
            "idBrand" => $data['idBrand'],
            "emailBrand" => $data['emailBrand'],
            "password" => $password,
            "namaBrand" => $data['namaBrand'],
            "role" => $data['role'],
        ];
        
        $this->db->where('idBrand', $data['idBrand']);
        $this->db->update('brands', $datas);
    }
}