<?php

if (isset($_POST['profileUpdate'])) {

    $idUser         = $_POST['idUser'];
    $fullName       = $_POST['namaLengkap'];
    $tglLahir       = $_POST['tglLahir'];
    $gender         = $_POST['gender'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $passwordHash   = password_hash($password, PASSWORD_DEFAULT);

    if (empty($password)) {

        $statmentProfileUpdate   = "UPDATE user SET
                                            fullName = '$fullName',
                                            email    = '$email',
                                            tglLahir = '$tglLahir',
                                            gender   = '$gender'
                                        WHERE idUser = $idUser";
        $executeProfileUpdate    = $conn->query($statmentProfileUpdate);

        if ($executeProfileUpdate) {

            echo "<script>
                    alert('Success');
                    document.location = '?page=profile';
                </script>";
        }
    } else {
        $statmentProfileUpdate   = "UPDATE user SET
                                            fullName = '$fullName',
                                            email    = '$email',
                                            tglLahir = '$tglLahir',
                                            gender   = '$gender',
                                            password = '$passwordHash'
                                        WHERE idUser = $idUser";

        $executeProfileUpdate     = $conn->query($statmentProfileUpdate);

        if ($executeProfileUpdate) {

            echo "<script>
                    alert('Success');
                    document.location = '../app/models/auth/authOff.php';
                </script>";
        }
    }
}
