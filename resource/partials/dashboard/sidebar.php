<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">SISPETU</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <?php

    if ($executeResultProfile->isAdmin == '1') { ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Master
        </div>
        <li class="nav-item">
            <a class="nav-link" href="?page=user">
                <i class="fas fa-user"></i>
                <span>Pengguna</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=jurusan">
                <i class="fas fa-list"></i>
                <span>Jurusan</span>
            </a>
        </li>
    <?php } else { ?>

    <?php } ?>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Laporan
    </div>
    <li class="nav-item">
        <a class="nav-link" href="?page=formPermohonan">
            <i class="fas fa-flag"></i>
            <span>Form Permohonan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>