<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantsModel extends Model
{
    protected $table   = 'participant';
    protected $participant_id = 'participant_id';
    public function insertData($data)
    {
        $this->db->table('participant')
            ->insert($data);
    }
    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa'");

        return $query->getResult();
    }
    public function countDewasa()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa'");
        $dewasa = $query->getNumRows();
        return $dewasa;
    }
    public function countMale()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa' AND gender='L'");
        $L = $query->getNumRows();
        return $L;
    }
    public function countFemale()
    {
        $query = $this->db->query("SELECT * FROM participant WHERE participant_type='Dewasa'AND gender='P'");
        $P = $query->getNumRows();
        return $P;
    }

    public function editData($data, $participant_id)
    {
        $query = $this->db->table('participant')->update($data, array('participant_id' => $participant_id));
        return $query;
    }

    public function deleteData($participant_id)
    {
        $query = $this->db->table('participant')->delete(array('participant_id' => $participant_id));
        return $query;
    }

    public function getDetail($participant_id)
    {
        $sql = "SELECT * FROM participant WHERE participant_id='$participant_id'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }
}
