<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Admin Page</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?php echo site_url('pegawai/index') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNasabah" aria-expanded="false" aria-controls="collapseNasabah">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                            Nasabah
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseNasabah" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo site_url('pegawai/nasabah') ?>">Dashboard</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDeposito" aria-expanded="false" aria-controls="collapseDeposito">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Deposito
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDeposito" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo site_url('pegawai/deposito') ?>">Dashboard</a>
                                <a class="nav-link" href="<?php echo site_url('pegawai/depositobunga') ?>">Bunga</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKredit" aria-expanded="false" aria-controls="collapseKredit">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>
                            Kredit
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseKredit" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo site_url('pegawai/kredit') ?>">Dashboard</a>
                                <a class="nav-link" href="<?php echo site_url('pegawai/kreditbunga') ?>">Bunga</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTabungan" aria-expanded="false" aria-controls="collapseTabungan">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                            Tabungan Program
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseTabungan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo site_url('pegawai/tabungan') ?>">Dashboard</a>
                                <a class="nav-link" href="<?php echo site_url('pegawai/tabunganbunga') ?>">Bunga</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?php echo site_url('pegawai/logout') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>