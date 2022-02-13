<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Daftar', 'Daftar::index');
$routes->post('/Auth/cek_login', 'Auth::cek_login');

//Routes Dewasa
$routes->get('/Dewasa/index', 'Dewasa::index');
$routes->get('/Dewasa/print', 'Dewasa::print');
$routes->delete('/Dewasa/(:num)', 'Dewasa::Delete/$1');
$routes->get('/Dewasa/(:any)', 'Dewasa::getDetail/$1');

//Routes Remaja
$routes->get('/Remaja/index', 'Remaja::index');
$routes->get('/Remaja/print', 'Remaja::print');
$routes->delete('/Remaja/(:num)', 'Remaja::Delete/$1');
$routes->get('/Remaja/(:any)', 'Remaja::getDetail/$1');

//Routes Anak-anak
$routes->get('/Child/index', 'Child::index');
$routes->get('/Child/print', 'Child::print');
$routes->delete('/Child/(:num)', 'Child::Delete/$1');
$routes->get('/Child/(:any)', 'Admin::getDetail/$1');

//Routes Anak-anak
$routes->get('/Admin/index', 'Admin::index');
$routes->get('/Admin/Add', 'Admin::Add');
$routes->delete('/Admin/(:num)', 'Admin::Delete/$1');
$routes->get('/Admin/(:any)', 'Admin::getDetail/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
