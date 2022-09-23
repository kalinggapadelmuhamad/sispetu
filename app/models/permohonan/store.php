<?php

$statmentPermohonan      = "SELECT * FROM permohonan a, jurusan b WHERE a.idJurusan = b.idJurusan";
$executePermohonan       = $conn->query($statmentPermohonan);
