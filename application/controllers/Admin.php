<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('M_Pasien', 'M_Dokter', 'M_Antrian'));
	}

	public function index()
	{
        $data['konten'] = 'admin/home';
		$this->load->view('admin/dashboard', $data);
	}

	public function pendaftaranpasien()
	{
		$data = [
			'konten' => 'admin/pasien/pendaftaran_pasien',
			'dokter' => $this->M_Dokter->getAll()
		];
		$this->load->view('admin/dashboard', $data);
	}

	public function storePasienAntri()
	{
		$tgl = $this->input->post("tanggal_berobat_pasien");
		$noAntrian = (array)$this->M_Antrian->noAntrian($tgl);
		$urut = implode($noAntrian);

		$data = array(
            'id_pasien' 		=> $this->input->post("id_pasien"),
            'kode_dokter'       => $this->input->post("kode_dokter"),
            'no_antrian'        => $urut + 1,
            'tgl'    			=> $tgl
		);

        $this->M_Antrian->save($data);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
												</div>');
												
        redirect(base_url('admin/pendaftaranpasien'));
	}



	// Dokter

	public function dokter()
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



// Pasien

	public function pasien()
	{
		$data = [
			'konten' => 'admin/pasien/data_pasien',
			'pasien' => $this->M_Pasien->getAll()
		];
		$this->load->view('admin/dashboard', $data);
	}

	public function tambahpasien()
	{
		$data['konten'] = 'admin/pasien/input_data_pasien';
		$this->load->view('admin/dashboard', $data);
	}

	public function storePasien()
	{
		$post = $this->input->post();

        $this->M_Pasien->save($post);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
												</div>');
												
        redirect(base_url('admin/pasien'));
	}

	public function editPasien($id)
	{
		$data = [
			'konten' => 'admin/pasien/edit_data_pasien',
			'pasien' => $this->M_Pasien->getbyId($id)
		];
		$this->load->view('admin/dashboard', $data);
	}


	public function updatePasien()
	{
		$id['no'] = $this->input->post("no");
		$post = $this->input->post();

        $this->M_Pasien->update($post, $id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
												</div>');
												
        redirect(base_url('admin/pasien'));
	}

	public function deletePasien($id)
	{
		$this->M_Pasien->delete($id);
		$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"> Success! data berhasil dihapus.
												</div>');
		redirect(base_url('admin/pasien'));
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




	public function master()
	{
		$data['konten'] = 'admin/master/data_master';
		$this->load->view('admin/dashboard', $data);
	}

}