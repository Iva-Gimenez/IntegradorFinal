<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Registro_controller extends Controller {

    // Constructor de la clase
    public function __construct() {
        // Se cargan los helpers form y url
        helper(['form', 'url']);
    }

    // Función para mostrar el formulario de registro
    //Se crea un arreglo de datos llamado $data que contiene una clave 'titulo' con el valor //'Registrarse'. Este arreglo se utiliza para pasar datos a las vistas que se cargarán más adelante.

/* Se cargan las vistas correspondientes utilizando la función view() de CodeIgnite
 */    public function create() {
        $data['titulo'] = 'Registrarse';
        // Se cargan las vistas correspondientes
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/registrarse_back');
        echo view('front/footer_view');
    }

    // Función para validar los datos del formulario
    public function formValidation() {
        // Se obtiene la instancia del servicio de validación
        $validation = \Config\Services::validation();

        // Se validan los campos del formulario
        $input = $this->validate([
            'nombre'      => 'required|min_length[3]',
            'apellido'    => 'required|min_length[3]|max_length[25]',
            'email'       => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono'    => 'required|min_length[6]|max_length[20]',
            'provincia'   => 'required|min_length[3]',
            'localidad'   => 'required|min_length[3]',
            'dirección'   => 'required|min_length[5]'
        ]);

        // Se crea una instancia del modelo de usuarios
        $formModel = new Usuarios_model();

        // Si la validación falla
        if (!$input) {
            $data['titulo'] = 'Registrarse';
            // Se cargan las vistas correspondientes
            echo view('front/header_view', $data);
            echo view('front/nav_view');
            echo view('front/registrarse_view', ['validation' => $validation]);
            echo view('front/footer_view');
        } else {
            // Si la validación es exitosa, se guarda el usuario en la base de datos
            $formModel->save([
                'nombre'    => $this->request->getPost('nombre'),
                'apellido'  => $this->request->getPost('apellido'),
                'email'     => $this->request->getPost('email'),
                'telefono'  => $this->request->getPost('telefono'),
                'provincia' => $this->request->getPost('provincia'),
                'localidad' => $this->request->getPost('localidad'),
                'dirección' => $this->request->getPost('dirección'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            // Se establece un mensaje flash en la sesión para indicar que el registro fue exitoso
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            // Se redirige al usuario al formulario de registro
            return redirect()->to(base_url('/principal'));
        }
    }
}
