<?php

namespace App\Controllers;

use App\Models\FormModel;

class ContactoController extends BaseController
{
    public function index()
    {
        echo view('front/header_view');
        echo view('front/nav_view');
        echo view('front/contacto_view');
        echo view('front/footer_view');
    }

    public function Datos_consultas()
    {
        $consulModel = new FormModel();
        $estado = 'Pendiente';
        $data['consultas'] = $consulModel->getConsultas($estado);
        $data['titulo'] = 'Listado de Consultas';

        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/consultas_view', $data);
        echo view('front/footer_view');
    }

    public function ConsultaDetalle($id)
    {
        $model = new FormModel();
        $data = $model->getConsulta($id);
        $data['titulo'] = 'Detalle Consulta';

        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/DetalleConsulta_view', compact('data'));
        echo view('front/footer_view');
    }

    public function deleteConsulta($id)
    {
        $model = new FormModel();
        $data = $model->getConsulta($id);
        $datos = [
            'id' => 'id',
            'estado' => 'Resuelta',
        ];
        $model->update($id, $datos);

        session()->setFlashdata('mensaje', 'Consulta Resuelta');

        return redirect()->to(base_url('consultas'));
    }

    public function habilitarConsulta($id)
    {
        $model = new FormModel();
        $data = $model->getConsulta($id);
        $datos = [
            'id' => 'id',
            'estado' => 'Pendiente',
        ];
        $model->update($id, $datos);

        session()->setFlashdata('mensaje', 'Consulta Habilitada');

        return redirect()->to(base_url('consultasResueltas'));
    }

    public function Datos_consultasResueltas()
    {
        $consulModel = new FormModel();
        $estado = 'Resuelta';
        $data['consultas'] = $consulModel->getConsultas($estado);
        $data['titulo'] = 'Listado de Consultas';

        echo view('front/header_view', $data);
        echo view('front/nav_view');
        echo view('admin/consultasResueltas_view', $data);
        echo view('front/footer_view');
    }
}
