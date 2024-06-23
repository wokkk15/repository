<?php

class Prodi_admin extends CI_Controller{
    public function index()
    {
        $data['prodi'] = $this->model_prodi->tampil_prodi()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/prodi', $data);
        $this->load->view('template_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_prodi     = $this->input->post('nama_prodi');

        $data = array(
            'nama_prodi'    => $nama_prodi
        );
    
        $this->model_prodi->tambah_prodi($data, 'prodi');
        redirect('admin/prodi_admin/index');
    }

    public function edit($id)
    {
        $where = array('id_prodi' =>$id);
        $data['prodi'] = $this->model_prodi->edit_prodi($where, 'prodi')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_prodi', $data);
        $this->load->view('template_admin/footer');
    }

    public function update(){
        $id     = $this->input->post('id_prodi');
        $nama_prodi     = $this->input->post('nama_prodi');

        $data = array(
            'nama_prodi'   => $nama_prodi
        );

        $where = array(
            'id_prodi'    => $id
        );

        $this->model_prodi->update_data($where,$data,'prodi');
        redirect('admin/prodi_admin/index');
    }

    public function hapus ($id)
    {
        $where = array('id_prodi' => $id);
        $this->model_prodi->hapus_data($where, 'prodi');
        redirect('admin/prodi_admin/index');
    }
}