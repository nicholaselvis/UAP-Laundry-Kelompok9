<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\CustController;
use App\Controllers\KasirController;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes -> get('/dashboard_admin', [AdminController::class, 'index']);
$routes -> get('/dashboard_kasir', [KasirController::class, 'index']);
$routes -> get('/dashboard_cust', [CustController::class, 'index']);