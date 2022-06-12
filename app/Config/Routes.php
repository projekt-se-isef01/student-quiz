<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\Startseite;

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
$routes->setDefaultController('Startseite');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

//Startseite
$routes->get('/', 'Startseite::index');
$routes->get('Startseite', 'Startseite::index');

//Register
$routes->get('Registrierung', 'Registrierung::index');
$routes->match(['get','post'],'Registrierung/registrieren', 'Registrierung::registrieren');

//Login
$routes->get('Login', 'Login::index');
$routes->match(['get','post'],'Login/login', 'Login::login');
$routes->match(['get','post'],'Login/logout', 'Login::logout');

//Account
$routes->get('Account', 'Account::index');
$routes->match(['get','post'],'Account/loeschen', 'Account::loeschen');


//Fragenkatalog
$routes->get('FragenkatalogÜbersicht/(:any)', 'FragenkatalogÜbersicht::index');
$routes->get('Fragenkatalogerstellung/(:any)', 'Fragenkatalogerstellung::index');
$routes->get('FragenkatalogÜbersicht/', 'FragenkatalogÜbersicht::index');

//Fragen
$routes->match(['get','post'],'Fragenkatalog/storeFrage', 'Fragenkatalog::storeFrage');
$routes->match(['get','post'],'Fragenkatalog/updateFrage', 'Fragenkatalog::updateFrage');
$routes->match(['get','post'],'Fragenkatalogerstellung/neuerKatalog', 'Fragenkatalogerstellung::neuerKatalog');
$routes->match(['get','post'],'Fragenkatalogerstellung', 'Fragenkatalogerstellung::index');
$routes->get('Fragenkatalog/edit/(:num)', 'Fragenkatalog::edit/$1');
$routes->get('Fragenkatalog/loeschen/(:num)', 'Fragenkatalog::loeschen/$1');
$routes->get('Fragenkatalog/addFrage/(:segment)', 'Fragenkatalog::addFrage/$1');
$routes->get('Fragenkatalog/(:any)', 'Fragenkatalog::index/$1');

$routes->get('Statistik', 'Statistik::index');

//Spielmodi
$routes->get('Spielmodi', 'Spielmodi::index');

//Single
$routes->match(['get','post'],'Singleplayer/getNextFrage', 'Singleplayer::getNextFrage');
$routes->get('ErgebnisSingle', 'ErgebnisSingle::index');
$routes->match(['get','post'],'Ergebnis', 'Ergebnis::index');

$routes->get('Singleplayer', 'Singleplayer::index');
$routes->get('Singleplayer/(:segment)', 'Singleplayer::getFirstFrage/$1');
$routes->get('Singleplayer', 'Singleplayer::index');
$routes->get('Singleplayer/joker' ,'Singleplayer::joker');


//VS


$routes->get('VS', 'VS::index');
$routes->get('VS/addGame', 'VS::addGame');
$routes->match(['get','post'],'VS/endGame', 'VS::endGame');
$routes->match(['get','post'],'VS/wait/(:num)' ,'VS::wait/$1');
$routes->get('VS/(:num)' ,'VS::startWait/$1');
$routes->get('VS/getErgebnis/(:num)', 'VS::getErgebnis/$1');





/*
 *
 * $routes->get('(:any)', 'Pages::view/$1');
------------------------------------------------------
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
