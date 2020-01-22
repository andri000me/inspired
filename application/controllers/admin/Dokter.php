<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('M_Pasien', 'M_Dokter', 'M_Antrian'));

		if ($_SESSION['login'] == false) {
			redirect('login');
		}
	}

    public function index()
	{
		$data = [
			'konten' => 'admin/dokter/data_dokter',
			'dokter' => $this->M_Dokter->getAll()
		];
		$this->load->view('admin/dashboard', $data);
	}

	public function tambahdokter()
	{
		$data['konten'] = 'admin/dokter/input_data_dokter';
		$this->load->view('admin/dashboard', $data);
	}

	public function storeDokter()
	{
		$data = array(
            'nama_dokter' 	=> $this->input->post("nama_dokter"),
            'spesialis'     => $this->input->post("spesialis"),
            'alamat'       	=> $this->input->post("alamat"),
            'no_tlp'       	=> $this->input->post("no_tlp")
		);

        $this->M_Dokter->save($data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
												</div>');
												
        redirect(base_url('admin/dokter'));
	}

	public function editDokter($id)
	{
		$data = [
			'konten' => 'admin/dokter/edit_data_dokter',
			'dokter' => $this->M_Dokter->getbyId($id)
		];
		$this->load->view('admin/dashboard', $data);
	}

	public function updateDokter()
	{
		$id['no'] = $this->input->post("id_dokter");
		$data = array(
            'nama_dokter' 	=> $this->input->post("nama_dokter"),
            'spesialis'     => $this->input->post("spesialis"),
            'alamat'       	=> $this->input->post("alamat"),
            'no_tlp'       	=> $this->input->post("no_tlp")

		);
        $this->M_Dokter->update($data, $id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
												</div>');
												
        redirect(base_url('admin/dokter'));
	}

	public function deleteDokter($id)
	{
		$this->M_Dokter->delete($id);
		$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"> Success! data berhasil dihapus.
												</div>');
		redirect(base_url('admin/dokter'));
    }

}