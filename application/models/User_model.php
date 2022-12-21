<?php

class User_model extends CI_model {
    public function showAllUser() {
        return $this->db->get('user')->result_array();
    }

    public function showUserById($idUser) {
        return $this->db->get_where('user', ['idUser' => $idUser])->row_array();
        // $data['nama'] = $this->db->get_where('user', ['id']);
    }
    // public function simpanBarang()
    // {
    //     $hargaSatuan = $this->input->post('hargaSatuan',true);
    //     $jumlahBeli = $this->input->post('jumlahBeli',true);
    //     $totalBayar = $hargaSatuan * $jumlahBeli;
    //     $data = [
    //         "kodeBarang" => $this->input->post('kodeBarang',true),
    //         "namaBarang" => $this->input->post('namaBarang',true),
    //         "hargaSatuan" => $hargaSatuan,
    //         "jumlahBeli" => $jumlahBeli,
    //         "totalBayar" => $totalBayar
    //     ];

    //     $this->db->insert('barang',$data);
    // }

    // public function hapusBarang($kodeBarang)
    // {
    //     $this->db->where('kodeBarang',$kodeBarang);
    //     $this->db->delete('barang',['kodeBarang' => $kodeBarang]);
    // }
}