<?php
// Pastikan class model diakhiri dengan _model
class Model_tesis extends CI_Model
{

    public function tambahkan_tesis($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function tesis()
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->where('jenis', 'tesis');

        return $this->db->get()->num_rows();

    }

    
   
}