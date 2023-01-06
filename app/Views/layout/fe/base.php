<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cinema XIXIXI</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('/') ?>/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('/') ?>/assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('/') ?>/assets/css/custome.css" rel="stylesheet" />

</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-green">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Cinema XIXIXI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Film</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">About</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark bg-light" type="submit">
                        <i class="bi-cart-fill me-1"></i> Riwayat
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <!-- Footer-->
    <footer class="py-5 bg-green">
        <div class="container">
            <p class="m-0 text-center text-black">
                Copyright &copy; BUSDEV <script>document.write(new Date().getFullYear());</script>
            </p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('/') ?>/assets/js/scripts.js"></script>

</body>

</html>