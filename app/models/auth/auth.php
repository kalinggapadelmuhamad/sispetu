<?php

include '../../../config/database.php';

if (isset($_POST['authIn'])) {

    $email          = $_POST['email'];
    $passwrord      = $_POST['password'];

    $statment       = "SELECT * FROM user WHERE email = '$email'";
    $execute        = $conn->query($statment);
    $executeRows    = $execute->num_rows;

    if ($executeRows == 1) {

        $dataUser       = $execute->fetch_object();
        $passwordUser   = $dataUser->password;
        $passwordVerify = password_verify($passwrord, $passwordUser);

        if ($passwordVerify) {

            $_SESSION['idUser'] = $dataUser->idUser;
            echo "<script>
                    document.location = '../../../Dashboard';
                </script>";
        } else {
            echo "<script>
                    document.location = '../../../login.php?error=password';
                </script>";
        }
    } else {
        echo "<script>
                document.location = '../../../login.php?error=email';
            </script>";
    }
}
