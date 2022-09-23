<?php

if (isset($_POST['permohonanAdd'])) {

    $namaPemohon    = $_POST['namaLengkap'];
    $nim            = $_POST['npm'];
    $idJurusan      = $_POST['jurusan'];
    $noWa           = $_POST['noWa'];
    $buktiName      = $_FILES['bukti']['name'];
    $tmpName        = $_FILES['bukti']['tmp_name'];

    $statmentPermohonan = "INSERT INTO permohonan VALUES(
                                                    '',
                                                    '$namaPemohon',
                                                    '$nim',
                                                    '$idJurusan',
                                                    '$noWa',
                                                    '$buktiName',
                                                    DEFAULT)";

    $executePermohonan = $conn->query($statmentPermohonan);
    if ($executePermohonan) {

        move_uploaded_file($tmpName, 'resource/file/' . $buktiName);
        echo '<script>
                document.location = "https://wa.me/082175572310?text=Hai%20Saya%20' . $namaPemohon . '%20telah%20mengajukan%20permohonan%20tolong%20di%20proses%20ya%20admin"
            </script>';
    }
}
