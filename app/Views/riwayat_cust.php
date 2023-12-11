<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <a class="navbar-brand" >
                    <b class="logo-icon">
                        <img src="assets/img/logonew.png" style="height:50px";/>
                    </b>
                </a>
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                ></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav ms-auto d-flex align-items-center">                        
                    <li>
                        <div class="container" href="#">
                            <img src="assets/img/profile.png" alt="" style="width:40px;height:40px;"/>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<!-- Sidebar -->
<aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" >
                        <li class="sidebar-item pt-2" >
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('/dashboard_cust')?>">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('/riwayat_cust')?>">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Riwayat</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

<div class="page-wrapper">
            <div class="row" style="padding-top: 20px; padding-left: 240px;">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Riwayat Transaksi</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No.</th>
                                        <th class="border-top-0">Tanggal</th>
                                        <th class="border-top-0">Waktu</th>
                                        <th class="border-top-0">Jenis Paket</th>
                                        <th class="border-top-0">Kapasitas (kg)</th>
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
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />

<?= $this->endsection() ?>