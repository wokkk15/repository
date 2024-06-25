<?php
// Pastikan class model diakhiri dengan _model
class Model_detail extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tabel');
    }
    public function tampil_idtabel($id)
    {
        $query = $this->db->query("SELECT * FROM tabel WHERE id='$id'");
        return $query->result();
    }
}