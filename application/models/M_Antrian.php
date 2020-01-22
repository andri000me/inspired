<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Antrian extends CI_MODEL {
    
    public function getAll()
    {
        return $this->db->get('data_dokter')->result();
    }
        
    public function noAntrian($tgl)
    {
        $this->db->select_max('no_antrian');
        $this->db->where('tgl', $tgl);
        $query = $this->db->get('antrian');
        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert("antrian", $data);
    }

}