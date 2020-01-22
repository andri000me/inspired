<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('M_Pasien', 'M_Dokter', 'M_Antrian'));

		if ($_SESSION['login'] == false) {
			redirect('login');
		}
    }

	public function get_pasienAutoComp(){
        if (isset($_GET['term'])) {
            $result = $this->M_Pasien->search_pasien($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_pasien;
                echo json_encode($arr_result);
            }
        }
	}
	
	public function get_dataPasien()
	{
		$row = $this->M_Pasien->get_dataPasien($_GET['nama']);
		$data = array(
			'no' => $row->no,
			'umur' => $row->umur,
			'alamat' => $row->alamat,
			'hp' => $row->no_tlp
		);
		echo json_encode($data);
	}

	public function pasien()
	{
		$data = [
			'konten' => 'admin/dokter/data_dokter',
			'dokter' => $this->M_Dokter->getAll()
		];
		$this->load->view('admin/dashboard', $data);
	}

	public function tambahPasien()
	{
		$data['konten'] = 'admin/Pasien';
		$this->load->view('admin/dashboard', $data);
	}

	public function storePasien()
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

	public function editPasien($id)
	{
		$data = [
			'konten' => 'admin/dokter/edit_data_dokter',
			'dokter' => $this->M_Dokter->getbyId($id)
		];
		$this->load->view('admin/dashboard', $data);
	}

	public function updatePasien()
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

	public function deletePasien($id)
	{
		$this->M_Dokter->delete($id);
		$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"> Success! data berhasil dihapus.
												</div>');
		redirect(base_url('admin/dokter'));
	}

}