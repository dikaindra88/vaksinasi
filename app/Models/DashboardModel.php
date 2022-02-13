<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    public function countDewasa()
    {
        $query = $this->db->query("SELECT * FROM participant where role_id = '1'");
        $dewasa = $query->getNumRows();
        return $dewasa;
    }
    public function countRemaja()
    {
        $query = $this->db->query("SELECT * FROM participant where role_id='2'");
        $remaja = $query->getNumRows();
        return $remaja;
    }
    public function countChild()
    {
        $query = $this->db->query("SELECT * FROM participant where role_id='3'");
        $remaja = $query->getNumRows();
        return $remaja;
    }
}
