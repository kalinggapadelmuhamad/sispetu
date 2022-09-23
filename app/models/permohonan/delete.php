<?php

if (isset($_GET['hapus'])) {

    if ($_GET['page'] == 'formPermohonan') {


        $idPermohonan = $_GET['hapus'];

        $statmentDeletePermohonan = "DELETE FROM permohonan WHERE idPermohonan = '$idPermohonan'";
        $executeDeletePermohonan  = $conn->query($statmentDeletePermohonan);

        if ($executeDeletePermohonan) {
            echo "<script>
                alert('Success');
                document.location = '?page=formPermohonan';
            </script>";
        }
    }
}
