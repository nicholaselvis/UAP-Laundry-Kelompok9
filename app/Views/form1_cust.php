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
        <form action="/riwayat_transaksi" method="post" enctype="multipart/form-data">
            <h4 style="text-align:center;">Transaksi Baru</h4>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="nama" class="col-sm-10 col-form-label">Nama</label>
                <div class="col-sm-10">
                <select name="id_customer" class="form-select" aria-label="Default select example" required>
                    <?php foreach($cust as $cs): ?>
                        <option value="<?= $cs['id_customer']?>"><?= $cs['nama_customer'];?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="tanggal_booking" class="col-sm-10 col-form-label">Tanggal Booking</label>
                <div class="col-sm-10">
                    <input name="tanggal_booking" type="date" class="form-control" id="tanggal_booking" required>
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="jl" class="col-sm-10 col-form-label">Waktu Booking</label>
                <div class="col-sm-10">
                    <select name="waktu" class="form-select" aria-label="Default select example" required>
                        <option selected-disabled hidden value="1">Pilih Waktu Booking</option>
                        <option value="10:10-11:00">10:00-11:00</option>
                        <option value="11:00-12:00">11:00-12:00</option>
                        <option value="13:00-14:00">13:00-14:00</option>
                        <option value="15:00-16:00">15:00-16:00</option>
                        <option value="16:00-17:00">16:00-17:00</option>
                    </select>
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="jl" class="col-sm-10 col-form-label">Jenis Layanan</label>
                <div class="col-sm-10">
                    <select name="jl" class="form-select" aria-label="Default select example" required>
                        <option selected-disabled hidden value="1">Pilih Mesin Cuci</option>
                        <option value="1">Mesin 1</option>
                        <option value="2">Mesin 2</option>
                        <option value="3">Mesin 3</option>
                        <option value="4">Mesin 4</option>
                        <option value="5">Mesin 5</option>
                    </select>
                </div>
            </div>
            <div class="mb-1 row d-flex justify-content-center">
                <label for="jl" class="col-sm-10 col-form-label">Kapasitas (kg)</label>
                <div class="col-sm-10">
                    <select name="jl" class="form-select" aria-label="Default select example" required>
                        <option selected-disabled hidden value="1">Pilih Kapasitas</option>
                        <option value="2">1 - 2 kg</option>
                        <option value="2">3 - 5 kg</option>
                    </select>
                </div>
            </div>

            <div style='margin-top:30px'></div>
            <a href="<?= base_url('/dashboard_cust')?>" type="button" class="btn btn-secondary" style="border-radius:10px;">Kembali</a>
            <button name='submit' type="submit" class="btn btn-primary" style="float:right; background-color:#2C6BA2; border-radius:10px;">Konfirmasi</button>
            <a href="<?= base_url('/form1_cust')?>" type="button" class="btn btn-danger" style="float:right; margin-right:15px;border-radius:10px;">Batalkan Transaksi</a>
            
            </form>
        </form>
    </div>

<img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />
<?= $this->endsection() ?>