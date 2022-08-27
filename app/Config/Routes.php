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
//$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('login', 'Login::index');
$routes->get('registrasi', 'Login::registrasi');

$routes->get('/', 'Home::index');
$routes->get('budidaya', 'Budidaya::index');
$routes->get('biak', 'Budidaya::biak');
$routes->get('sterilisasi', 'Budidaya::sterilisasi');
$routes->get('jenispakan', 'Budidaya::jenispakan');

// jenisikan
$routes->group('jenisikan', function ($routes) {
    $routes->get('/', 'JenisIkan::index');
    $routes->post('tambah', 'JenisIkan::tambah');
    $routes->post('edit', 'JenisIkan::edit');
    $routes->post('hapus/(:num)', 'JenisIkan::hapus/$1');
});


// ikan
$routes->group('jualbeli', function ($routes) {
    $routes->get('/', 'JualBeli::index');

    $routes->post('tambah-ikan', 'JualBeli::tambah_ikan');
});

// Jual Beli
// $routes->get('cekharga', 'JualBeli::cekharga');

// Pengetahuan Ikan
$routes->get('pengolahanikan', 'Pengetahuanikan::index');
$routes->get('jenisikan', 'Pengetahuanikan::jenisikan');
$routes->get('sifatikan', 'Pengetahuanikan::sifatikan');
$routes->get('habitatikan', 'Pengetahuanikan::habitatikan');

$routes->get('olahbibit', 'Olahbibit::olahbibit');





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
