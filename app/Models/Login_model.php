<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'usuarios'; // Nombre de la tabla de usuarios
    
    public function validateUser($username, $password)
    {
        $query = $this->where('usuario', $username)
                      ->where('pass', $password)
                      ->first();

        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
}
