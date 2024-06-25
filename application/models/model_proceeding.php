<?php
class Model_proceeding extends CI_Model
{
    public function tambahkan_proceeding($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function proceeding()
    {
        $this->db->select('*');
        $this->db->from('tabel');
        $this->db->where('jenis', 'proceeding');

        return $this->db->get()->num_rows(); // Mengembalikan jumlah baris
    }
}
?>
