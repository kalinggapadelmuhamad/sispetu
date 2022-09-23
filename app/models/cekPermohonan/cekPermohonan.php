<?php

if (isset($_POST['cekLaporan'])) {

    $noPermohonan = $_POST['nomorPermohonan'];

    $cekPermohonan  = "SELECT * FROM permohonan WHERE idPermohonan = '$noPermohonan'";
    $sqlPermohonan  = $conn->query($cekPermohonan);
    $cekData        = $sqlPermohonan->num_rows;

    if ($cekData == 1) {

        $result = $sqlPermohonan->fetch_object();

        if ($result->validasi == 'Y') {
            header('location: ?validate=true#cekPermohonan');
        } else {
            header('location: ?validate=false#cekPermohonan');
        }
    } else {
        echo "<script>
                alert('Nomor Tidak Ditemukan')
            </script>";
    }
}
