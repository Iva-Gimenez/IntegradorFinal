<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('front/registrarse_view');
        echo view('front/footer_view');
    }

    public function nuevoUsuario()
    {
        $data['titulo'] = 'Crear Nuevo Usuario';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('admin/nuevoUsuario_view');
        echo view('front/footer_view');
    }

    public function formValidationAdmin()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre'   => 'required|min_length[3]|max_length[25]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono'  => 'required|min_length[5]',
            'pass'     => 'required|min_length[8]|max_length[10]',
            'perfil_id' => 'required|max_length[1]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $data['titulo'] = 'Registro';
            echo view('front/header_view', $data);
            echo view('front/nav_view');
            echo view('admin/nuevoUsuario_view', ['validation' => $validation]);
            echo view('front/footer_view');
        } else {
            $formModel = new Usuarios_model();
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono' => $this->request->getVar('telefono'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'perfil_id' => $this->request->getVar('perfil_id'),
            ]);
            return redirect()->to(base_url('usuarios-list'));
        }
    }

    public function formValidation()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono'  => 'required|min_length[8]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $data['titulo'] = 'registro';
            echo view('front/header_view', $data);
            echo view('front/nav_view');
            echo view('front/registrarse_view', ['validation' => $validation]);
            echo view('front/footer_view');
        } else {

            $formModel = new Usuarios_model();
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                
                'email' => $this->request->getVar('email'),
                'telefono' => $this->request->getVar('telefono'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            return $this->response->redirect(site_url('editoMisDatos_view'));
        }
    }

    public function formValidationEdit()
    {

        $validation = \Config\Services::validation();
        $validation->setRules([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email',
            'telefono'  => 'required|min_length[8]',
            'pass'     => 'required|min_length[3]',
            'perfil_id' => 'required|max_length[1]',
        ]);
        $Model = new Usuarios_model();
        $id = $this->request->getPost('id');
            $data['user'] =$Model ->where('id', $id)->first();

        if ($validation->withRequest($this->request)->run()) {
            $data = $Model->getUsuario($id);
            $dato['titulo'] = 'Editar Usuario';
            echo view('front/header_view', $data);
            echo view('front/nav_view');
            echo view('admin/editarUsuarios_view', $data);
            echo view('front/footer_view');
        } else {

            $data = $Model->getUsuario($id);
            $pass = $data['pass'];
            $hash = $this->request->getPost('pass');
            if ($pass == $hash) {
                $datos = [
                    'id' => $this->request->getPost('id'),
                    'nombre' => $this->request->getPost('nombre'),
                    'apellido' => $this->request->getPost('apellido'),
                    'email' => $this->request->getPost('email'),
                    'telefono' => $this->request->getPost('telefono'),
                    'pass' => $this->request->getPost('pass'),
                    'perfil_id'  => $this->request->getPost('perfil_id'),
                    'baja'  => $this->request->getPost('baja'),
                ];
            } else {
                $datos = [
                    'id' => $this->request->getPost('id'),
                    'nombre' => $this->request->getPost('nombre'),
                    'apellido' => $this->request->getPost('apellido'),
                    'email' => $this->request->getPost('email'),
                    'telefono' => $this->request->getPost('telefono'),
                    'pass' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
                    'perfil_id'  => $this->request->getPost('perfil_id'),
                ];
            }

            $Model->updateDatos($id, $datos);
            return redirect()->to(base_url('usuarios-list'));
        }
    }

    public function usuarioEdit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email',
            'telefono'  => 'required|min_length[8]',
            'pass'     => 'required|min_length[3]|max_length[100]'
        ]);

        $Model = new Usuarios_model();
        $id = $this->request->getPost('id');

        if (!$validation->withRequest($this->request)->run()) {
            $data = $Model->getUsuario($id);
            $dato['titulo'] = 'Editar Usuario';
            echo view('front/header_view', $dato);
            echo view('front/nav_view');
            echo view('back/usuario/editoMisDatos_view', $data);
            echo view('front/footer_view');
        } else {
            $data = $Model->getUsuario($id);
            $pass = $data['pass'];
            $hash = $this->request->getPost('pass');
            if ($pass == $hash) {
                $datos = [
                    'id' => $this->request->getPost('id'),
                    'nombre' => $this->request->getPost('nombre'),
                    'apellido' => $this->request->getPost('apellido'),
                    'email' => $this->request->getPost('email'),
                    'telefono'  => $this->request->getPost('telefono'),
                    'pass' => $this->request->getPost('pass'),
                ];
            } else {
                $datos = [
                    'id' => $this->request->getPost('id'),
                    'nombre' => $this->request->getPost('nombre'),
                    'apellido' => $this->request->getPost('apellido'),
                    'email' => $this->request->getPost('email'),
                    'telefono'  => $this->request->getPost('telefono'),
                    'pass' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
                ];
            }
            $Model->update($id, $datos);
            return redirect()->to(base_url('/'));
        }
    }

    public function delete($id)
    {
        $Model = new Usuarios_model();
        $data = $Model->getUsuario($id);
        $datos = [
            'id' => 'id',
            'baja'  => '1',
        ];
        $Model->update($id, $datos);
        return redirect()->to(base_url('usuarios-list'));
    }

    public function habilitar($id)
    {
        $Model = new Usuarios_model();
        $data = $Model->getUsuario($id);
        $datos = [
            'id' => 'id',
            'baja'  => '0',
        ];
        $Model->update($id, $datos);
        return redirect()->to(base_url('usuarios-list'));
    }

    public function Usuarios_eliminados()
    {
        $userModel = new Usuarios_model();
        $baja = 1;
        $data['usuarios'] = $userModel->getUsBaja($baja);
        $dato['titulo'] = 'Listar_usuarios';
        echo view('front/header_view', $dato);
        echo view('front/nav_view');
        echo view('admin/usuariosEliminados_view', $data);
        echo view('front/footer_view');
    }


  public function actualizarDatos()
{

    // Validar los campos del formulario
    $validation = \Config\Services::validation();
    $validation->setRules([
        // Agrega las reglas de validación para cada campo del formulario aquí
    ]);

    if ($validation->withRequest($this->request)->run()) {
        // Si la validación falla, carga la vista del formulario con los errores de validación
        $id = $this->request->getPost('id');

        $userModel = new Usuarios_model();
        $data['usuario'] = $userModel->getUsuario($id);
        $dato['titulo'] = 'Editar Perfil';
        echo view('front/header_view', $dato);
        echo view('front/nav_view');
        echo view('back/usuario/editoMisDatos_view', $data);
        echo view('front/footer_view');
    } else {
        // Si la validación es exitosa, guarda los cambios en la base de datos y redirige a la página de perfil
        $id = $this->request->getPost('id');

        $userModel = new Usuarios_model();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            // Agrega los demás campos que deseas actualizar en la base de datos aquí
        ];
        $userModel->updateDatos($id, $datos);
        return redirect()->to(base_url('/principal'));
    }
}
}
