<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" >
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url("assets/img/logo.png")?>" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        ></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                        
                            <span class="text-white font-medium">Kasir</span></a>
                        
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Absensi</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Riwayat Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                
                
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12"></div>
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Booking Pesanan</h3>
                            </div>
                            <div class="table-responsive" >
                            <div style="display: inline-block;" >
                                <b>
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 1</td>
                                </table>
                                <table border="3" cellpadding="51" bgcolor="#2cabe3">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 2</td>
                                </table>
                                <table border="3" cellpadding="51">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 3</td>
                                </table>
                                <table border="3" cellpadding="51">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 4</td>
                                </table>
                                <table border="3" cellpadding="51">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33" >
                                    <td> Mesin Cuci 5</td>
                                </table>
                                <table border="3" cellpadding="51" bgcolor="#2cabe3">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 6</td>
                                </table>
                                <table border="3" cellpadding="51" >
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 7</td>
                                </table>
                                <table border="3" cellpadding="51">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>

                            <div style="display: inline-block;" >
                                <table border="3" cellpadding="33"  >
                                    <td> Mesin Cuci 8</td>
                                </table>
                                <table border="3" cellpadding="51">
                                <tr>
                                    <td> Details</td>
                                </tr>
                                </table>
                            </div>
                                </b>                                    
                                </table>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Transaksi Hari Ini</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nama</th>
                                            
                                            <th class="border-top-0">Berat Cucian (Kg)</th>
                                            <th class="border-top-0">Lainnya</th>
                                            <th class="border-top-0">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Estes</td>
                                            
                                            <td class="txt-oflo">3 </td>
                                            <td class="txt-oflo">Detergen </td>
                                            <td><span class="text-success">36.000</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Layla</td>
                                            
                                            <td class="txt-oflo">4,5</td>
                                            <td class="txt-oflo">- </td>
                                            <td><span class="text-info">45.000</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Rafaela</td>
                                            <td class="txt-oflo">2</td>
                                            <td class="txt-oflo">Detergen </td>
                                            <td><span class="text-info">32.000</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>

    <?= $this->endsection() ?>