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

$routes -> get('/dashboard_admin', [AdminController::class, 'index']);
$routes -> get('/stok', [AdminController::class, 'stok']);
$routes -> get('/kasir', [AdminController::class, 'kasir']);


$routes -> get('/admin', [AdminController::class, 'index']);
$routes -> get('/admin/stok', [AdminController::class, 'stok']);
$routes -> get('/admin/kasir', [AdminController::class, 'kasir']);
$routes -> get('/admin/create_kasir', [AdminController::class, 'create_kasir']);
$routes -> post('/admin/kasirstore', [AdminController::class, 'kasirstore']);


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


$routes -> get('/dashboard_kasir', [KasirController::class, 'index']);
$routes -> get('/absensi_kasir', [AbsensiController::class, 'show']);

$routes -> get('/riwayat_transaksi', [RiwayatController::class, 'index']);
$routes -> post('/riwayat_transaksi', [RiwayatController::class, 'index']);


$routes -> post('/absensi/store', [AbsensiController::class, 'store'], ['filter' => 'role:kasir']);
// $routes->get('/dashboard_kasir', [AbsensiController::class, 'dashboard_kasir']);

$routes -> get('/detail/mesin/(:any)', [KasirController::class, 'mesin_cuci']);



$routes -> get('/dashboard_cust', [CustController::class, 'index'], ['filter' => 'role:customer']);

$routes -> get('/riwayat_cust', [CustController::class, 'riwayat'], ['filter' => 'role:customer']);
$routes -> get('/form1_cust', [CustController::class, 'form1'], ['filter' => 'role:customer']);
$routes -> get('/form2_cust', [CustController::class, 'form2'], ['filter' => 'role:customer']);

// $routes -> get('/bill_cust', [CustController::class, 'bill_cust']);
$routes -> post('/bill_cust', [CustController::class, 'bill_cust']);
$routes -> get('/bill_cust', [CustController::class, 'bill_cust']);
$routes -> get('/transaksiberhasil_cust', [CustController::class, 'transaksiberhasil_cust']);
$routes->get('/form1_cust', [CustController::class, 'form1']);
$routes->get('/form1', 'CustController::form1');
$routes->get('/form2', 'CustController::form2');
$routes->get('/form1/create', 'CustController::create');
// $routes -> post('/form1_cust/store', [CustControllerController::class, 'store']);
$routes -> get('/form1_cust', [CustController::class, 'show']);




