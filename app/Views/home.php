<?= $this->extend('layout/admin/base') ?>

<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h1>Hai! <?= session()->get('name'); ?></h1>
                <p class="lead">Selamat Datang di CINEMA XIXIXI</p>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

<?= $this->endSection() ?>