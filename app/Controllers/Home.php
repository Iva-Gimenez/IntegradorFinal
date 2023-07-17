<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='principal';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/principal_view');
        echo view ('front/footer_view');
    }

    public function principal()
    {
        $data['titulo']='principal';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/principal_view');
        echo view ('front/footer_view');
    }

    
  
    public function nosotros()
    {
        $data['titulo']='nosotros';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view('front/nosotros_view');
        echo view ('front/footer_view');
    }


    public function contacto()
    {
        $data['titulo']='contacto';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/contacto_view');
        echo view ('front/footer_view');
    }

   public function login()
    {
        $data['titulo']='login';
        echo view('front/header_view',$data);
        echo view('front/nav_view');
        echo view('front/login_view');
        echo view('front/footer_view');

    }
    public function registrarse()
    {
        $data['titulo']='registrarse';
        echo view('front/header_view',$data);
        echo view('front/nav_view');
        echo view('front/registrarse_view');
        echo view('front/footer_view');

    }

    public function tortas()
    {
        $data['titulo']='tortas';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/tortas_view');
        echo view ('front/footer_view');
    }

    public function productos()
    {
        $data['titulo']='donas';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/productos_view');
        echo view ('front/footer_view');
    }
    public function donas()
    {
        $data['titulo']='donas';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/donas_view');
        echo view ('front/footer_view');
    }

    public function cupcakes()
    {
        $data['titulo']='cupcakes';
        echo view ('front/header_view',$data);
        echo view ('front/nav_view');
        echo view ('front/cupcakes_view');
        echo view ('front/footer_view');
    }


    public function terminosYC()
    {
        $data['titulo']='Terminos y Condiciones';
        echo view('front/header_view',$data);
        echo view('front/nav_view');
        echo view('front/terminosYC_view');
        echo view('front/footer_view');
    }
}

