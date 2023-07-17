<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class DataTable_controller extends Controller
{
    // Función que muestra la lista de usuarios activos
    public function index()
    {
        $userModel = new Usuarios_model();
        $baja = 'NO';
        $data['usuarios'] = $userModel->getUsBaja($baja);
        $data['titulo'] = 'Listar_usuarios';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('admin/listaUsuarios_view', $data);
        echo view('front/footer_view');
    }

    public function editar($id)
    {
        $userModel = new Usuarios_model();
        $data = $userModel->getUsuario($id);
        $data['titulo'] = 'Editar Usuario';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('admin/editarUsuarios_view', compact('data'));
        echo view('front/footer_view');
    }

    public function editoMisDatos($id)
    {
        $userModel = new Usuarios_model();
        $data = $userModel->getUsuario($id);
        $data['titulo'] = 'Editar Usuario';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/editoMisDatos_view', compact('data'));
        echo view('front/footer_view');
    }
}

