<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Pages::about');
$routes->get('career', 'Pages::career');

$routes->get('products/iron-pdf', 'Products::ironPdf');


$routes->set404Override('App\Controllers\Errors::show404');