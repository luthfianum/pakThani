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
$routes->setDefaultController('HomeController');
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

//GET WOI
$routes->get('/', 'HomeController::index');
$routes->get('/category/(:any)', 'CategoryController::index/$1');
$routes->get('/verify/(:any)', 'SignupController::verification/$1');
$routes->get('/login', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->get('/logout', 'SigninController::out');
$routes->get('/profile', 'ProfileController::index', ['filter' => 'authGuard']);
$routes->get('/item/(:any)', 'DetailitemController::index/$1');
$routes->get('/checkout', 'TransactionController::checkoutPage');
$routes->get('/transaction', 'TransactionController::listTransactionPage');
$routes->get('/verification', 'VerificationController::index');
$routes->get('/verificationSucceed', 'VerificationController::succeed');
$routes->get('search/(:any)', 'SearchController::index/$1');

//INI POST YAAA!
$routes->post('/login', 'SigninController::loginAuth');
$routes->post('/signup', 'SignupController::store');
$routes->post('/cart', 'CartController::index');
$routes->post('/address/(:any)', 'AddressController::updateActive/$1');
$routes->post('/address', 'AddressController::addAddress');
$routes->post('/checkout', 'TransactionController::checkout');

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
