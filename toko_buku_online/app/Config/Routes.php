<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => ['group:admin']], function($routes){
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('/daftar-buku', 'AdminController::daftarBuku');
    $routes->get('/daftar-buku', 'AdminController::createBuku');
    $routes->get('/transaksi', 'AdminController::transaksi');
    $routes->get('/pelanggan', 'AdminController::pelanggan');

});