<?php

if (isset($_GET['hapus'])) {

    if ($_GET['page'] == 'jurusan') {


        $idJurusan = $_GET['hapus'];

        $statmentDeleteUser = "DELETE FROM jurusan WHERE idJurusan = '$idJurusan'";
        $executeDeleteUser  = $conn->query($statmentDeleteUser);

        if ($executeDeleteUser) {
            echo "<script>
                alert('Success');
                document.location = '?page=jurusan';
            </script>";
        }
    }
}
