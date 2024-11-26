<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/chart', 'Home::chart');
$routes->get('/chekout', 'Home::chekout');
$routes->get('/submit', 'Home::submit');
