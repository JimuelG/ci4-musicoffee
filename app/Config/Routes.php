<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/products', 'Home::product');
$routes->get('/menu', 'Menu::index');
$routes->post('/menu', 'Menu::is_selected');

$routes->get('/admin/dashboard', 'Admin::index');
$routes->get('/admin/products', 'Admin::products');