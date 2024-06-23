<?php
class Model_modal extends CI_model
{
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM jenis_dokumen ORDER BY nama_dokumen ASC");
        return $query->result();
    }
}