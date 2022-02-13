<?php

namespace App\Controllers;

use App\Models\ParticipantsModel;
use \Dompdf\Dompdf;
use \Dompdf\Options;

class Dewasa extends BaseController
{
    public function __construct()
    {

        $this->Participants = new ParticipantsModel();
        helper('form');
    }

    public function index()
    {

        $data = array(
            'title' => 'Halaman | Dewasa',
            'participant' => $this->Participants->getDewasa()
        );

        $data['dewasa'] = $this->Participants->countDewasa();
        $data['L'] = $this->Participants->countMale();
        $data['P'] = $this->Participants->countFemale();
        echo view('Dewasa/index', $data);
    }
    public function getDetail($participant_id)
    {
        $data = array(
            'title' => 'Dewasa | Detail',
            'Detail' => $this->Participants->getDetail($participant_id)
        );

        return view('Dewasa/Details', $data);
    }
    public function getUpdate($participant_id)
    {
        $data = array(
            'title' => 'Dewasa | Edit',
            'Update' => $this->Participants->getDetail($participant_id)
        );

        return view('Dewasa/Update', $data);
    }
    public function EditAction()
    {

        $participant_id = $this->request->getPost('participant_id');
        $data = [
            'participant_nik' => $this->request->getPost('participant_nik'),
            'participant_name' => $this->request->getPost('participant_name'),
            'birth_date' => $this->request->getPost('birth_date'),
            'phone_number' => $this->request->getPost('phone_number'),
            'role_id' => $this->request->getPost('role_id'),
            'vaccines_id' => $this->request->getPost('vaccines_id'),
            'gender' => $this->request->getPost('gender'),
            'vaccines_phase' => $this->request->getPost('vaccines_phase'),
            'vaccination_date' => $this->request->getPost('vaccination_date'),
            'address' => $this->request->getPost('address')
        ];
        $this->Participants->editData($data, $participant_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('Dewasa/index');
    }
    public function Delete($participant_id)
    {
        $this->Participants->deleteData($participant_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('Dewasa/index');
    }
    public function print()
    {
        $data = [
            'print' => $this->Participants->getDewasa()
        ];

        //return 
        $html = view('Dewasa/Print', $data);
        $option = new Options();
        $option->setIsRemoteEnabled(true);
        $option->setIsHtml5ParserEnabled(true);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
