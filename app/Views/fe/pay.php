<?= $this->extend('layout/fe/base') ?>

<?= $this->section('content') ?>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h1 class="text-capitalize text-center mb-5">Order Confimation</h1>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-4 mb-5">
                            <div class="card border-0 h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="<?= base_url('/') ?>/assets/img/the-godfather.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col-lg-8 mb-5">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h2 class="card-title text-uppercase">the godfather</h2>
                                    <p class="card-text text-capitalize mt-5">
                                    <div class="row">
                                        <div class="col-3">Date</div>
                                        <div class="col-9">:
                                            <script>document.write(new Date().getDate() + "- " + (1 + new Date().getMonth()) + "- " + new Date().getFullYear());</script>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Time</div>
                                        <div class="col-9">: 19:20</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Studio</div>
                                        <div class="col-9">: 3</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Seats</div>
                                        <div class="col-9">: G6</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Total Payment</div>
                                        <div class="col-9">: Rp.50.000</div>
                                    </div>
                                    </p>
                                    <a href="<?= base_url('/') ?>" type="submit" class="btn btn-primary btn-lg btn-block text-uppercase mt-5">Pay Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>