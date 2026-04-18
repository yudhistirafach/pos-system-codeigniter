<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    if (session()->get('isLoggedIn')) {
        return redirect()->to('/dashboard');
    } else {
        return redirect()->to('/login');
    }
});

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');

$routes->get('/products', 'Product::index');
$routes->get('/products/detail/(:num)', 'Product::show/$1');
$routes->get('/products/create', 'Product::create');
$routes->post('/products/store', 'Product::store');