<?php
class Model_table extends CI_model
{
    public function tampil_data(){
        return $this->db->get('tabel');
    }

    // public function tambah($data, $table){
    //         $this->db->set($data);
    //         // $this->db->insert($this->db->dbprefix . 'tabel');
    //         $this->db->insert($table, $data);
    // }
    public function insert_file($data)
    {
        return $this->db->insert('tabel', $data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete ($table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->like('judul', $keyword);
        return $this->db->get()->result();
    }

    public function get_pending_files()
    {
        $query = $this->db->get_where('tabel', array('status' => 'pending'));
        return $query->result();
        return $this->db->get('tabel');
    }

    public function update_file_status($id, $status)
    {
        $this->db->where('id', $id);
        return $this->db->update('tabel', array('status' => $status));
    }

    public function get_approved_files()
    {
        $query = $this->db->get_where('tabel', array('status' => 'approved'));
        return $query->result();
    }
}