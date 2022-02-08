<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->hitung = new DashboardModel();
        helper('form');
    }
    public function index()
    {
        $data['dewasa'] = $this->hitung->countDewasa();
        $data['remaja'] = $this->hitung->countRemaja();
        echo view('Dashboard', $data);
    }
}
