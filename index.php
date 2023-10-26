<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT Pipit</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
    
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="./assets/img/zyro-image.png" alt="Logo" width="50" height="45" class="d-inline-block">
                PT. PIPIT MUTIARA INDAH
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <form action="#" method="POST">
                            <li class="nav-item">
                                <div class="text-center">     
                                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                        <div class="features-icons-icon d-flex"><i class="bi-envelope m-auto text-primary" style="font-size: 450%;"></i></div>
                                        <h3>SPD</h3>
                                        <p class="lead mb-0">Surat Pengantar Dokumen</p>
                                        <br>
                                        <button type="button" onclick="location = 'spd.php';" class="btn btn-secondary">Edit SPD</button>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <div class="text-center">
                                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                        <div class="features-icons-icon d-flex"><i class="bi-building m-auto text-primary" style="font-size: 450%;"></i></div>
                                        <h3>HOTEL LOTUS</h3>
                                        <p class="lead mb-0">Surat Hotel Lotus</p>
                                        <br>
                                        <button type="button" onclick="location = 'lotus.php';" class="btn btn-secondary">Edit Surat</button>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <div class="text-center">
                                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                        <!-- <div class="features-icons-icon d-flex"><i class="bi-person-fill m-auto text-primary" style="font-size: 450%;"></i></div> -->
                                        <!-- <h3>Keluar</h3> -->
                                        <!-- <p class="lead mb-0">Kartu Izin Tinggal Terbatas</p> -->
                                        <br>
                                        <button type="submit" name="logout" class="btn btn-danger">Keluar</button> 
                                    </div>
                                </div>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <p class="text-muted small mb-4 mb-lg-0">&copy; PT. Pipit Mutiara Jaya 2023. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    if (isset($_POST['logout'])) {
        echo "<script>location.href = 'login.php'</script>";
    }
?>