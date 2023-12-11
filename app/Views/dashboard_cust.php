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

    <div class="container-fluid py-5" style="position:absolute;">
        <div class="container py-5" style="margin-left:380px; margin-top:-140px">
                <div class="text">
                    Selamat Datang!
                </div>
                <div class="row px-5 padleft" style="justify-content: center;">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= base_url("assets/img/paket2.png")?>" alt="Card image cap"/>
                            <div class="card-paket1">
                                
                                <h5 style="font-weight: bolder;">Booking Pesanan Anda!</h5>
                                <p></p>
                                <a href="<?=base_url('/form1_cust')?>">
                                <img src="<?= base_url("assets/img/tambah.png")?>" alt="homepage" width="40"/>
                                </a>
                            </div>
                        </div>
                        

                </div>
        </div>
    </div>

    <img src="<?= base_url("assets/img/bg.png")?>" alt="homepage" class="bg-overlay" />

<?= $this->endsection() ?>