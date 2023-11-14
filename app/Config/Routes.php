<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;


/**
 * @var RouteCollection $routes
 */
$routes -> get('/', 'Home::index');
$routes -> get('/admin', [AdminController::class, 'index']);
$routes -> get('/admin/stok', [AdminController::class, 'stok']);
$routes -> get('/admin/kasir', [AdminController::class, 'kasir']);
$routes -> get('/admin/create_stok', [AdminController::class, 'create_stok']);
$routes -> post('/admin/store', [AdminController::class, 'store']);