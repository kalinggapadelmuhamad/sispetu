<?php

$statmentbyId           = "SELECT * FROM jurusan WHERE idJurusan = '$executeResultJurusan->idJurusan'";
$executebyId            = $conn->query($statmentbyId);
$executeresultStore     = $executebyId->fetch_object();
