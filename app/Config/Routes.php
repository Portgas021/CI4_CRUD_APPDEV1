<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/users/(:any)', 'Users::index/$1');
$routes->post('/store', 'Home::store');
$routes->get('/add', 'Home::add');

$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->post('/update/(:any)', 'Home::update/$1');
$routes->get('/delete/(:any)', 'Home::delete/$1');

// $routes->get('/home', 'HomeController::home');
// $routes->get('/login', 'LoginController::login');
// $routes->get('user/(:any)', 'UserController::index/$1'); 
// $routes->get('/userlogin', 'UserController::loginPage');
// $routes->get('/register', 'UserController::registration');

