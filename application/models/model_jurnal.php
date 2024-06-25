<?php
class Model_jurnal extends CI_Model
{
    public function tambahkan_jurnal($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function jurnal()
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->where('jenis', 'jurnal');

        return $this->db->get()->num_rows(); // Mengembalikan jumlah baris
    }
}
?>
