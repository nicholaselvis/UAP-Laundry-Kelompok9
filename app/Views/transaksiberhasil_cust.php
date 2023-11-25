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

        <div class="row" 
        style="position:absolute; 
        background-color:white;
        width:45%;
        left:60%;
        top:50%;
        transform:translate(-50%, -50%);
        border-radius:15px;
        padding:15px;">
        <h3 style="text-align:center; margin-bottom:75px;">Yeay, Transaksi Berhasil!</h3>
        <div class="card-body d-flex align-items-center justify-content-center" style="margin-bottom:90px;">
            <img class="card-img-top" style="width:200px; height:200px;" src="./assets/img/success.png" alt="Card image cap">
        </div>
        <div class="card-body d-flex align-items-center justify-content-center" style="margin-bottom:25px;">
                <a href="<?= base_url('/dashboard_cust')?>" class="btn" style="background-color:#2C6BA2; border-radius:25px; width:220px; color:white;font-size:22px;">Kembali</a>
        </div>
    </div>

<img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />
<?= $this->endsection() ?>