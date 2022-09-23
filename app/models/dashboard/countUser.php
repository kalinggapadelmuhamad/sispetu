<?php

$statmentCountUser   = "SELECT * FROM user";
$execureCountUser    = $conn->query($statmentCountUser);
$countUser           = $execureCountUser->num_rows;
