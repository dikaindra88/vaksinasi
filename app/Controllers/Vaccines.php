<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VaccinesModel;

class Vaccines extends BaseController
{
    public function __construct()
    {
        $this->VaccinesModel = new VaccinesModel();
        helper('form');
    }
    public function index()
    {
        if (session()->get('status') == True) {
            $data = array(
                'title' => 'Halaman | Vaksin',
                'vaccines' => $this->VaccinesModel->getData()
            );

            echo view('Vaksin/index', $data);
        } else {
            return redirect()->to('Auth/login');
        }
    }
    public function getUpdate($vaccines_id)
    {
        $data = array(
            'title' => 'Vaksin | Edit',
            'Update' => $this->VaccinesModel->getDetail($vaccines_id)
        );

        return view('Vaksin/Update', $data);
    }

    public function EditAction()
    {

        $vaccines_id = $this->request->getPost('vaccines_id');

        $data = [

            'vaccines_type' => $this->request->getPost('vaccines_type')
        ];

        $this->VaccinesModel->editData($data, $vaccines_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('Vaccines/index');
    }
    public function Delete($vaccines_id)
    {

        $this->VaccinesModel->deleteData($vaccines_id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('Vaccines/index');
    }
    public function insert()
    {

        $data = [
            'vaccines_id' => $this->request->getPost('vaccines_id'),
            'vaccines_type' => $this->request->getPost('vaccines_type')
        ];
        $this->VaccinesModel->insertData($data);
        session()->setFlashdata('pesan', 'Data berhasil di tambahkan!');
        return redirect()->to('Vaccines/index');
    }
    public function Add()
    {
        $data = [
            'title' => 'Add | Vaksin'
        ];
        echo view('Vaksin/Add', $data);
    }
}
