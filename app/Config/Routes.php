<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/products', 'Home::product');
$routes->get('/menu', 'Menu::index');
$routes->post('/addCart', 'Menu::addCart');
// $routes->get('/cart', 'Menu::cart');
$routes->get('/orders', 'Menu::orders');
$routes->post('/orders/remove', 'Menu::remove');
$routes->post('/checkout', 'Menu::checkout');


$routes->get('/admin/dashboard', 'Admin::index');
$routes->get('/admin/products', 'Admin::products');
$routes->post('/admin/add', 'Admin::addProduct');
$routes->get('/admin/orders', 'Admin::getOrders');
