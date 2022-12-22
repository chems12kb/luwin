<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/iniciop', 'Unidades::index2');

$routes->get('/unidades', 'Unidades::index');
$routes->get('/unidades/nuevo', 'Unidades::nuevo');
$routes->post('/unidades/insertar', 'Unidades::insertar');
$routes->get('/unidades/editar/(:any)', 'Unidades::editar/$1');
$routes->get('/unidades/mostrarMinimos', 'Unidades::mostrarMinimos');
$routes->get('/unidades/generaMinimosPdf', 'Unidades::generaMinimosPdf');


$routes->post('/unidades/actualizar', 'Unidades::actualizar');
$routes->get('/unidades/eliminar/(:any)', 'Unidades::eliminar/$1');
$routes->get('/unidades/eliminados', 'Unidades::eliminados');
$routes->get('/unidades/reingresar/(:any)', 'Unidades::reingresar/$1');



$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/nuevo', 'Clientes::nuevo');
$routes->post('/clientes/insertar', 'Clientes::insertar');
$routes->get('/clientes/editar/(:any)', 'Clientes::editar/$1');
$routes->post('/clientes/actualizar', 'Clientes::actualizar');
$routes->get('/clientes/eliminar(:any)', 'Clientes::eliminar/$1');
$routes->get('/clientes/eliminados', 'Clientes::eliminados');
$routes->get('/clientes/reingresar/(:any)', 'Clientes::reingresar/$1');
$routes->get('/clientes/mostrarclientes', 'Clientes::mostrarclientes');
$routes->get('/clientes/generaclientesPdf', 'Clientes::generaclientesPdf');

$routes->get('/configuracion', 'Configuracion::index');

$routes->get('/compras', 'Compras::index');
$routes->get('/compras/nuevo', 'Compras::nuevo');
$routes->post('/compras/insertar', 'Compras::insertar');
$routes->get('/compras/editar/1', 'Compras::editar');
$routes->get('/compras/editar/2', 'Compras::editarr');
$routes->post('/compras/actualizar', 'Compras::actualizar');
$routes->get('/compras/eliminar', 'Compras::eliminar');
$routes->get('/compras/eliminados', 'Compras::eliminados');
$routes->get('/compras/reingresar/1', 'Compras::reingresar');
$routes->get('/compras/reingresar/2', 'Compras::reingresar');

$routes->get('/compras/ventacompletada', 'Compras::ventacompletada');
$routes->get('/compras/generaBoletaPdf', 'Compras::generaBoletaPdf');

$routes->get('/unidades/buscarPorCodigo/(:any)', 'Unidades::buscarPorCodigo/$1');



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
