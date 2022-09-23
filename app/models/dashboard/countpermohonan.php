<?php

$statmentCountPermohonan   = "SELECT * FROM permohonan";
$execureCountPermohonan    = $conn->query($statmentCountPermohonan);
$countPermohonan           = $execureCountPermohonan->num_rows;

$statmentCountPermohonanY   = "SELECT * FROM permohonan WHERE validasi = 'Y'";
$execureCountPermohonanY    = $conn->query($statmentCountPermohonanY);
$countPermohonanY           = $execureCountPermohonanY->num_rows;

$statmentCountPermohonanX   = "SELECT * FROM permohonan WHERE validasi = 'N'";
$execureCountPermohonanX    = $conn->query($statmentCountPermohonanX);
$countPermohonanX           = $execureCountPermohonanX->num_rows;
