<?php
class Model_prodi extends CI_model
{
    public function tampil_prodi(){
        return $this->db->get('prodi');
    }

    public function tambah_prodi($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_prodi($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete ($table);
    }
}
