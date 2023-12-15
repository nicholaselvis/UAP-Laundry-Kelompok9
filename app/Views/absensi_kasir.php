<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <a class="navbar-brand">
                    <b class="logo-icon">
                        <img src="<?= base_url("assets/img/logonew.png") ?>" alt="homepage" style="height:50px;"/>
                    </b>
                </a>
                    <a class=" nav-toggler waves-effect waves-light text-dark d-block d-md-none"></a>
            </div>

            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav ms-auto d-flex align-items-center"><li>
                        <a class="profile-pic" href="#">
                            <img src="<?= base_url("assets/img/varun.jpg") ?>" alt="user-img" width="36"
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
                        
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('/dashboard_kasir')?>" aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </a>
                        </li>
                    <li class="sidebar-item pt-2">
                            <a href="<?=base_url('/absensi_kasir')?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Absensi</span>
                            </a>
                        </li>

                    <li class="sidebar-item pt-2">
                            <a href="<?=base_url('/riwayat_transaksi')?>" class="sidebar-link waves-effect waves-dark sidebar-link" 
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Riwayat Transaksi</span>
                            </a>
                        </li>
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('logout'); ?>" aria-expanded="false">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span class="hide-menu">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white ">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Absensi Kasir</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
            </div>
        </div>

       <div class="form-container-kasir container">
        <form action="<?= base_url('/absensi/store') ?>" method="POST" class="needs-validation" novalidate>
            <h4 class="text-center mb-4 mt-5">Silahkan lakukan absensi!</h4>

            
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" required>
                    <div class="invalid-feedback">Mohon isi nama.</div>
                </div>
            </div>

            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" id="date" name="date" class="form-control" required>
                    <div class="invalid-feedback">Mohon pilih tanggal.</div>
                </div>
            </div>

            <div class="form-group row">
                <label for="tanggal_booking" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-10">
                    <input type="time" id="time" name="time" class="form-control" required>
                    <div class="invalid-feedback">Mohon pilih waktu.</div>
                </div>
            </div>

            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">Bukti Kehadiran</label>
                <div class="col-sm-10">
                    <input type="file" name="bukti_absensi" class="form-control-file" required>
                    <div class="invalid-feedback">Mohon unggah bukti kehadiran.</div>
                </div>
            </div>

            
            <button type="submit" class="btn btn-primary float-right">Kirim</button>
        </form>
        </form>
    </div>

    <div class="riwayat-absensi-kasir">
        <h4 class="text-center mb-4">Lihat Riwayat Absensi Anda disini!</h4>
        

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
                                <td><?= $absensi['date'] ?></td>
                                <td><?= $absensi['time'] ?></td>                                               
                                <td><?= $absensi['bukti_absensi'] ?></td> 
                           
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
        
    </div>

        <img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />

        <?= $this->endsection() ?>