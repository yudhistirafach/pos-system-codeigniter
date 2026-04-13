<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
