<?php

namespace App\Controllers;

use App\Models\ParticipantsModel;
use \Dompdf\Dompdf;
use \Dompdf\Options;

class Jadwal extends BaseController
{
    public function __construct()
    {

        $this->Participants = new ParticipantsModel();
        helper('form');
    }

    public function index()
    {

        $data = array(
            'title' => 'Halaman | Jadwal',
            'participant' => $this->Participants->getAll()
        );

        echo view('Jadwal/index', $data);
    }
    public function getDetail($participant_id)
    {
        $data = array(
            'title' => 'Jadwal | Detail',
            'Detail' => $this->Participants->getDetail($participant_id)
        );
        return view('Jadwal/Details', $data);
    }
}
