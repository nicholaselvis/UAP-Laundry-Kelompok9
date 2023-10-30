<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes -> get('/dashboard_admin', [AdminController::class, 'index']);
