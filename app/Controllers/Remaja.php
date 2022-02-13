<?php

namespace App\Controllers;

use App\Models\ParticipantsModel;
use \Dompdf\Dompdf;
use \Dompdf\Options;

class Remaja extends BaseController
{
    public function __construct()
    {

        $this->Participants = new ParticipantsModel();
        helper('form');
    }

    public function index()
    {

        $data = array(
            'title' => 'Halaman | Remaja',
            'participant' => $this->Participants->getRemaja()
        );
        $data['remaja'] = $this->Participants->countRemaja();
        $data['L'] = $this->Participants->countMaler();
        $data['P'] = $this->Participants->countFemaler();

        echo view('Remaja/index', $data);
    }
    public function getDetail($participant_id)
    {
        $data = array(
            'title' => 'Remaja | Detail',
            'Detail' => $this->Participants->getDetail($participant_id)
        );

        return view('Remaja/Details', $data);
    }
    public function getUpdate($participant_id)
    {
        $data = array(
            'title' => 'Remaja | Edit',
            'Update' => $this->Participants->getDetail($participant_id)
        );

        return view('Remaja/Update', $data);
    }
    public function EditAction()
    {

        $participant_id = $this->request->getPost('participant_id');
        $data = [
            'participant_nik' => $this->request->getPost('participant_nik'),
            'participant_name' => $this->request->getPost('participant_name'),
            'birth_date' => $this->request->getPost('birth_date'),
            'phone_number' => $this->request->getPost('phone_number'),
            'gender' => $this->request->getPost('gender'),
            'role_id' => $this->request->getPost('role_id'),
            'vaccines_id' => $this->request->getPost('vaccines_id'),
            'vaccines_phase' => $this->request->getPost('vaccines_phase'),
            'vaccination_date' => $this->request->getPost('vaccination_date'),
            'address' => $this->request->getPost('address')
        ];
        $this->Participants->editData($data, $participant_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('Remaja/index');
    }
    public function Delete($participant_id)
    {
        $this->Participants->deleteData($participant_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('Remaja/index');
    }
    public function print()
    {
        $data = [
            'print' => $this->Participants->getRemaja()
        ];
        $html = view('Remaja/Print', $data);
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
