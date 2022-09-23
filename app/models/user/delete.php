<?php

if (isset($_GET['hapus'])) {

    if ($_GET['page'] == 'user') {


        $idUser = $_GET['hapus'];

        $statmentDeleteUser = "DELETE FROM user WHERE idUser = '$idUser'";
        $executeDeleteUser  = $conn->query($statmentDeleteUser);

        if ($executeDeleteUser) {
            echo "<script>
                alert('Success');
                document.location = '?page=user';
            </script>";
        }
    }
}
