<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function login_user($email, $password)
    {
        return $this->db->table('users')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }
}
