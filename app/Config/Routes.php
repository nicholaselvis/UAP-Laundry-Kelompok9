<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\CustController;
use App\Controllers\KasirController;



/**
 * @var RouteCollection $routes
 */
$routes -> get('/', 'Home::index');
$routes -> get('/admin', [AdminController::class, 'index']);
$routes -> get('/admin/stok', [AdminController::class, 'stok']);
$routes -> get('/admin/kasir', [AdminController::class, 'kasir']);
$routes -> get('/admin/create_stok', [AdminController::class, 'create_stok']);
$routes -> post('/admin/store', [AdminController::class, 'store']);


$routes->get('/', 'Home::index');
$routes -> get('/dashboard_admin', [AdminController::class, 'index']);
$routes -> get('/stok', [AdminController::class, 'stok']);
$routes -> get('/kasir', [AdminController::class, 'kasir']);
$routes -> get('/dashboard_kasir', [KasirController::class, 'index']);
$routes -> get('/dashboard_cust', [CustController::class, 'index']);
