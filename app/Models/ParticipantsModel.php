<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantsModel extends Model
{
    protected $table   = 'participant';
    protected $participant_id = 'participant_id';

    //tambah peserta
    public function insertData($data)
    {
        $this->db->table('participant')
            ->insert($data);
    }

    //cetak data peserta
    public function getData($participant_nik)
    {
        $query = $this->db->table('participant')->where('participant_nik', $participant_nik);
        return $query->get();
    }


    // tampil data dewasa
    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa'");

        return $query->getResult();
    }

    // tampil data remaja
    public function getRemaja()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Remaja'");

        return $query->getResult();
    }

    //hitung jumlah data dewasa
    public function countDewasa()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa'");
        $dewasa = $query->getNumRows();
        return $dewasa;
    }

    //hitung jumlah data remaja
    public function countRemaja()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Remaja'");
        $dewasa = $query->getNumRows();
        return $dewasa;
    }

    //hitung jumlah laki-laki di data dewasa
    public function countMale()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa' AND gender='L'");
        $L = $query->getNumRows();
        return $L;
    }

    //hitung jumlah laki-laki di data remaja
    public function countMaler()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Remaja' AND gender='L'");
        $L = $query->getNumRows();
        return $L;
    }

    //hitung jumlah perempuan di data dewasa
    public function countFemale()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa'AND gender='P'");
        $P = $query->getNumRows();
        return $P;
    }

    //hitung jumlah perempuan di data remaja
    public function countFemaler()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Remaja'AND gender='P'");
        $P = $query->getNumRows();
        return $P;
    }

    //edit data dewasa
    public function editData($data, $participant_id)
    {
        $query = $this->db->table('participant')->update($data, array('participant_id' => $participant_id));
        return $query;
    }

    //hapus data dewasa
    public function deleteData($participant_id)
    {
        $query = $this->db->table('participant')->delete(array('participant_id' => $participant_id));
        return $query;
    }

    //detail data dewasa
    public function getDetail($participant_id)
    {
        $sql = "SELECT * FROM participant WHERE participant_id='$participant_id'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }

    public function getPeserta($participant_nik)
    {
        $sql = "SELECT * FROM participant WHERE participant_nik='$participant_nik'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }
}
