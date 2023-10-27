<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertProduct');
$routes->get('products', 'ProductController::readProduct');
$routes->get('edit-product/(:any)', 'ProductController::getProduct/$1');
$routes->post('update-product/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-product/(:any)', 'ProductController::deleteProduct/$1');

$router->group('api', function ($routes) {
    $routes->get('product', 'ProductController::readProductAPI');
    $routes->get('product/(:any)', 'ProductController::getProductApi/$1');
});