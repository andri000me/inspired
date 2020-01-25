<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Pasien extends CI_MODEL {
    
    public function search_pasien($get)
    {
        $this->db->like('nama_pasien', $get , 'both');
        $this->db->order_by('nama_pasien', 'ASC');
        return $this->db->get('data_pasien')->result();
    }

    public function autoCompPasienRekam($get)
    {
        $date = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM `antrian` 
        JOIN data_dokter ON data_dokter.no = antrian.kode_dokter 
        JOIN data_pasien ON data_pasien.no = antrian.id_pasien
        WHERE antrian.kode_dokter = 2 AND antrian.tgl_berobat = '$date' AND data_pasien.nama_pasien LIKE '%$get%'");
        return $query->result();
    }

    public function get_dataPasien($nama)
    {
        $this->db->like('nama_pasien', $nama, 'both');
        return $this->db->get('data_pasien')->row();
    }

    public function getAll()
    {
        return $this->db->get('data_pasien')->result();
    }

    public function save($data)
    {
        $this->db->insert('data_pasien', $data);
    }

    public function getbyId($id)
    {
        return $this->db->get_where('data_pasien', ['no' => $id])->row();
    }

    public function update($data, $id)
    {
        $this->db->update("data_pasien", $data, $id);
    }

    public function delete($id){
		$this->db->where('no', $id);
		$this->db->delete('data_pasien');
    }
    
    public function insertDiagnosa($data)
    {
        $this->db->insert('rekam_medis', $data);
    }
}