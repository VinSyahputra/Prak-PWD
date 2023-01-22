<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIPERU</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url(); ?>/img/icon.png" type="img/png">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute top-0 w-100">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-success px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            API Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/api/json">JSON</a></li>
                            <li><a class="dropdown-item" href="/api/xml">XML</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-3 vh-100 d-flex align-items-center" style="background: url('<?= base_url(); ?>/img/home.jpg') no-repeat; background-size:cover; background-position: center;">
        <div class="container">
            <div class="my-3 user-select-none w-50">
                <h1 class="text-white fs-1 fw-bolder">SIPERU</h1>
                <p class="text-white mb-0 fs-3">Sistem Informasi Peminjaman Ruangan</p>
                <div class="d-flex mt-4">
                    <a class="btn btn-primary px-4 py-2" href="/auth/login">LOGIN</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?= base_url(); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>