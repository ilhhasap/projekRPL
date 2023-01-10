<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-auto mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <div class="d-flex flex-column">
                    <h2 class=""><?= $judul?></h2>
                    <!-- <p class="mb-0"><?= $showCountBrand?> brands</p> -->
                </div>
            </div>
        </div>

        <!-- <div class="d-flex justify-content-between">
            <button data-bs-toggle="modal" data-bs-target="#lihatBrand" type="button"
                class="btn btn-primary fw-bold">Tambah Data</button>
        </div> -->
    </div>

    <div class="content">

        <div class="row mt-3">
            <div class="col-12 col-lg-12">

                <div class="document-card">
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
                                    <p class="text-secondary text-overflow"><img class="me-1" width="24"
                                            src="<?= base_url()?>/assets/img/global/ic_pin.svg"><?= $mall['alamatMall']?>
                                    </p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    <div class="d-flex">
                                        <button data-bs-toggle="modal" data-bs-target="#lihatBrand<?= $mall['idMall']?>"
                                            type="button" class="btn btn-outline-dark me-2">Lihat Brand</button>
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#tambahBrand<?= $mall['idMall']?>" type="button"
                                            class="btn btn-dark"><img
                                                src="http://localhost:8080/dailyPlan//assets/img/global/ic_plus.svg">
                                            Brand</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>


<!-- Modal Tambah -->
<?php foreach($showAllMall as $brand) : ?>
<div class="modal fade modal-add" data-bs-keyboard="false" id="tambahBrand<?= $brand['idMall']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-body">
                <form action="<?= base_url()?>admin/addBrandInMall" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="idMall" value="<?= $brand['idMall']?>">
                        <label class="form-label fw-bold">Tambah Brand</label>
                        <select class="form-select" name="idBrand">
                            <?php foreach($showAllBrand as $brand) : ?>
                            <option value="<?= $brand['idBrand']?>"><?= $brand['namaBrand']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Floor</label>
                        <input type="text" class="form-control" placeholder="e.g Lantai 3" name="floor">
                        <div id="emailHelp" class="form-text">Tulis angka saja!</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Jam Buka</label>
                            <input type="time" class="form-control" name="jamBukaBrand">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jam Tutup</label>
                            <input type="time" class="form-control" name="jamTutupBrand">
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-save btn-transparent mb-2"
                            style="background-color: #6271EB;color: white;">Tambah Brand</button>
                        <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                            style="background-color: #eeeeee;color: grey;">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Modal Edit -->
<?php foreach($showAllBrandInMall as $brand) : ?>
<div class="modal fade modal-edit" data-bs-keyboard="false" id="lihatBrand<?= $brand['idMall']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-body px-5 pt-5 pb-4">
                <h3 class=" mb-4">List Brands</h3>
                <!-- <?php foreach($showAllBrandInMall as $brand) : ?> -->
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="<?= base_url()?>upload/brand/<?= $brand['logoBrand']?>"
                            class="img-fluid rounded-start" alt="..." width="48">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body p-0">
                            <h5 class="card-title"><?= $brand['namaBrand']?></h5>
                            <p class="card-text">Lantai <?= $brand['floor']?></p>
                            <!-- <p><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
                <hr>
                <!-- <?php endforeach; ?> -->
                <div class="row mt-4">
                    <button data-bs-toggle="modal" data-bs-target="#tambahBrand<?= $brand['idMall']?>" type="button"
                        class="btn btn-dark me-2"><img
                            src="http://localhost:8080/dailyPlan//assets/img/global/ic_plus.svg"> Tambah Brand</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>