<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Main Menu</div>
            <a class="<?= menuaktif('dashboard', $aktif); ?> nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <!-- <div class="sb-sidenav-menu-heading">Kependudukan</div> -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#kependudukan" aria-expanded="false" aria-controls="kependudukan">
                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                Kependudukan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse <?= ($show == 'kependudukan') ? "show" : ""; ?>" id="kependudukan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="<?= menuaktif('kartu_keluarga', $aktif); ?> nav-link" href="layout-static.html">Kartu Keluarga</a>
                    <a class="<?= menuaktif('penduduk', $aktif); ?> nav-link" href="layout-sidenav-light.html">penduduk</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#mutasi" aria-expanded="false" aria-controls="mutasi">
                <div class="sb-nav-link-icon"><i class="fas fa-exchange-alt"></i></div>
                Mutasi
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse <?= ($show == 'mutasi') ? "show" : ""; ?>" id="mutasi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="<?= menuaktif('mutasi_datang', $aktif); ?> nav-link" href="layout-static.html">Mutasi Datang</a>
                    <a class="<?= menuaktif('mutasi_pindah', $aktif); ?> nav-link" href="layout-sidenav-light.html">Mutasi Pindah</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#peristiwa" aria-expanded="false" aria-controls="peristiwa">
                <div class="sb-nav-link-icon"><i class="fab fa-sith"></i></div>
                Peristiwa
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse <?= ($show == 'peristiwa') ? "show" : ""; ?>" id="peristiwa" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="<?= menuaktif('kelahiran', $aktif); ?> nav-link" href="layout-static.html">Kelahiran</a>
                    <a class="<?= menuaktif('kematian', $aktif); ?> nav-link" href="layout-sidenav-light.html">Kematian</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#kuisioner" aria-expanded="false" aria-controls="kuisioner">
                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                Kuisioner
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse <?= ($show == 'kuisioner') ? "show" : ""; ?>" id="kuisioner" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="<?= menuaktif('kuisioner', $aktif); ?> nav-link" href="layout-static.html">Data Kuisioner</a>
                    <a class="<?= menuaktif('download_kuisioner', $aktif); ?> nav-link" href="layout-sidenav-light.html">Download Kuisioner</a>
                </nav>
            </div>

            <div class="sb-sidenav-menu-heading">Admin</div>
            <a class="<?= menuaktif('manajement_user', $aktif); ?>  nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Manajement User
            </a>
            <a class="<?= menuaktif('manajement_desa', $aktif); ?>  nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Manajement Desa
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>