<?php

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'profile') {
        require_once '../resource/partials/dashboard/content/profile/profile.php';
    } else if ($_GET['page'] == 'user') {
        require_once '../resource/partials/dashboard/content/user/user.php';
    } else if ($_GET['page'] == 'jurusan') {
        require_once '../resource/partials/dashboard/content/jurusan/jurusan.php';
    } else if ($_GET['page'] == 'formPermohonan') {
        require_once '../resource/partials/dashboard/content/permohonan/permohonan.php';
    }
} else {
    require_once '../resource/partials/dashboard/content/dashboard.php';
}
