<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">

                <a class="navbar-brand">
                    <b class="logo-icon">
                        <img src="<?= base_url("assets/img/logonew.png") ?>" alt="homepage" style="height:50px" ; />
                    </b>

                </a>

                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"></a>
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
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="<?= base_url('/dashboard_kasir') ?>" aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('/absensi_kasir') ?>"
                            class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Absensi</span>
                        </a>
                    </li>

                    <li class="sidebar-item pt-2">
                        <a href="<?= base_url('/riwayat_transaksi') ?>"
                            class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Riwayat Transaksi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('logout'); ?>" aria-expanded="false">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span class="hide-menu">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="page-wrapper mt-5">

        
        <div class="container-fluid" style="background-image: url('./assets/img/bg.png')">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Detail Mesin Cuci</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <!-- <th class="border-top-0">No.</th> -->
                                    <th class="border-top-0">ID Transaksi</th>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">No. Mesin</th>
                                    <th class="border-top-0">Kapasitas (Kg)</th>
                                    <th class="border-top-0">Harga</th>
                                    <th class="border-top-0">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($mesin_cuci as $transaksi_laundry) { ?>
                                    <tr>
                                        <td>
                                            <?= $transaksi_laundry['id_transaksi']; ?>
                                        </td>
                                        <td>
                                            <?= $transaksi_laundry['tanggal_booking']; ?>
                                        </td>
                                        <td>
                                            <?= $transaksi_laundry['id_mesin_cuci']; ?>
                                        </td>
                                        <td>
                                            <?= $transaksi_laundry['kapasitas_pesanan']; ?>
                                        </td>
                                        <td>
                                            <?= $transaksi_laundry['total_transaksi']; ?>
                                        </td>
                                        <td>Active</td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <?= $this->endsection() ?>