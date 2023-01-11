<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-auto ">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <div class="d-flex flex-column">
                    <h2 class=""> <?= $judul?></h2>
                    <p class="mb-0"><?= $showCountBrandInMall?> brand</p>
                </div>
            </div>
        </div>
        <a href="../" type="button" class="btn btn-dark me-3">Kembali</a>

        <!-- <div class="d-flex justify-content-between">
            <button data-bs-toggle="modal" data-bs-target="#lihatBrand" type="button"
                class="btn btn-primary fw-bold">Tambah Data</button>
        </div> -->
    </div>

    <div class="content">

        <div class="row mt-3">
            <div class="col-12 col-lg-12">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($showBrandInMall as $brand) : ?>
                    <div class="card mb-3 px-4 py-3 me-3" style="max-width: 400px;border-radius: 17px">
                        <div class="row g-0 align-items-center">
                            <div class="col-md">
                                <img src="<?= base_url()?>upload/brand/<?= $brand['logoBrand']?>"
                                    class="img-fluid rounded-start" alt="..." width="64">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><?= $brand['namaBrand']?></h5>
                                    <p class="card-text"><small class="text-muted" style="font-size: 16px;"><img
                                                class="" width="24" src="<?= base_url()?>/assets/img/global/ic_pin.svg">
                                            Lantai
                                            <?= $brand['floor']?></small>
                                    </p>
                                </div>
                            </div>
                            <a href="<?= base_url()?>admin/deleteBrandInMall/<?= $brand['idBrandMall']?>" type="button"
                                class="btn btn-outline-danger hapus">Hapus</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>
</div>
</div>