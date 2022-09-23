<?php

if (isset($_POST['updateJurusan'])) {

    $idJurusan      = $_POST['idJurusan'];
    $namaJurusan    = $_POST['namaJurusan'];

    $statmentUpdateJurusan  = "UPDATE jurusan SET
                                            namaJurusan = '$namaJurusan'
                                        WHERE idJurusan = '$idJurusan'";

    $executeStatmentJurusan = $conn->query($statmentUpdateJurusan);

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
