    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Lorem ipsum</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Cari Mall</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($showAllMall as $mall) :?>
                <div class="col">
                    <div class="card" style="border-radius: 17px;">
                        <div class="card-img-top">
                            <img style="border-radius: 17px 17px 0 0;"
                                src="<?= base_url()?>upload/mall/<?= $mall['thumbnail']?>" class="card-img-top"
                                alt="..." height="200">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $mall['namaMall']?></h5>
                            <p class="text-secondary"><img class="me-1" width="24"
                                    src="<?= base_url()?>/assets/img/global/ic_pin.svg"><?= $mall['alamatMall']?>
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            <div class="d-flex">
                                <a href="<?= base_url()?>mall/detail/<?= $mall['idMall']?>" type="button"
                                    class="btn btn-dark me-2">Lihat Brand</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>