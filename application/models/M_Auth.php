<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Auth extends CI_MODEL {

	public function proseslogin($datauser)
	{
		if (count((array)$this->login('login', $datauser))) {
			$sess_data = [
				'login'		=> true,
				'username'	=> $this->login('login', $datauser)->username,
				'level' 	=> 'admin',
			];
			$this->session->set_userdata($sess_data);
			return true;
			
		}else if(count((array)$this->login('data_dokter', $datauser))) {
			$sess_data = [
				'login'		=> true,
				'username'	=> $this->login('login', $datauser)->username,
				'level' 	=> 'dokter',
			];
			$this->session->set_userdata($sess_data);
			return true;

		}else{
			$pasien = $this->db->where('username', $datauser->username)
				->where('password', md5($datauser->password))
				->get('data_pasien')
				->row();
			if(count($pasien)) {
				$sess_data = [
					'login'		=> true,
					'username'	=> $pasien->username,
					'level' 	=> 'pasien'
				];
				$this->session->set_userdata($sess_data);
				return true;
			}
			return false;
		}

		return false;
	}
	
	public function login($table, $datauser)	
	{
		return $this->db->where('username', $datauser->username)
			->where('password', md5($datauser->password))
			->get($table)
			->row();
	}

}