<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table   = 'users';
    protected $participant_id = 'id_user';

    public function insertData($data)
    {
        $this->db->table('users')
            ->insert($data);
    }

    public function login_user($email, $password)
    {
        return $this->db->table('users')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM users");

        return $query->getResult();
    }

    //hitung jumlah data user
    public function countUsers()
    {
        $query = $this->db->query("SELECT * FROM users");
        $user = $query->getNumRows();
        return $user;
    }

    //edit data user
    public function editData($data, $id_user)
    {
        $query = $this->db->table('users')->update($data, array('id_user' => $id_user));
        return $query;
    }

    //hapus data user
    public function deleteData($id_user)
    {
        $query = $this->db->table('users')->delete(array('id_user' => $id_user));
        return $query;
    }

    //detail data user
    public function getDetail($id_user)
    {

        $sql = "SELECT * FROM users WHERE id_user='$id_user'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }
}
