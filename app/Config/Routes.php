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
$routes->post('/set-customer', 'Menu::setCustomer');
$routes->get('/orders', 'Menu::orders');
$routes->post('/orders/remove', 'Menu::remove');
$routes->post('/checkout', 'Menu::checkout');
$routes->post('/update-cart', 'Menu::updateCart');

$routes->get('/login', 'Admin::login');
$routes->post('/loginPost', 'Admin::loginPost');
$routes->get('/logout', 'Admin::logout');
$routes->get('/admin/dashboard', 'Admin::index');
$routes->get('/admin/products', 'Admin::products');
$routes->get('/admin/product/edit/(:any)', 'Admin::edit/$1');
$routes->post('/admin/add', 'Admin::addProduct');
$routes->get('/admin/orders', 'Admin::getOrders');
$routes->get('/admin/order/(:any)', 'Admin::detail/$1');
$routes->post('/admin/update-status', 'Admin::updateStatus');