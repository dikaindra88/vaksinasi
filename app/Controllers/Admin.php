<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman | Admin',
            'users' => $this->UsersModel->getData()
        );
        $data['Admin'] = $this->UsersModel->countUsers();
        echo view('Admin/index', $data);
    }

    public function getDetail($id_user)
    {
        $data = array(
            'title' => 'Admin | Detail',
            'Detail' => $this->UsersModel->getDetail($id_user)
        );

        return view('Admin/Details', $data);
    }

    public function getUpdate($id_user)
    {
        $data = array(
            'title' => 'Admin | Edit',
            'Update' => $this->UsersModel->getDetail($id_user)
        );

        return view('Admin/Update', $data);
    }

    public function EditAction()
    {

        $id_user = $this->request->getPost('id_user');

        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status')
        ];

        $this->UsersModel->editData($data, $id_user);
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('Admin/index');
    }
    public function Delete($id_user)
    {
        if (session()->get('id_user') == $id_user) {
            session()->setFlashdata('Error', 'Tidak bisa Hapus User yang sedang Login!!');
            return redirect()->to('Admin/index');
        } else {
            $this->UsersModel->deleteData($id_user);
            session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
            return redirect()->to('Admin/index');
        }
    }
    public function insert()
    {

        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => md5($this->request->getPost('password')),
            'status' => $this->request->getPost('status')
        ];
        $this->UsersModel->insertData($data);
        session()->setFlashdata('pesan', 'Data berhasil di tambahkan!');
        return redirect()->to('Admin/index');
    }
    public function Add()
    {
        $data = [
            'title' => 'Add | Admin'
        ];
        echo view('Admin/Add', $data);
    }
}
