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
$routes->get('dashboard', 'Dashboard::index');

// $routes->group('login', function ($routes) {
// });
$routes->get('login', 'Login::index');
$routes->post('cek-login', 'Login::cek_login');
$routes->get('logout', 'Login::logout');



$routes->get('registrasi', 'Login::registrasi');


// home
$routes->get('/', 'Home::index');
$routes->get('tentang', 'Home::tentang');
$routes->get('cara-budidaya', 'Home::budidaya');
$routes->get('berkembang-biak', 'Home::berkembang_biak');
$routes->get('sterilisasi', 'Home::sterilisasi');
$routes->get('pakan', 'Home::pakan');

$routes->get('pengolahan', 'Home::pengolahan');
$routes->get('sifatikan', 'Home::sifat_ikan');
$routes->get('habitatikan', 'Home::habitat_ikan');
$routes->get('shop', 'Shop::index');







// $routes->group('home', function ($routes) {
//     $routes->get('/', 'Home::index');
// });

// shop


// budidaya
$routes->group('budidaya', function ($routes) {
    $routes->get('/', 'Budidaya::index');
    $routes->post('tambah-budidaya', 'Budidaya::tambah_budidaya');
    $routes->post('edit-budidaya', 'Budidaya::edit_budidaya');
    $routes->delete('hapus-budidaya/(:num)', 'Budidaya::hapus_budidaya/$1');
});

// berkembang biak
$routes->group('berkembang-biak', function ($routes) {
    $routes->get('/', 'Budidaya::berkembang_biak');
    $routes->post('tambah-berkembangbiak', 'Budidaya::tambah_berkembangbiak');
    $routes->post('edit-berkembangbiak', 'Budidaya::edit_berkembangbiak');
    $routes->delete('hapus-berkembangbiak/(:num)', 'Budidaya::hapus_berkembangbiak/$1');
});

// berkembang biak
$routes->group('sterilisasi', function ($routes) {
    $routes->get('/', 'Budidaya::sterilisasi');
    $routes->post('tambah-steril', 'Budidaya::tambah_steril');
    $routes->post('edit-steril', 'Budidaya::edit_steril');
    $routes->delete('hapus-steril/(:num)', 'Budidaya::hapus_steril/$1');
});

// pakan
$routes->group('jenis-pakan', function ($routes) {
    $routes->get('/', 'Budidaya::jenispakan');
    $routes->post('tambah-pakan', 'Budidaya::tambah_pakan');
    $routes->post('edit-pakan', 'Budidaya::edit_pakan');
    $routes->delete('hapus-pakan/(:num)', 'Budidaya::hapus_pakan/$1');
});

// pengolahan 
$routes->group('pengolahan-ikan', function ($routes) {
    $routes->get('/', 'Pengetahuanikan::index');
    $routes->post('tambah-pengolahan', 'Pengetahuanikan::tambah_pengolahan');
    $routes->post('edit-pengolahan', 'Pengetahuanikan::edit_pengolahan');
    $routes->delete('hapus-pengolahan/(:num)', 'Pengetahuanikan::hapus_pengolahan/$1');
});

// sifat ikan 
$routes->group('sifat-ikan', function ($routes) {
    $routes->get('/', 'Pengetahuanikan::sifatikan');
    $routes->post('tambah-sifatikan', 'Pengetahuanikan::tambah_sifatikan');
    $routes->post('edit-sifatikan', 'Pengetahuanikan::edit_sifatikan');
    $routes->delete('hapus-sifatikan/(:num)', 'Pengetahuanikan::hapus_sifatikan/$1');
});


// habitat ikan 
$routes->group('habitat-ikan', function ($routes) {
    $routes->get('/', 'Pengetahuanikan::habitatikan');
    $routes->post('tambah-habitat', 'Pengetahuanikan::tambah_habitat');
    $routes->post('edit-habitat', 'Pengetahuanikan::edit_habitat');
    $routes->delete('hapus-habitat/(:num)', 'Pengetahuanikan::hapus_habitat/$1');
});


// $routes->get('biak', 'Budidaya::biak');
// $routes->get('sterilisasi', 'Budidaya::sterilisasi');
// $routes->get('jenispakan', 'Budidaya::jenispakan');


// jenisikan
$routes->group('jenisikan', function ($routes) {
    $routes->get('/', 'JenisIkan::index');
    $routes->post('tambah', 'JenisIkan::tambah');
    $routes->post('edit', 'JenisIkan::edit');
    $routes->delete('hapus/(:num)', 'JenisIkan::hapus/$1');
});


// ikan
$routes->group('jualbeli', function ($routes) {
    $routes->get('/', 'JualBeli::index');
    $routes->post('tambah-ikan', 'JualBeli::tambah_ikan');
    $routes->post('edit-ikan', 'JualBeli::edit_ikan');
    $routes->delete('hapus-ikan/(:num)', 'JualBeli::hapus_ikan/$1');

    $routes->post('tambah-bibit', 'JualBeli::tambah_bibit');
    $routes->post('edit-bibit', 'JualBeli::edit_bibit');
    $routes->delete('hapus-bibit/(:num)', 'JualBeli::hapus_bibit/$1');
});

// Jual Beli
// $routes->get('cekharga', 'JualBeli::cekharga');

// Pengetahuan Ikan
// $routes->get('pengolahanikan', 'Pengetahuanikan::index');
// $routes->get('jenisikan', 'Pengetahuanikan::jenisikan');
// $routes->get('sifatikan', 'Pengetahuanikan::sifatikan');
// $routes->get('habitatikan', 'Pengetahuanikan::habitatikan');

$routes->group('olah-bibit', function ($routes) {
    $routes->get('/', 'Olahbibit::olahbibit');
    $routes->post('tambah-bibit', 'Olahbibit::tambah_bibit');
    $routes->post('edit-bibit', 'Olahbibit::edit_bibit');
    $routes->delete('hapus-bibit/(:num)', 'Olahbibit::hapus_bibit/$1');
});

// users
$routes->group('users', function ($routes) {
    $routes->get('/', 'Users::index');
    $routes->post('tambah', 'Users::tambah');
    // $routes->post('edit-bibit', 'Olahbibit::edit_bibit');
    $routes->delete('hapus/(:num)', 'Users::hapus/$1');
});

// setting
$routes->group('setting', function ($routes) {
    $routes->get('/', 'Setting::index');
    // $routes->post('tambah', 'Setting::tambah');
    $routes->post('edit', 'Setting::edit');
});
$routes->get('profile', 'Setting::profile');




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
