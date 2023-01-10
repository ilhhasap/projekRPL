<div class="container pt-5">
    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url()?>">
                    < Back</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">/ <?= $showMallById['namaMall']?></li>
        </ol>
    </nav>
    <div class="row mb-2 justify-content-center">
        <div class="col-9">
            <div class="row rounded overflow-hidden position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img style="border-radius: 17px;" class="document-icon"
                        src="<?= base_url()?>upload/mall/<?= $showMallById['thumbnail']?>" alt="" width="480">

                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2"> <span class="badge rounded-pill bg-dark py-2 px-3"
                            style="font-size: 14px">Open
                            <?= $showMallById['jamBukaMall']?></span>
                    </strong>
                    <h3 class="mb-0 mt-3 fw-bold" style="font-size: 48px;"><?= $showMallById['namaMall']?></h3>
                    <div class="mb-1 text-muted"></div>
                    <p class="card-text text-muted mb-auto" style="font-size: 20px;"><img class="me-1" width="28"
                            src="<?= base_url()?>/assets/img/global/ic_pin.svg"><?= $showMallById['alamatMall']?></p>
                    <button type="button" class="btn btn-primary ">Lihat Maps</button>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-between">
        <h2>List Brand</h2>
        <?php foreach($showBrandInMall as $mall) : ?>
        <div class="card mb-3 px-4 py-3" style="max-width: 420px;border-radius: 17px">
            <div class="row g-0 align-items-center">
                <div class="col-md">
                    <img src="<?= base_url()?>upload/brand/<?= $mall['logoBrand']?>" class="img-fluid rounded-start"
                        alt="..." width="64">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $mall['namaBrand']?></h5>
                        <p class="card-text"><small class="text-muted" style="font-size: 20px;"><img class="" width="28"
                                    src="<?= base_url()?>/assets/img/global/ic_pin.svg"> Lantai
                                <?= $mall['floor']?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>