<?php

class Barang_model extends CI_model {
    public function showAllBarang() {
        return $this->db->get('barang')->result_array();
    }
    public function simpanBarang()
    {
        $hargaSatuan = $this->input->post('hargaSatuan',true);
        $jumlahBeli = $this->input->post('jumlahBeli',true);
        $totalBayar = $hargaSatuan * $jumlahBeli;
        $data = [
            "kodeBarang" => $this->input->post('kodeBarang',true),
            "namaBarang" => $this->input->post('namaBarang',true),
            "hargaSatuan" => $hargaSatuan,
            "jumlahBeli" => $jumlahBeli,
            "totalBayar" => $totalBayar
        ];

        $this->db->insert('barang',$data);
    }
}