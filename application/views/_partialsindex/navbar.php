<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="index.html">Koperasi</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li class=""><a href="<?php echo site_url('halamanutama/') ?>">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="#">Simulasi Perhitungan</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo site_url('tabeldeposito/deposito') ?>">Deposito</a></li>
                                        <li><a href="<?php echo site_url('tabelkredit/kredit') ?>">Kredit</a></li>
                                        <li><a href="<?php echo site_url('tabeltabungan/tabungan') ?>">Tabungan Program</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Pengajuan Transaksi</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo site_url('nasabah/detailpengajuan') ?>">Detail</a></li>
                                        <li><a href="<?php echo site_url('deposito/daftar') ?>">Deposito</a></li>
                                        <li><a href="<?php echo site_url('kredit/daftar') ?>">Kredit</a></li>
                                        <li><a href="<?php echo site_url('tabungan/daftar') ?>">Tabungan Program</a></li>
                                    </ul>
                                </li>
                                <?php if ($this->session->userdata('nik')) { ?>
                                    <li class="has-dropdown">
                                        <a href="#">User</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo site_url('nasabah/dashboard') ?>">Dashboard</a></li>
                                            <li><a href="<?php echo site_url('nasabah/profile') ?>">Profile</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                <?php if ($this->session->userdata('nik')) { ?>
                                    <li><a href="<?php echo site_url('nasabah/logout') ?>">Logout</a></li>
                                <?php } else { ?>
                                    <!-- <li><a href="">Daftar Nasabah</a></li> -->
                                    <li><a href="<?php echo site_url('nasabah/login') ?>">Login</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>