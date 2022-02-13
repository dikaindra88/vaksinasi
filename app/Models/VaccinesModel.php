<?php

namespace App\Models;

use CodeIgniter\Model;

class VaccinesModel extends Model
{
    protected $table   = 'vaccines';
    protected $participant_id = 'vaccines_id';

    public function insertData($data)
    {
        $this->db->table('vaccines')
            ->insert($data);
    }
    public function getData()
    {
        $query = $this->db->query("SELECT * FROM vaccines");

        return $query->getResult();
    }
    //edit data user
    public function editData($data, $vaccines_id)
    {
        $query = $this->db->table('vaccines')->update($data, array('vaccines_id' => $vaccines_id));
        return $query;
    }

    //hapus data user
    public function deleteData($vaccines_id)
    {
        $query = $this->db->table('vaccines')->delete(array('vaccines_id' => $vaccines_id));
        return $query;
    }
    public function getDetail($vaccines_id)
    {

        $sql = "SELECT * FROM vaccines WHERE vaccines_id='$vaccines_id'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }
}
