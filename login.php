<?php

require "config/database.php";

if (isset($_SESSION['idUser'])) {

    header('location: Dashboard');
} else { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISPETU | Sistem Pelayanan Permohonan Satu Pintu.</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://kit.fontawesome.com/fbd4858647.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <section class="loginSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center mx-auto loginBox px-4 py-4">
                        <h4><span class="text-primary">SISPETU </span> LOGIN</h4>
                        <p>Use your credentials to access your account.</p>
                        <form action="app/models/auth/auth.php" method="POST">
                            <div class="text-start">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="admin@mail.com" name="email" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput2" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="*******" name="password" required>
                                </div>
                                <?php
                                if (isset($_GET['error'])) {
                                    if ($_GET['error'] == 'email') {
                                        echo '<p class="text-danger">Email tidak terdaftar!</p>';
                                    } else if (($_GET['error'] == 'password')) {
                                        echo '<p class="text-danger">Password Salah!</p>';
                                    }
                                }
                                ?>
                                <button class="btn btn-primary" name="authIn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
            $(window).scroll(function() {
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
            });
        </script>
    </body>

    </html>
<?php } ?>