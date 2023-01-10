<?php

class Brand_model extends CI_model {
    public function showAllBrand() {
        return $this->db->get('brands')->result_array();
    }
    
    public function showAllAvailableBrand() {
        $query = $this->db->query("SELECT brands.* FROM `brands` LEFT JOIN brandInMall ON brands.idBrand = brandInMall.idBrand WHERE brandInMall.idBrand IS NULL");
        return $query->result_array();
    }
    public function showCountBrand() {
        return $this->db->get('brands')->num_rows();
    }

    public function showBrandById($idBrand) {
        return $this->db->get_where('brands', ['idBrand' => $idBrand])->row_array();
        // $data['nama'] = $this->db->get_where('brands', ['id']);
    }
    
    public function showAllBrandInMall() {
        $this->db->select('*');
        $this->db->from('brandInMall');
        $this->db->join('malls', 'brandInMall.idMall = malls.idMall');
        $this->db->join('brands', 'brandInMall.idBrand = brands.idBrand');
        // $this->db->where('idMall', 'brandInMall.idMall = malls.' . $idMall);
        // $this->db->where('startTime = CURDATE()');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function showBrandInMall($idMall) {
        $this->db->select('*');
        $this->db->from('brandInMall');
        $this->db->join('malls', 'brandInMall.idMall = malls.idMall');
        $this->db->join('brands', 'brandInMall.idBrand = brands.idBrand');
        $this->db->where('brandInMall.idMall', $idMall);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function addBrandInMall()
    {
        $data = [
            "idMall" => $this->input->post('idMall',true),
            "idBrand" => $this->input->post('idBrand',true),
            "floor" => $this->input->post('floor',true),
            "jamBukaBrand" => $this->input->post('jamBukaBrand',true),
            "jamTutupBrand" => $this->input->post('jamTutupBrand',true),
        ];

        $this->db->insert('brandInMall',$data);
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
            "logoBrand" => $this->upload->data('file_name'),
            "namaBrand" => $this->input->post('namaBrand',true),
        ];

        $this->db->insert('brands',$data);
    }

    public function editBrand($data, $logoBrand)
    {
        $datas = [
            "idBrand" => $data['idBrand'],
            "logoBrand" => $logoBrand,
            "namaBrand" => $data['namaBrand'],
        ];
        
        $this->db->where('idBrand', $data['idBrand']);
        $this->db->update('brands', $datas);    
    }

}