<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Toko</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    include_once("../../controller/koneksi.php");
    ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="approve.php">Approve <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-2">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Managemen Data
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item p-2" href="../view/view_pendaftar.php">Pendaftar</a>
                                <a class="dropdown-item p-2" href="../view/view_portofolio.php">Portofolio</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item p-2">
                        <div class="dropdown">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Logout
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">
                    <?php if (isset($_SESSION['nama_posisi'])) {
                        echo "Selamat datang " .  $_SESSION['nama_posisi'];
                    } else {
                        echo " SEKRETARIAT";
                    }
                    ?>
                </h1>
                <p class="lead">Demo Website KEANGGOTAAN</p>
            </div>
        </div>
    </section>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/popper.js"></script>
</body>

</html>