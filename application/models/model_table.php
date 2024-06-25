<?php
class Model_table extends CI_model
{
    public function tampil_data(){
        return $this->db->get('tabel');
    }

    public function tambah($data, $table){
            $this->db->set($data);
            // $this->db->insert($this->db->dbprefix . 'tabel');
            $this->db->insert($table, $data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete ($table);
    }

    public function acc_data($id) {
        
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->like('judul', $keyword);
        return $this->db->get()->result();
    }
}