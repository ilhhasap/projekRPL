<div class="album py-5 bg-light">
    <div class="container">
        <h2 class="mb-3">Your wishlist</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php if(empty($showWishlistById)) { ?>
            <div class="card" aria-hidden="true">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                        <span class="placeholder col-7"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-4"></span>
                        <span class="placeholder col-6"></span>
                        <span class="placeholder col-8"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                </div>
            </div>
            <?php }?>
            <?php foreach($showWishlistById as $mall) :?>
            <div class="col">
                <div class="card" style="border-radius: 17px;">
                    <div class="card-img-top">
                        <img style="border-radius: 17px 17px 0 0;"
                            src="<?= base_url()?>upload/mall/<?= $mall['thumbnail']?>" class="card-img-top" alt="..."
                            height="200">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $mall['namaMall']?></h5>
                        <p class="text-secondary"><img class="me-1" width="24"
                                src="<?= base_url()?>/assets/img/global/ic_pin.svg"><?= $mall['alamatMall']?>
                        </p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        <div class="d-flex">
                            <a href="<?= base_url()?>mall/hapusWishlist/<?= $mall['idWishlist']?>" type="button"
                                class="btn btn-outline-danger me-2 w-100">Hapus wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>