<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-auto mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <div class="d-flex flex-column">
                    <h2 class=""><?= $judul?></h2>
                    <p class="mb-0"><?= $showCountBrand?> brands</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <button data-bs-toggle="modal" data-bs-target="#tambahData" type="button"
                class="btn btn-primary fw-bold">Tambah Data</button>
        </div>
    </div>

    <div class="content">

        <div class="row mt-3">
            <div class="col-12 col-lg-12">

                <div class="document-card">
                    <table class="table table-light table-striped table-borderless align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="py-4 text-center">No</th>
                                <th scope="col" class="py-4">Logo</th>
                                <th scope="col" class="py-4">Nama Brand</th>
                                <th scope="col" class="py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($showAllBrand as $brand) : ?>
                            <tr>
                                <th scope="row" class="py-3 text-center"><?= $i++;?></th>
                                <td class="py-3"><img class="document-icon"
                                        src="<?= base_url()?>upload/brand/<?= $brand['logoBrand']?>" alt="" width="64">
                                </td>
                                <td class="py-3"><?= $brand['namaBrand']?></td>
                                <td class="py-3">
                                    <button data-bs-toggle="modal" data-bs-target="#editData<?= $brand['idBrand']?>"
                                        type="button" class="btn btn-primary me-2">Edit</button>
                                    <a href="<?= base_url()?>admin/deleteBrand/<?= $brand['idBrand']?>" type="button"
                                        class="btn btn-outline-danger hapus">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
</div>


<!-- Modal Tambah -->
<div class="modal fade modal-add" data-bs-backdrop="static" data-bs-keyboard="false" id="tambahData" tabindex="-1">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-body">
                <form action="<?= base_url()?>admin/addBrand" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="active" value="1">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Logo</label>
                        <input class="form-control" type="file" name="logoBrand">
                    </div>
                    <div class="col-12">
                        <label for="exampleInputPassword1" class="form-label">Nama Brand</label>
                        <input type="text" class="form-control" placeholder="e.g Starbucks Coffee" name="namaBrand">
                    </div>
            </div>
            <div class="d-grid p-3">
                <button type="submit" class="btn btn-save btn-transparent mb-2"
                    style="background-color: #6271EB;color: white;">Tambah Brand</button>
                <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                    style="background-color: #eeeeee;color: grey;">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<?php foreach($showAllBrand as $brand) : ?>
<div class="modal fade modal-edit" data-bs-backdrop="static" data-bs-keyboard="false"
    id="editData<?= $brand['idBrand']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-body">
                <form action="<?= base_url()?>admin/editBrand" method="post">
                    <input type="hidden" name="currentLogo" value="<?= $brand['logoBrand']?>">
                    <input type="hidden" name="idBrand" value="<?= $brand['idBrand']?>">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Thumbnail</label>
                        <input class="form-control" type="file" name="logoBrand">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Brand</label>
                        <input type="text" class="form-control" placeholder="e.g Solo Paragon" name="namaBrand"
                            value="<?= $brand['namaBrand']?>">
                    </div>
            </div>
            <div class="d-grid p-3">
                <button type="submit" class="btn btn-save btn-transparent mb-2"
                    style="background-color: #6271EB;color: white;">Edit Brand</button>
                <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                    style="background-color: #eeeeee;color: grey;">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>