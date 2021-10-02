<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?> || SIAP</title>

    <!-- Select2 -->
    <link href="<?= base_url(); ?>/assets/select2/select2.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?= base_url(); ?>/assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?= $this->include('layout/navbar'); ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?= $this->include('layout/sidebar'); ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?= $this->renderSection('content'); ?>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Jquery -->
    <script src="<?= base_url(); ?>/assets/jquery/jquery-3.5.1.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Bootsrap -->
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap 5 -->
    <script src="<?= base_url(); ?>/assets/bootstrap5/bootstrap.bundle.min.js"></script>

    <!-- Select2 -->
    <script src="<?= base_url(); ?>/assets/select2/select2.min.js"></script>

    <!-- DataTabes -->
    <script src="<?= base_url(); ?>/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Sweetalert2 -->
    <script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Custom -->
    <script src="js/scripts.js"></script>
</body>

</html>