<?php

class Mall_model extends CI_model {
    public function showAllMall() {
        return $this->db->get('malls')->result_array();
    }
}