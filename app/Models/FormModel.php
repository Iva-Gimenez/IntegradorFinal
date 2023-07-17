<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'contactar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'mensaje', 'estado'];

    public function getConsulta($id)
    {
        return $this->where('id', $id)->first();
    }

    public function updateConsulta($id, $datos)
    {
        return $this->update($id, $datos);
    }

    public function getConsultas($estado)
    {
        return $this->where('estado', $estado)->findAll();
    }
}
