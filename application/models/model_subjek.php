<?php
class Model_subjek extends CI_model
{
    public function tampil_subjek(){
        return $this->db->get('subjek');
    }

    public function tambah_subjek($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_subjek($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
