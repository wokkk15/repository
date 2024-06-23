<?php
class Model_table extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('tabel');
    }
}
