<?php

namespace App\Controllers;

use App\Models\ParticipantsModel;
use \Dompdf\Dompdf;
use \Dompdf\Options;

class Daftar extends BaseController
{
    public function __construct()
    {

        $this->Participants = new ParticipantsModel();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'RSPH | Daftar Vaksinasi',
            'role' => $this->Participants->getRole(),
            'vaccines' => $this->Participants->getVaccines()
        );

        echo view('Daftar', $data);
    }
    public function insertData()
    {

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
            'address' => $this->request->getPost('address'),
        ];
        $this->Participants->insertData($data);
        session()->setFlashdata('tambah', 'Anda Berhasil Daftar.. Silahkan Unduh Bukti Pendaftaran anda!!');
        return redirect()->to('/Daftar');
    }
    public function validation()
    {
        $data['nik'] = $this->request->getPost('participant_nik');
        $data['getdata'] = $this->Participants->getData($data['nik']);
        /*$data = array(
            'getdata' => $this->Participants->getData($nik)
        );*/

        return view('/Participant', $data); #$data
    }
    public function cetak($participant_nik)
    {
        $data = array(
            'print' => $this->Participants->getPeserta($participant_nik)
        );

        //return 
        $html = view('/Print', $data);
        $option = new Options();
        $option->set('IsRemoteEnabled', TRUE);
        $option->set('debugKeepTemp', TRUE);
        $option->set('IsHtml5ParserEnabled', true);
        $dompdf = new Dompdf($option);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('legal', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
