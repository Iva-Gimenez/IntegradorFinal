<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Login_controller extends Controller
{
    public function index()
    {
        helper(['form', 'url']);

        $data['titulo'] = 'login';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('front/login_view');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new Usuarios_model();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['pass'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                if ($data['baja'] == 'SI') {
                    $session->setFlashdata('msg', 'Usted fue dado de Baja');
                    return redirect()->to('/login_controller');
                } else {
                    $ses_data = [
                        'id' => $data['id'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'email' => $data['email'],
                        'perfil_id' => $data['perfil_id'],
                        'logged_in' => TRUE
                    ];

                    // Verifica si la columna 'usuario' existe en los datos del usuario antes de asignarla
                    if (array_key_exists('usuario', $data)) {
                        $ses_data['usuario'] = $data['usuario'];
                    }

                    $session->set($ses_data);
                    return redirect()->to('panel');
                }
            } else {
                $session->setFlashdata('msg', 'Contraseña Incorrecta');
                return redirect()->to('/login_controller');
            }
        } else {
            $session->setFlashdata('msg', 'Correo no registrado');
            return redirect()->to('/login_controller');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login_controller');
    }
}
