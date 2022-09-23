<?php

if (isset($_POST['penggunaAdd'])) {

    $fullName     = $_POST['namaLengkap'];
    $tglLahir     = $_POST['tglLahir'];
    $gender       = $_POST['gender'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $statment   = "INSERT INTO user VALUES (
                                        '',
                                        '$fullName',
                                        '$tglLahir',
                                        '$gender',
                                        '$email',
                                        '$passwordHash',
                                        DEFAULT)";
    $execute    = $conn->query($statment);
    if ($execute) {
        echo "<script>
                alert('Success');
                document.location = '?page=user';
            </script>";
    }
    // echo $conn->error;
    // die;
}
