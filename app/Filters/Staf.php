<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Staf implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('status') == '') {
            session()->setFlashdata('pesan', 'Anda belum login, Silahkan Login Dulu !');
            return redirect()->to(base_url('Auth/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('status') == 'staf') {

            return redirect()->to(base_url('Dashboard/index'));
        }
    }
}
