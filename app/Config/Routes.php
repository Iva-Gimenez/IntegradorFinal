<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/GimenezIvana', 'Home::index');
$routes->get('/principal', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/terminosYC', 'Home::terminosYC');
$routes->get('/login', 'Home::login');
$routes->get('/registrarse', 'Home::registrarse');
$routes->get('/tortas', 'Home::tortas');
$routes->get('/donas', 'Home::donas');
$routes->get('/cupcakes', 'Home::cupcakes');



//Registro
$routes->get('registrarse', 'Home::Registrarse');
$routes->get('/registrarse_back','Usuario_Controller::create');
$routes->post('enviar-form', 'Registro_controller::formValidation');
$routes->post('registro', 'Usuario_Controller::registro');

//Login
$routes->get('/panel', 'Home::index');  
$routes->post('/enviar-login','Login_controller::auth');
$routes->get('/logout', 'Login_controller::logout');

$routes->post('/actualizarDatos', 'Usuario_controller::actualizarDatos');


//Rutas Admin
$routes->get('/usuarios-list', 'DataTable_controller::index'); 
$routes->post('/enviarEdicion', 'Usuario_controller::formValidationEdit');
$routes->get('/nuevoUs', 'Usuario_controller::nuevoUsuario');
$routes->post('/crearUs', 'Usuario_controller::formValidationAdmin');
$routes->get('/eliminados', 'Usuario_controller::Usuarios_eliminados');
$routes->post('consulta', 'ContactoControllerr::formValidation');

//Rutas Admin Consultas
$routes->get('contact-form', 'FormController::create');
$routes->post('enviarMensaje', 'FormController::enviarMensaje');

$routes->get('consultas', 'ContactoController::Datos_consultas');
$routes->get('ConsultaDetalle/(:num)', 'ContactoController::ConsultaDetalle/$1');
$routes->post('ConsultaResuelta/(:num)', 'ContactoController::deleteConsulta/$1');
$routes->get('consultasResueltas', 'ContactoController::Datos_consultasResueltas');
$routes->get('volverPendiente', 'ContactoController::habilitarConsulta');
// app/Config/Routes.php

$routes->post('actualizar-datos', 'Usuario_controller::actualizarDatos', ['as' => 'actualizarDatos']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
