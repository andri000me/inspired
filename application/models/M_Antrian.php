<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Antrian extends CI_MODEL {
    
    public function getAll()
    {
        return $this->db->get('data_dokter')->result();
    }
        
    public function noAntrian($tgl)
    {
        $this->db->select_max('no_antrian');
        $this->db->where('tgl_berobat', $tgl);
        $query = $this->db->get('antrian');
        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert("antrian", $data);
    }

    public function checkAntrian($loket)
    {
        $this->db->select_max('nomor');
        $this->db->where('loket', $loket);
        $query = $this->db->get('nomorantrian');
        return $query->row();
    }

    public function insertAntrian($data)
    {
        $this->db->insert("nomorantrian", $data);
    }

    public function resetAntrain()
    {
        $this->db->query("DELETE FROM nomorantrian");

        for($i=1;$i<=3;$i++) {
            $this->db->insert("nomorantrian", ['nomor' => 0, 'loket' => $i]);
        }
    }

    public function loket1()
    {
        $this->db->select_max('nomor');
        $this->db->where('loket', 1);
        $query = $this->db->get('nomorantrian');
        return $query->row();
    }
    public function loket2()
    {
        $this->db->select_max('nomor');
        $this->db->where('loket', 2);
        $query = $this->db->get('nomorantrian');
        return $query->row();
    }
    public function loket3()
    {
        $this->db->select_max('nomor');
        $this->db->where('loket', 3);
        $query = $this->db->get('nomorantrian');
        return $query->row();
    }

}