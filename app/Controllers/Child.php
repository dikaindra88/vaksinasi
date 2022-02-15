<?php

namespace App\Controllers;

use App\Models\ParticipantsModel;
use \Dompdf\Dompdf;
use \Dompdf\Options;

class Child extends BaseController
{
    public function __construct()
    {

        $this->Participants = new ParticipantsModel();
        helper('form');
    }

    public function index()
    {

        $data = array(
            'title' => 'Halaman | Anak-anak',

            'participant' => $this->Participants->getChild()
        );
        if (session()->get('status') == True) {
            $data['Child'] = $this->Participants->countChild();
            $data['L'] = $this->Participants->countMalec();
            $data['P'] = $this->Participants->countFemalec();
            echo view('Child/index', $data);
        } else {
            return redirect()->to('Auth/login');
        }
    }
    public function getDetail($participant_id)
    {
        $data = array(
            'title' => 'Anak-anak | Detail',
            'Detail' => $this->Participants->getDetail($participant_id)
        );

        return view('Child/Details', $data);
    }
    public function getUpdate($participant_id)
    {
        $data = array(
            'title' => 'Anak-anak | Edit',
            'role' => $this->Participants->getRole(),
            'vaccines' => $this->Participants->getVaccines(),
            'Update' => $this->Participants->getDetail($participant_id)
        );

        return view('Child/Update', $data);
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
        return redirect()->to('Child/index');
    }
    public function Delete($participant_id)
    {
        $this->Participants->deleteData($participant_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('Child/index');
    }
    public function print()
    {
        $data = [
            'print' => $this->Participants->getChild()
        ];
        $html = view('Child/Print', $data);
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
