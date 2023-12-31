<?= $this->extend('layouts/appadmin') ?>

<?= $this->section('content') ?>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" >
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url("assets/img/logonew.png")?>" alt="homepage" style="height:50px">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        ></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="<?= base_url("assets/img/varun.jpg")?>" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('admin')?>"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('admin/kasir')?>"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Kasir</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('logout'); ?>"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">LogOut</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="background-image: url('./assets/img/bg.png')">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Kasir</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0"> 
                                <span class="counter text-success"><?= $jumlahkasir ;?></span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Transaksi</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <span class="counter text-purple"><?= $jumlahtransaksi ;?></span>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Histori Transaksi</h3>
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
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    

    <?= $this->endsection() ?>