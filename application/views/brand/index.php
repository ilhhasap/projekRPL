<div class="container">
    <div class="row mt-5 justify-content-stretch">
        <h2>List Brand</h2>
        <?php foreach($showAllBrandInMall as $brand) : ?>
        <div class="card mb-3 px-4 py-3 me-3" style="max-width: 420px;border-radius: 17px">
            <div class="row g-0 align-items-center">
                <div class="col-md">
                    <img src="<?= base_url()?>upload/brand/<?= $brand['logoBrand']?>" class="img-fluid rounded-start"
                        alt="..." width="64">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $brand['namaBrand']?></h5>
                        <p class="card-text"><small class="text-muted" style="font-size: 16px;"><img class="" width="24"
                                    src="<?= base_url()?>/assets/img/global/ic_pin.svg"> Lantai
                                <?= $brand['floor']?> <?= $brand['namaMall']?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>