<?php

if (isset($_GET['validasi'])) {


    if ($_GET['page'] == 'formPermohonan') {


        $idPermohonan = $_GET['validasi'];

        $statmentUpdatePermohonan = "UPDATE permohonan SET validasi = 'Y' WHERE idPermohonan = '$idPermohonan'";
        $executeUpdatePermohonan  = $conn->query($statmentUpdatePermohonan);

        if ($executeUpdatePermohonan) {
            echo "<script>
                alert('Success');
                document.location = '?page=formPermohonan';
            </script>";
        }
    }
}
