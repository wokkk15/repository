<?php

class Subjek_admin extends CI_Controller{
    public function index()
    {
        $data['subjek'] = $this->model_subjek->tampil_subjek()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/subjek', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_subjek     = $this->input->post('nama_subjek');

        $data = array(
            'nama_subjek'    => $nama_subjek
        );
    
        $this->model_subjek->tambah_subjek($data, 'subjek');
        redirect('admin/subjek_admin/index');
    }

    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['subjek'] = $this->model_subjek->edit_subjek($where, 'subjek')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_subjek', $data);
        $this->load->view('template_admin/footer');
    }

    public function update(){
        $id     = $this->input->post('id');
        $nama_subjek     = $this->input->post('nama_subjek');

        $data = array(
            'nama_subjek'   => $nama_subjek
        );

        $where = array(
            'id'    => $id
        );

        $this->model_subjek->update_data($where,$data,'subjek');
        redirect('admin/subjek_admin/index');
    }

    public function hapus ($id)
    {
        $where = array('id' => $id);
        $this->model_subjek->hapus_data($where, 'subjek');
        redirect('admin/subjek_admin/index');
    }
}