<?php

//check session idUser
if (isset($_SESSION['idUser'])) {

    //collect data
    $idUser = $_SESSION['idUser'];

    //sekect data employes from table
    $statmentProfile      = "SELECT * FROM user WHERE idUser = '$idUser'";
    $executeProfile       = $conn->query($statmentProfile);
    $executeResultProfile = $executeProfile->fetch_object();

    //set session level user
    $_SESSION['level']     = $executeResultProfile->isAdmin;
    $_SESSION['fullName']  = $executeResultProfile->fullName;
}
