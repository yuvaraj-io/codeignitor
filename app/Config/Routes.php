<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'Home::index');
$routes->get('/user/(:num)', 'Home::index/$1');
$routes->get('/profile/(:num)', 'Home::profile/$1');
$routes->setAutoRoute(false);