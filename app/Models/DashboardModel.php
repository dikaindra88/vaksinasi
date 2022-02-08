<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    public function countDewasa()
    {
        $query = $this->db->query("SELECT * FROM participant where participant_type = 'Dewasa'");
        $dewasa = $query->getNumRows();
        return $dewasa;
    }
    public function countRemaja()
    {
        $query = $this->db->query("SELECT * FROM participant where participant_type='Remaja'");
        $remaja = $query->getNumRows();
        return $remaja;
    }
}
