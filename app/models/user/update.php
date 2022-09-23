<?php

if (isset($_POST['penggunaEdit'])) {

    $idUser       = $_POST['idUser'];
    $fullName     = $_POST['namaLengkap'];
    $tglLahir     = $_POST['tglLahir'];
    $gender       = $_POST['gender'];
    $password     = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $level        = $_POST['level'];

    if (empty($password)) {

        $statment   = "UPDATE user SET
                            fullName = '$fullName',
                            tglLahir = '$tglLahir',
                            gender   = '$gender',
                            isAdmin  = '$level'
                        WHERE idUser = $idUser";
        $execute    = $conn->query($statment);

        if ($execute) {

            echo "<script>
                    alert('Success');
                    document.location = '?page=user';
                </script>";
        }
    } else {
        $statment   = "UPDATE user SET
                            fullName = '$fullName',
                            tglLahir = '$tglLahir',
                            gender   = '$gender',
                            password = '$passwordHash',
                            isAdmin  = '$level'
                        WHERE idUser = $idUser";

        $execute    = $conn->query($statment);

        if ($execute) {

            echo "<script>
                    alert('Success');
                    document.location = '?page=user';
                </script>";
        }
    }
}
