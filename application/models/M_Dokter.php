<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dokter extends CI_MODEL {
    
    public function getAll()
    {
        return $this->db->get('data_dokter')->result();
        
    }

    public function getDokterCount()
    {
        $query = $this->db->query("SELECT data_dokter.*, COUNT(*) as jumlah_antrian FROM `data_dokter`
        JOIN nomorantrian ON nomorantrian.loket = data_dokter.loket
        GROUP BY data_dokter.loket");
        return $query->result();
    }

    public function save($data)
    {
        $this->db->insert("data_dokter", $data);
    }

    public function getbyId($id)
    {
        return $this->db->get_where('data_dokter', ['no' => $id])->row();
    }

    public function update($data, $id)
    {
        $this->db->update("data_dokter", $data, $id);
    }

    public function delete($id){
		$this->db->where('no', $id);
		$this->db->delete('data_dokter');
	}

}