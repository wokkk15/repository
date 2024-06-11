<?php
class Model_dokumen extends CI_model
{
    public function tampil_dokumen(){
        return $this->db->get('jenis_dokumen');
    }

    public function tambah_dokumen($data,$table){
        $this->db->insert($table,$data);
    }
}
