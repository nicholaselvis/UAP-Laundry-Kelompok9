<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">

                <a class="navbar-brand">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="<?= base_url("assets/img/logonew.png") ?>" alt="homepage" style="height:50px;/>
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
                    <a class=" nav-toggler waves-effect waves-light text-dark d-block d-md-none"></a>
            </div>

            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">


                <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <li>
                        <a class="profile-pic" href="#">
                            <img src="<?= base_url("assets/img/varun.jpg") ?>" alt="user-img" width="36"
                                class="img-circle"><span class="text-white font-medium">Kasir</span></a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-item">
                        
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
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span class="hide-menu">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Absensi Kasir</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-12" style="background-image: url('./assets/img/bg.png')">
                <div class="white-box">
                    <table border="3">
                        <form action="<?= base_url('/absensi/store') ?>" method="POST">
                            <tr>
                                <td><label for="fname">Nama Lengkap :</label>
                                    <input type="text" id="fname" name="nama"><br>
                                </td>
                                <td><label for="tanggal">Tanggal Kehadiran :</label>
                                    <input type="date" id="tanggal" name="tanggal"><br>
                                </td>
                                <td><label for="waktu">Waktu :</label>
                                    <input type="time" id="waktu" name="time"><br>
                                </td>
                                <td><label for="lname">Bukti Kehadiran :</label>
                                    <input type="file" name="foto"><br>
                                </td>
                            </tr>
                    </table><br>
                    <td><button type="submit">Submit</button></td>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Riwayat Absensi</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <tr>
                            <th class="border-top-0">Nama Lengkap</th>
                            <th class="border-top-0">Tanggal Kehadiran</th>
                            <th class="border-top-0">Waktu Kehadiran</th>
                            <th class="border-top-0">Bukti Kehadiran</th>
                            </tr>
                            <?php foreach($absensi as $absensi):?>
                            <tr>
                            
                                <td><?= $absensi['nama'] ?></td>                                    
                                <td><?= $absensi['tanggal'] ?></td>
                                <td><?= $absensi['time'] ?></td>                                               
                                <td><?= $absensi['foto'] ?></td> 
                            
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
            </div>              
        </div>

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