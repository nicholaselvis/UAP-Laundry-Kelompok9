
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" >
                <b class="logo-icon">
                    <img src="assets/img/logonew.png"Card image cap" style="height:50px";/>
                </b>      
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"></a>
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

<div class="d-flex">
    <div class="wrap col-sm-6">
        <div class="mb-3 card-body">
            <img src="<?= base_url("assets/img/barcode_cust.png")?>" alt="" style="width:150px;">
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" readonly class="form-control" id="nama" value="<?=$data['nama_customer'];?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_wa" class="col-sm-3 col-form-label">No WA</label>
            <div class="col-sm-8">
                <input type="text" readonly class="form-control" id="no_wa" value="<?=$data['no_wa'];?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-3 form-label">Tanggal Booking</label>
            <div class="col-sm-8">
                <input type="text" readonly class="form-control" id="tanggal" value="<?=$data['tanggal_booking'];?>">
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="waktu" class="col-sm-3 col-form-label">Waktu Booking</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="waktu" value="<?=$data['waktu'];?>"readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id_mesin_cuci" class="col-sm-3 col-form-label">Mesin Cuci</label>
            <div class="col-sm-8">
                <?php $jenis = null;
                    if($data['id_mesin_cuci']==1)$jenis = "Mesin 1";
                    if($data['id_mesin_cuci']==2)$jenis = "Mesin 2";
                    if($data['id_mesin_cuci']==3)$jenis = "Mesin 3";
                    if($data['id_mesin_cuci']==4)$jenis = "Mesin 4";
                    if($data['id_mesin_cuci']==5)$jenis = "Mesin 5";
                ?>
                <input type="text" class="form-control" id="id_mesin_cuci" value="<?=$jenis?>"readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id_kapasitas_pesanan" class="col-sm-3 col-form-label">Kapasitas Pesanan</label>
            <div class="col-sm-8">
                <?php $jenis = null;
                    if($data['kapasitas_pesanan']==1)$cap = "1-2";
                    if($data['kapasitas_pesanan']==2)$cap = "3-4";
                    if($data['kapasitas_pesanan']==3)$cap = "5-6";
                    if($data['kapasitas_pesanan']==4)$cap = "7-8";
                    if($data['kapasitas_pesanan']==5)$cap = "9-10";
                ?>
                <input type="text" class="form-control" id="id_kapasitas_pesanan" value="<?=$cap?> Kg"readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="#" class="col-sm-3 col-form-label">Total Transaksi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="id_mesin_cuci" value="Rp<?= number_format($data['total_transaksi'],0,'.','.');?>" readonly/>
            </div>
        </div>

        <div class="card-body d-flex justify-content-center">
            <a href="<?= base_url('/transaksiberhasil_cust')?>" class="btn btn-primary" style="background-color:#2C6BA2; border-radius:25px; width:100px; color:white;">Selesai</a>
        </div>
    </div>
</div>

<img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />
<?= $this->endsection() ?>