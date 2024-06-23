<?php

class Jenis_dokumen_admin extends CI_Controller{
    public function index()
    {
        $data['jenis_dokumen'] = $this->model_dokumen->tampil_dokumen()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/jenis', $data);
        $this->load->view('template_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_dokumen     = $this->input->post('nama_dokumen');

        $data = array(
            'nama_dokumen'    => $nama_dokumen
        );
    
        $this->model_dokumen->tambah_dokumen($data, 'jenis_dokumen');
        redirect('admin/jenis_dokumen_admin/index');
    }
    public function edit($id)
    {
        $where = array('id_dokumen' =>$id);
        $data['jenis_dokumen'] = $this->model_dokumen->edit_dokumen($where, 'jenis_dokumen')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_dokumen', $data);
        $this->load->view('template_admin/footer');
    }

    public function update(){
        $id     = $this->input->post('id_dokumen');
        $nama_dokumen     = $this->input->post('nama_dokumen');

        $data = array(
            'nama_dokumen'   => $nama_dokumen
        );

        $where = array(
            'id_dokumen'    => $id
        );

        $this->model_dokumen->update_data($where,$data,'jenis_dokumen');
        redirect('admin/jenis_dokumen_admin/index');
    }

    public function hapus ($id)
    {
        $where = array('id_dokumen' => $id);
        $this->model_dokumen->hapus_data($where, 'jenis_dokumen');
        redirect('admin/jenis_dokumen_admin/index');
    }
}