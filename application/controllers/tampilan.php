<?php

class Tampilan extends CI_Controller {

	public function index()
	{
        $data['tabel'] = $this->model_table->tampil_data()->result();
		$this->load->view('tampilan', $data);
	}
}
