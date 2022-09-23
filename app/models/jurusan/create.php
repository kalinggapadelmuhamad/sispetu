<?php

if (isset($_POST['addJurusan'])) {

    $namaJurusan            = $_POST['namaJurusan'];

    $statmentJurusan        = "INSERT INTO jurusan VALUES ('','$namaJurusan')";
    $executeStatmentJurusan = $conn->query($statmentJurusan);

    if ($executeStatmentJurusan) {
        echo "<script>
                alert('Success');
                document.location = '?page=jurusan';
            </script>";
    } else {
        echo "<script>
                alert('Failed data jurusan sudah ada');
                document.location = '?page=jurusan';
            </script>";
    }
}
