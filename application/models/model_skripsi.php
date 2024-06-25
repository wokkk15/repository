<?php
class Model_skripsi extends CI_Model
{
    public function tambahkan_skripsi($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function skripsi()
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->where('jenis', 'skripsi');

        return $this->db->get()->num_rows(); // Mengembalikan jumlah baris
    }
}
?>
