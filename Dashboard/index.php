<?php

require "../config/database.php";

if (isset($_SESSION['idUser'])) {

    require_once '../resource/partials/dashboard/dashboard.php';
} else {
    header('location: ../login.php');
}
