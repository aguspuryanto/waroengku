<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Users::register');
$routes->post('/register', 'Users::register');
$routes->get('/login', 'Users::login');
$routes->post('/login', 'Users::login');
$routes->get('/logout', 'Users::logout');
$routes->get('/reset-password', 'Users::resetPassword');
$routes->post('/reset-password', 'Users::resetPassword');
$routes->get('/users/newPassword/(:any)', 'Users::newPassword/$1');
$routes->post('/users/newPassword/(:any)', 'Users::newPassword/$1');

$routes->get('/dashboard', 'Dashboard::index');