
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" >
                        <b class="logo-icon">
                            <img src="<?= base_url("assets/img/logonew.png")?>" alt="Card image cap" style="height:50px";/>
                        </b>
                        
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        ></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">                        
                        <li>
                            <div class="container" href="#">
                                <img src="<?= base_url("assets/img/profile.png")?>" alt="" style="width:40px;height:40px;"/>
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

        <div class="row justify-content-center" 
style="position:absolute; 
background-color:white;
width:30%;
left:45%;
top:20%;
transform:translate(-10%, -10%);
border-radius:15px;
padding:10px;
padding-bottom: 10px;">
<img src="./assets/img/barcode_cust.png" alt="" style="width:150px;">
        <div class="">
            <table class="table table-borderless" style="background-color:white;">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" id="nama" name="nama" value="<?=$data['nama_customer'];?>" readonly></td>
                </tr>
                <tr>
                    <td>No WA</td>
                    <td><input type="text" id="no_wa" name="no_wa" value="<?=$data['no_wa'];?>" readonly></td>
                </tr>
                <tr>
                    <td>Tanggal Booking</td>
                    <td><input type="date" id="tanggal" name="tanggal" value="<?=$data['tanggal_booking'];?>" readonly></td>
                </tr>
                <tr>
                    <td>Waktu Booking</td>
                    <td><input type="text" id="waktu" name="waktu" value="<?=$data['waktu'];?>" readonly></td>
                </tr>
                <tr>
                    <td>Jenis Layanan</td>
                    <td><?php $jenis = null;
                        if($data['id_jenis_layanan']==1)$jenis = "Paket 1";
                        if($data['id_jenis_layanan']==2)$jenis = "Paket 2";
                    ?>
                        <input type="text" name="id_jenis_layanan" value="<?=$jenis?>" readonly/>

                        </td>
                </tr>
                <tr>
                <?php $cap = null;
                        if($data['kapasitas_pesanan']==1)$cap = "1-2";
                        if($data['kapasitas_pesanan']==2)$cap = "3-5";
                    ?>
                    <td>Kapasitas Pesanan</td>
                    <td><input type="text" name="id_jenis_layanan" value="<?=$cap?>Kg" readonly/></td>
                </tr>
                <tr>
                    <td>Total Transaksi</td>
                    <td><input type="text" name="id_jenis_layanan" value="Rp<?= number_format($data['total_transaksi'],0,'.','.');?>" readonly/></td>
                </tr>
            </tbody>
            </table>
        </div>

        <div class="card-body d-flex justify-content-center">
            <a href="<?= base_url('/transaksiberhasil_cust')?>" class="btn btn-primary" style="background-color:#2C6BA2; border-radius:25px; width:100px; color:white;">Selesai</a>
        </div>
    </div>

</div>

<img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />
<?= $this->endsection() ?>