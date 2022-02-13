<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantsModel extends Model
{
    protected $table   = 'participant';
    protected $participant_id = 'participant_id';
    protected $createdField         = 'create_at';

    //tambah peserta
    public function insertData($data)
    {
        $this->db->table('participant')
            ->insert($data);
    }

    //cetak data peserta
    public function getData($participant_nik)
    {
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->where('participant.participant_nik', $participant_nik)
            ->get()->getResultArray();
    }


    // tampil all data 
    public function getAll()
    {
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->get()->getResultArray();
    }
    // tampil data role 
    public function getRole()
    {
        return $this->db->table('role')

            ->get()->getResultArray();
    }

    public function getVaccines()
    {
        return $this->db->table('vaccines')

            ->get()->getResultArray();
    }

    // tampil data dewasa
    public function getDewasa()
    {
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->where('participant.role_id', '1')
            ->get()->getResultArray();
    }

    // tampil data remaja
    public function getRemaja()
    {
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->where('participant.role_id', '2')
            ->get()->getResultArray();
    }

    // tampil data anak-anak
    public function getChild()
    {
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->where('participant.role_id', '3')
            ->get()->getResultArray();
    }

    //hitung jumlah data dewasa
    public function countDewasa()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='1'");
        $dewasa = $query->getNumRows();
        return $dewasa;
    }

    //hitung jumlah data remaja
    public function countRemaja()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='2'");
        $remaja = $query->getNumRows();
        return $remaja;
    }

    //hitung jumlah data anak-anak
    public function countChild()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='3'");
        $Child = $query->getNumRows();
        return $Child;
    }

    //hitung jumlah laki-laki di data dewasa
    public function countMale()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='1' AND gender='L'");
        $L = $query->getNumRows();
        return $L;
    }

    //hitung jumlah laki-laki di data remaja
    public function countMaler()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='2' AND gender='L'");
        $L = $query->getNumRows();
        return $L;
    }

    //hitung jumlah laki-laki di data anak-anak
    public function countMalec()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='3' AND gender='L'");
        $L = $query->getNumRows();
        return $L;
    }

    //hitung jumlah perempuan di data dewasa
    public function countFemale()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='1'AND gender='P'");
        $P = $query->getNumRows();
        return $P;
    }

    //hitung jumlah perempuan di data remaja
    public function countFemaler()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='2'AND gender='P'");
        $P = $query->getNumRows();
        return $P;
    }

    //hitung jumlah perempuan di data anak-anak
    public function countFemalec()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE role_id='3'AND gender='P'");
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
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->where('participant.participant_id', $participant_id)
            ->get()->getResultArray();
    }

    public function getPeserta($participant_nik)
    {
        return $this->db->table('participant')
            ->join('role', 'role.role_id=participant.role_id')
            ->join('vaccines', 'vaccines.vaccines_id=participant.vaccines_id')
            ->where('participant.participant_nik', $participant_nik)
            ->get()->getResultArray();
    }
}
