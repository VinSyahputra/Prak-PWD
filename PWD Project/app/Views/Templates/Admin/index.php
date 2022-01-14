<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIPERU</title>
    <link rel="icon" href="<?= base_url(); ?>/img/icon.png" type="img/png">
    <!-- fontawesome -->
    <script src="<?= base_url(); ?>/fontawesome/js/all.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <!-- datatables -->
    <link href="<?= base_url(); ?>/css/datatables.css" rel="stylesheet" />
    <!-- custom style -->
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.bootstrap5.min.css">


    <link rel="stylesheet" href="<?= base_url(); ?>/timepicker/jquery.timepicker.min.css">
    <script src="<?= base_url(); ?>/js/simple-datatables.min.js"></script>
    <script src="<?= base_url(); ?>/js/datatables-simple-demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <!-- topbar -->
    <?= $this->include('Templates/Admin/topbar'); ?>
    <!-- end of topbar -->
    <div id="layoutSidenav">
        <!-- sidebar -->
        <?= $this->include('Templates/Admin/sidebar'); ?>
        <!-- end of sidebar -->
        <div id="layoutSidenav_content">
            <main>
                <?= $this->renderSection('content'); ?>
            </main>
        </div>
    </div>
    <!-- <script src="<?= base_url(); ?>/js/scripts.js"></script> -->

    <script src="<?= base_url(); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>