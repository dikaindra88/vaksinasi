<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Users implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        // if (is_null(session()->get('status'))) {
        //     return redirect()->to(base_url('Auth/login'));
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // if (is_null(session()->get('admin'))) {
        //     return redirect()->to(base_url('Dashboard/index'));
        // }
    }
}
