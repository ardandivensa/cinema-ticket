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
                        <div class="card-body text-center mt-5">
                            <h2 class="card-title text-uppercase">studio 3</h2>
                            <h6 class="card-subtitle mb-2 text-muted"><script>document.write(new Date().getDate() + "- " + (1 + new Date().getMonth()) + "- " + new Date().getFullYear());</script></h6>
                        </div>
                        <div class="mt-4 d-flex justify-content-between">
                            <a href="<?= base_url('/') ?>/pay/13:20" type="button" class="btn btn-studio-r">13:20</a>
                            <a href="<?= base_url('/') ?>/pay/16:20" type="button" class="btn btn-studio-r">16:20</a>
                            <a href="<?= base_url('/') ?>/pay/19:20" type="button" class="btn btn-studio-r">19:20</a>
                        </div>
                        <h5 class="card-title text-center text-uppercase mt-4">Rp.50.000</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>