<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'Home::index');
$routes->get('/user/(:num)', 'Home::index/$1');
$routes->get('/profile/(:num)', 'Home::profile/$1');
$routes->get('register', 'Register::index');
$routes->post('register', 'Register::submit');
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::submit');
$routes->get('logout', 'Logout::index');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('upload', 'Upload::index');
$routes->post('upload', 'Upload::submit');

// $routes->get('/setup', 'Setup::index');
// $routes->get('/setup/droptable', 'Setup::dropTable');

// $routes->setAutoRoute(false);