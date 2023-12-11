<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\CustController;
use App\Controllers\KasirController;
use App\Controllers\AbsensiController;
use App\Controllers\RiwayatController;
use App\Controllers\Home;




/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/redirect', 'Home::redirect');

$routes->get('/register', 'Home::register');


$routes -> get('/admin', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes -> get('/admin/stok', [AdminController::class, 'stok'], ['filter' => 'role:admin']);
$routes -> get('/admin/kasir', [AdminController::class, 'kasir'], ['filter' => 'role:admin']);
$routes -> get('/admin/create_kasir', [AdminController::class, 'create_kasir'], ['filter' => 'role:admin']);
$routes -> post('/admin/kasirstore', [AdminController::class, 'kasirstore'], ['filter' => 'role:admin']);

$routes -> get('/admin/(:any)/edit_kasir', [AdminController::class, 'edit_kasir'], ['filter' => 'role:admin']);
$routes -> put('/admin/(:any)', [AdminController::class, 'updateKasir'], ['filter' => 'role:admin']);
$routes -> delete('/admin/(:any)', [AdminController::class, 'destroyKasir'], ['filter' => 'role:admin']);


$routes -> get('/dashboard_kasir', [KasirController::class, 'index'], ['filter' => 'role:kasir']);
$routes -> get('/absensi_kasir', [AbsensiController::class, 'show'], ['filter' => 'role:kasir']);
$routes -> get('/riwayat_transaksi', [RiwayatController::class, 'index'], ['filter' => 'role:kasir']);

$routes -> post('/absensi/store', [AbsensiController::class, 'store'], ['filter' => 'role:kasir']);
// $routes->get('/dashboard_kasir', [AbsensiController::class, 'dashboard_kasir']);



$routes -> get('/dashboard_cust', [CustController::class, 'index'], ['filter' => 'role:customer']);

$routes -> get('/riwayat_cust', [CustController::class, 'riwayat'], ['filter' => 'role:customer']);
$routes -> get('/form1_cust', [CustController::class, 'form1'], ['filter' => 'role:customer']);
$routes -> get('/form2_cust', [CustController::class, 'form2'], ['filter' => 'role:customer']);


