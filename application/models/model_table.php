<?php

class Model_table extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tabel')->result();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('tabel.*, jenis_dokumen.nama_dokumen');
        $this->db->from('tabel');
        $this->db->join('jenis_dokumen', 'tabel.jenis = jenis_dokumen.id_dokumen');
        $this->db->like('judul', $keyword);
        $this->db->or_like('penulis', $keyword);

        return $this->db->get()->result();
    }


    public function get_jenis_dokumen()
    {
        return $this->db->get('tabel')->result();
    }

    public function filter_data($jenis_dokumen, $subjek, $prodi)
    {
        $this->db->select('tabel.*, jenis_dokumen.nama_dokumen');
        $this->db->from('tabel');
        $this->db->join('jenis_dokumen', 'tabel.jenis = jenis_dokumen.id_dokumen');

        if (!empty($jenis_dokumen)) {
            $this->db->where_in('tabel.jenis', $jenis_dokumen);
        }
        if (!empty($subjek)) {
            $this->db->where_in('tabel.subjek', $subjek);
        }
        if (!empty($prodi)) {
            $this->db->where_in('tabel.prodi', $prodi);
        }

        return $this->db->get()->result();
    }


    // New function to join tabel and jenis_dokumen
    public function get_tabel_with_nama_dokumen()
    {
        $this->db->select('tabel.*, jenis_dokumen.nama_dokumen');
        $this->db->from('tabel');
        $this->db->join('jenis_dokumen', 'tabel.jenis = jenis_dokumen.id_dokumen');
        return $this->db->get()->result();
    }
}
