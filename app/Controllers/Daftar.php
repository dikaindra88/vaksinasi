<?php

namespace App\Controllers;

use App\Models\Participants;
use App\Models\ParticipantsModel;

class Daftar extends BaseController
{
    public function __construct()
    {
        $this->Participants = new ParticipantsModel();
        helper('form');
    }
    public function index()
    {

        echo view('Daftar');
    }
    public function insertData()
    {

        $data = [
            'participant_nik' => $this->request->getPost('participant_nik'),
            'participant_name' => $this->request->getPost('participant_name'),
            'birth_date' => $this->request->getPost('birth_date'),
            'phone_number' => $this->request->getPost('phone_number'),
            'gender' => $this->request->getPost('gender'),
            'participant_type' => $this->request->getPost('participant_type'),
            'vaccines_type' => $this->request->getPost('vaccines_type'),
            'vaccines_phase' => $this->request->getPost('vaccines_phase'),
            'vaccination_date' => $this->request->getPost('vaccination_date'),
            'address' => $this->request->getPost('address')
        ];
        $this->Participants->insertData($data);
        session()->setFlashdata('tambah', 'Data berhasil di tambahkan!');
        return redirect()->to('/Daftar');
    }
}
