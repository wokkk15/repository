<?php

class Tampilan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_prodi');
        $this->load->model('model_table');
        $this->load->model('model_subjek');
        $this->load->model('model_dokumen');
    }

    public function index()
    {
        $data['jenis_dokumen'] = $this->model_dokumen->tampil_dokumen()->result();
        $data['subjek'] = $this->model_subjek->tampil_subjek()->result();
        $data['prodi'] = $this->model_prodi->tampil_prodi()->result();
        $data['tabel'] = $this->model_table->tampil_data()->result();
        $this->load->view('tampilan', $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['jenis_dokumen'] = $this->model_dokumen->tampil_dokumen()->result();
        $data['subjek'] = $this->model_subjek->tampil_subjek()->result();
        $data['prodi'] = $this->model_prodi->tampil_prodi()->result();
        $data['tabel'] = $this->model_table->get_keyword($keyword);
        $this->load->view('tampilan', $data);
    }
}
