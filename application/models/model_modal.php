<?php
class Model_modal extends CI_model
{
    function getdata()
    {
        $query = $this->db->query("SELECT * FROM jenis_dokumen ORDER BY nama_dokumen ASC");
        return $query->result();
    }

    function getdatas()
    {
        $query = $this->db->query("SELECT * FROM prodi ORDER BY nama_prodi ASC");
        return $query->result();
    }
}