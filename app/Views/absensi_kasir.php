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
                            <a href="<?=base_url('/riwayat_transaksi')?>" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Riwayat Transaksi</span>
                            </a>
                        </li>
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
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
                    <h4 class="page-title">Absensi Kasir</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
            </div>
        </div>

        <div class="row alignment-items-center" 
    style="position:absolute; 
    background-color:white;
    width:60%;
    left:60%;
    top:50%;
    transform:translate(-50%, -50%);
    border-radius:15px;
    padding:15px;
    padding-bottom: 10px;">
        <form action="<?= base_url('/absensi/store') ?>" method="POST">
            <h4 style="text-align:center;">Silahkan lakukan absensi!</h4>
            <div class="mb-1 row d-flex justify-content-center">
                <label label for="fname" class="col-sm-10 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input input type="text" id="fname" name="nama">
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="tanggal"> Tanggal Kehadiran </label>
                <div class="col-sm-10">
                    <input type="date" id="tanggal" name="tanggal">
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="waktu">Waktu </label>
                <div class="col-sm-10">
                    <input name="tanggal_booking" type="date" class="form-control" id="tanggal_booking">
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="lname">Bukti Kehadiran :</label>
                <div class="col-sm-10">
                    <input type="file" name="foto">
                </div>
            </div>
            
            <div style='margin-top:30px'></div>
            <button type="submit" class="btn btn-primary" style="float:right; background-color:#2C6BA2; border-radius:10px;">Kirim</button>
        </form>
    </div>

        <!-- <div class="container-fluid py-5" style="position:absolute;">
        <div class="container py-5" style="margin-left:380px; margin-top:-140px">
                <div class="row px-5 padleft" style="justify-content: center;">

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
        </div> -->
        <!-- <div class="row">
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

                                <td><?= $absensi['date'] ?></td>
                                <td><?= $absensi['time'] ?></td>                                               
                                <td><?= $absensi['bukti_absensi'] ?></td> 

                            
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
            </div>              
        </div> -->
        <img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />

        <?= $this->endsection() ?>