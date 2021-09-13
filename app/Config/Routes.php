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
$routes->setDefaultController('MainController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$webRoutes = [];

$webRoutes['about'] = 'MainController::about';
$webRoutes['contact'] = 'MainController::contact';
$webRoutes['gallery'] = 'MainController::gallery';
$webRoutes['cultural'] = 'MainController::cultural';
$webRoutes['retreat'] = 'MainController::retreat';
$webRoutes['rooms'] = 'MainController::rooms';
$webRoutes['campSite'] = 'MainController::campSite';
$webRoutes['roomDetails/(:any)'] = 'MainController::roomDetails/$1';

$routes->map($webRoutes);

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'MainController::index');

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