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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/', 'Frontend::index');
$routes->get('/detail/(:any)', 'Frontend::detail/$1');
$routes->get('/jadwal/(:any)', 'Frontend::jadwal/$1');
$routes->get('/pay/(:any)/(:any)', 'Frontend::pay/$1/$2');

$routes->group('', ['namespace' => 'App\Controllers\Auth'], function($routes) {
    $routes->get('/register', 'Register::index');
    $routes->post('/register/process', 'Register::process');
    $routes->get('/login', 'Login::index');
    $routes->post('/login/process', 'Login::process');
    $routes->get('/logout', 'Login::logout');
});
$routes->get('/home', 'Home::index');

$routes->group('admin', function($routes) {
	$routes->get('film', 'Admin/Film::index');
	$routes->get('film/(:segment)/detail', 'Admin/Film::detail/$1');
    $routes->add('film/new', 'Admin/Film::create');
	$routes->add('film/(:segment)/edit', 'Admin/Film::edit/$1');
	$routes->get('film/(:segment)/delete', 'Admin/Film::delete/$1');
});

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
