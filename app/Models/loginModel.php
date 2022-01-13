<?php namespace App\Models;
use CodeIgniter\Model;

class loginModel extends Model{

    protected $table = 'admin';
    protected $allowedFields = ['email', 'fname', 'lname', 'password'];
    protected $beforeInsert = ['beforeInsert'];
    protected $afterInsert = ['afterInsert'];

    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function afterInsert(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password']))
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}