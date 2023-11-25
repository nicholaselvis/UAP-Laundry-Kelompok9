<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

<header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" >
                        <b class="logo-icon">
                            <img src="<?= base_url("assets/img/logonew.png")?>" alt="homepage" style="height:50px";/>
                        </b>
                        
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"></a>
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
                    <ul id="sidebarnav" >
                        <li class="sidebar-item pt-2" >
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('/dashboard_kasir')?>" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
                </div>
            </div>
        </div>

    <div class="container-fluid py-5" style="position:absolute;">
        <div class="container py-5" style="margin-left:380px; margin-top:-140px">
                <div class="row px-5 padleft" style="justify-content: center;">
          
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url("assets/img/paket2.png")?>" alt="Card image cap"/>
                        <div class="card-paket1">
                            <h5 style="font-weight: bolder;">MESIN CUCI 1</h5>
                            <p>DETAIL</p>
                        </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url("assets/img/paket2.png")?>" alt="Card image cap"/>
                        <div class="card-paket1">
                            <h5 style="font-weight: bolder;">MESIN CUCI 2</h5>
                            <p>DETAIL</p>
                        </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url("assets/img/paket2.png")?>" alt="Card image cap"/>
                        <div class="card-paket1">
                            <h5 style="font-weight: bolder;">MESIN CUCI 3</h5>
                            <p>DETAIL</p>
                        </div>

                </div>

                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url("assets/img/paket2.png")?>" alt="Card image cap"/>
                        <div class="card-paket1">
                            <h5 style="font-weight: bolder;">MESIN CUCI 4</h5>
                            <p>DETAIL</p>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Transaksi Hari Ini</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                     
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0">ID Transaksi</th> 
                                            <th class="border-top-0">Tanggal</th>           
                                            <th class="border-top-0">Jenis Paket</th>
                                            <th class="border-top-0">Kapasitas (Kg)</th>
                                            <th class="border-top-0">Harga</th>
                                            <th class="border-top-0">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $row=1; foreach($data as $transaksi_laundry): ?>
                                        <tr>
                                            <td><?= $row++;?></td>
                                            <td><?= $transaksi_laundry['tanggal_booking'] ?></td>
                                            <td><?= $transaksi_laundry['waktu'] ?></td>
                                            <td><?= ($transaksi_laundry['id_jenis_layanan']==1)? "Paket 1" : "Paket 2"; ?></td>
                                            <td><?= ($transaksi_laundry['id_jenis_layanan']==1)? "1-2 Kg" : "3-5 Kg"; ?></td>
                                            <td><?= number_format($transaksi_laundry['total_transaksi'],0,'.','.'); ?></td>
                                            <td>Active</td>
                                        </tr>
                                    <?php endforeach; ?>
                                    
                                    </tbody>
                                </table>
                            </div>
 
                        </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url("assets/img/paket2.png")?>" alt="Card image cap"/>
                        <div class="card-paket1">
                            <h5 style="font-weight: bolder;">MESIN CUCI 5</h5>
                            <p>DETAIL</p>
                        </div>
                </div>
                </div>
        </div>
    </div>

    <img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />

<?= $this->endsection() ?>