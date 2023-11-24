<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\CustController;
use App\Controllers\KasirController;
use App\Controllers\AbsensiController;
use App\Controllers\RiwayatController;




/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes -> get('/dashboard_admin', [AdminController::class, 'index']);
$routes -> get('/stok', [AdminController::class, 'stok']);
$routes -> get('/kasir', [AdminController::class, 'kasir']);
$routes -> get('/dashboard_kasir', [KasirController::class, 'index']);

$routes -> get('/absensi_kasir', [AbsensiController::class, 'index']);
$routes -> get('/riwayat_transaksi', [RiwayatController::class, 'index']);

$routes -> get('/dashboard_cust', [CustController::class, 'index']);
$routes -> get('/riwayat_cust', [CustController::class, 'riwayat']);
$routes -> get('/form1_cust', [CustController::class, 'form1']);
$routes -> get('/form2_cust', [CustController::class, 'form2']);
$routes -> post('/bill_cust', [CustController::class, 'bill_cust']);
$routes -> get('/bill_cust', [CustController::class, 'bill_cust']);
$routes -> get('/transaksiberhasil_cust', [CustController::class, 'transaksiberhasil_cust']);
$routes->get('/form1_cust', [CustController::class, 'form1']);
$routes->get('/form1', 'CustController::form1');
$routes->get('/form2', 'CustController::form2');
$routes->get('/form1/create', 'CustController::create');
$routes -> post('/form1_cust/store', [CustControllerController::class, 'store']);
$routes -> get('/form1_cust', [CustController::class, 'show']);