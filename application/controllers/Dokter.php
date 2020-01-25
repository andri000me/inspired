<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function index()
	{
        $data['konten'] = 'dokter/home';
		$this->load->view('admin/dashboard', $data);
	}
}
