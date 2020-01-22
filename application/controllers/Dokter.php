<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function index()
	{
        $data['konten'] = 'admin/home';
		$this->load->view('admin/dashboard', $data);
	}
}
