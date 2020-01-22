<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('M_Auth');
 
	}

	public function index()
	{
		$this->load->view('login');
    }
    
    public function proseslogin()
	{
		if (isset($_POST)) {
			$input = (object) $this->input->post();
			if ($this->M_Auth->proseslogin($input)) {
				if ($_SESSION['level'] == 'admin') {
					redirect(base_url('admin'));
				}else if ($_SESSION['level'] == 'dokter') {
					redirect(base_url('dokter'));
				}else{
					redirect(base_url('pasien'));
				}
			}else{
				$this->session->set_flashdata('message',"<b><i>Username / Password</i></b> yang di masukkan <b><u>Salah!</u></b>");
				redirect(base_url());
			}
		}else{
			redirect(base_url());
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
