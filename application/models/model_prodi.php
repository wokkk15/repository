<?php
class Model_prodi extends CI_model
{
    public function tampil_prodi(){
        return $this->db->get('prodi');
    }

    public function tambah_prodi($data,$table){
        $this->db->insert($table,$data);
    }
}
