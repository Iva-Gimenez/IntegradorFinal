<?php
namespace App\Controllers;

use App\Models\FormModel;
use CodeIgniter\Controller;

class FormController extends Controller
{
    public function create()
    {
        $data['titulo'] = 'Principal';
        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/contact_form');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|max_length[10]',
            'mensaje' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            echo view('front/header_view');
            echo view('front/nav_view');
            echo view('back/usuario/contact_form', ['validation' => $validation]);
            echo view('front/footer_view');
        } else {
            $formModel = new FormModel();

            $formModel->save([
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'mensaje' => $this->request->getVar('mensaje'),
                'estado' => 'Pendiente'
            ]);

            // Set flash data for success message
            session()->setFlashdata('success', 'Form submitted successfully.');

            return redirect()->to(site_url(''));
        }
    }

    public function enviarMensaje()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nombre' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'mensaje' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            echo view('front/header_view');
            echo view('front/nav_view');
            echo view('back/usuario/contact_form', ['validation' => $validation]);
            echo view('front/footer_view');
        } else {
            // Aquí puedes escribir la lógica para enviar el mensaje
            $formModel = new FormModel();

            $formModel->save([
                'name' => $this->request->getVar('nombre'),
                'email' => $this->request->getVar('email'),
                'mensaje' => $this->request->getVar('mensaje'),
                'estado' => 'Pendiente'
            ]);

            // Set flash data for success message
            session()->setFlashdata('success', 'Form submitted successfully.');

            return redirect()->to(site_url(''));
        }
    }

     public function submitForm()
    {
        // Validación del formulario
        $validationRules = [
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|max_length[10]',
            'mensaje' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Procesamiento de los datos del formulario
        $formModel = new FormModel();

        $formModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'mensaje' => $this->request->getVar('mensaje'),
            'estado' => 'Pendiente'
        ]);

        // Redirección y mensaje de éxito
        return redirect()->to(site_url('/'))->with('success', 'Formulario enviado exitosamente.');
    }
}
