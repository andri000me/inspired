<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function pendaftaran()
	{
		$this->load->view('pendaftaran');
	}

	public function storePasien()
	{
		$this->load->model('M_Pasien');
		$post = $this->input->post();
		$post['password'] = md5($post->password);

        $this->M_Pasien->save($post);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Silahkan Login menggunakan Username dan Password anda yang baru saja anda daftarkan.
												</div>');
												
        redirect(base_url(''));
	}
}
