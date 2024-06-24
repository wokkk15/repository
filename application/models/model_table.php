<?php
class Model_table extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tabel');
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->like('judul', $keyword);
        return $this->db->get()->result();
    }
}
