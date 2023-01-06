<?= $this->extend('layout/fe/base') ?>

<?= $this->section('content') ?>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('/') ?>/<?= $film['thumbnail'] ?>" alt="..." />
                        <!-- Product actions-->
                        <div class="card-footer border-top-0 bg-transparent" style="padding:0 !important;">
                            <div class="text-center"><a class="btn btn-warning btn-lg btn-block" href="<?= base_url('/jadwal') ?>/<?= $film['id'] ?>" style="width:100%;border-radius:0!important;">Lihat Jadwal Tayang</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <h2 class="card-title text-uppercase"><?= $film['title'] ?></h2>
                            <div class="card-text text-capitalize mt-5">
                                <div class="row">
                                    <div class="col-3">Kategori Film</div>
                                    <div class="col-9 text-capitalize">: <?= $film['category'] ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Produser</div>
                                    <div class="col-9 text-capitalize">: <?= $film['producer'] ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Sutradara</div>
                                    <div class="col-9 text-capitalize">: <?= $film['director'] ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Penulis</div>
                                    <div class="col-9 text-capitalize">: <?= $film['writer'] ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Produksi</div>
                                    <div class="col-9 text-capitalize">: <?= $film['production'] ?></div>
                                </div>
                            </div>
                            <div class="btn-group mt-5" role="group" aria-label="Basic example">
                                <a href="" type="button" class="btn btn-green-r">Watch Trailer</a>
                                <a href="" type="button" class="btn btn-green-r"></a>
                                <a href="" type="button" class="btn btn-green-r">Playing At</a>
                            </div>
                            <h5 class="card-title text-uppercase mt-5">sinopsis</h5>
                            <p class="card-text"><?= $film['content'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>