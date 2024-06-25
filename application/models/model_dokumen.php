<?php
class Model_dokumen extends CI_model
{
    public function tampil_dokumen(){
        return $this->db->get('jenis_dokumen');
    }

    public function tambah_dokumen($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_dokumen($where,$table){
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

