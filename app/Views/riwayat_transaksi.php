<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" >
                        <b class="logo-icon">
                            <img src="<?= base_url("assets/img/logonew.png")?>" alt="homepage" style="height:50px;/>
                        </b>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        ></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    
                    <ul class="navbar-nav ms-auto d-flex align-items-center">                        
                        
                        <li>
                        <a class="profile-pic" href="#">
                                <img src="<?= base_url("assets/img/varun.jpg")?>" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Kasir</span></a>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
      
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('/dashboard_kasir')?>" aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?=base_url('/absensi_kasir')?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Absensi</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item pt-2">
                            <a href="<?=base_url('/riwayat_transaksi')?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Riwayat Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
       
        <div class="page-wrapper">
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Riwayat Transaksi</h4>
                        <input type="date" id="lname" name="tanggal"><br></td>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background-image: url('./assets/img/bg.png')">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Riwayat Transaksi Penjualan</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0">ID Transaksi</th>      
                                            <th class="border-top-0">Tanggal</th>      
                                            <th class="border-top-0">Mesin Cuci</th>
                                            <th class="border-top-0">Kapasitas (Kg)</th>
                                            <th class="border-top-0">Harga</th>
                                            <th class="border-top-0">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $data = []; $row=1; foreach($data as $transaksi_laundry): ?>
                                        <tr>
                                            <td><?= $row++;?></td>
                                            <td><?= $transaksi_laundry['tanggal_booking'] ?></td>
                                            <td><?= $transaksi_laundry['waktu'] ?></td>
                                            <td><?= ($transaksi_laundry['id_mesin_cuci'] == 1) ? "Mesin 1" : 
                                                    (($transaksi_laundry['id_mesin_cuci'] == 2) ? "Mesin 2" : 
                                                    (($transaksi_laundry['id_mesin_cuci'] == 3) ? "Mesin 3" : 
                                                    (($transaksi_laundry['id_mesin_cuci'] == 4) ? "Mesin 4" : "Mesin 5"))); ?>
                                            </td>
                                            <td><?= ($transaksi_laundry['id_mesin_cuci'] == 1) ? "1-2 Kg" : 
                                                    (($transaksi_laundry['id_mesin_cuci'] == 2) ? "3-4 Kg" : 
                                                    (($transaksi_laundry['id_mesin_cuci'] == 3) ? "5-6 Kg" : 
                                                    (($transaksi_laundry['id_mesin_cuci'] == 4) ? "7-8 Kg" : "9-10 Kg"))); ?>
                                            </td>
                                            <td><?= number_format($transaksi_laundry['total_transaksi'], 0, '.', '.'); ?></td>
                                            <td>Active</td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>

<?= $this->endsection() ?>