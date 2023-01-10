<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-auto mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <div class="d-flex flex-column">
                    <h2 class=""><?= $judul?></h2>
                    <p class="mb-0"><?= $showCountMall?> malls</p>
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
                                <th scope="col" class="py-4">Thumbnail</th>
                                <th scope="col" class="py-4">Nama Mall</th>
                                <th scope="col" class="py-4">Alamat</th>
                                <th scope="col" class="py-4">Active</th>
                                <th scope="col" class="py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($showAllMall as $mall) : ?>
                            <tr>
                                <th scope="row" class="py-3 text-center"><?= $i++;?></th>
                                <td class="py-3"><img class="document-icon"
                                        src="<?= base_url()?>upload/mall/<?= $mall['thumbnail']?>" alt="" width="64">
                                </td>
                                <td class="py-3"><?= $mall['namaMall']?></td>
                                <td class="py-3"><?= $mall['alamatMall']?></td>
                                <td class="py-3"><span
                                        class="badge rounded-pill bg-<?= ($mall['active'] == 1) ? "success" : "danger";?>"><?= ($mall['active'] == 1) ? "Yes" : "No";?></span>
                                </td>
                                <td class="py-3">
                                    <button data-bs-toggle="modal" data-bs-target="#editData<?= $mall['idMall']?>"
                                        type="button" class="btn btn-primary me-2">Edit</button>
                                    <a href="<?= base_url()?>admin/deleteMall/<?= $mall['idMall']?>" type="button"
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
                <form action="<?= base_url()?>admin/addMall" method="post" enctype="multipart/form-data">
                    <!-- <?= form_open_multipart('admin/addMall'); ?> -->
                    <input type="hidden" name="active" value="1">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Thumbnail</label>
                        <input class="form-control" type="file" name="thumbnail">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Mall</label>
                        <input type="text" class="form-control" placeholder="e.g Solo Paragon" name="namaMall"
                            autocomplete="off">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat Mall</label>
                        <input type="text" class="form-control" placeholder="e.g Jl Pegangsaan Timur" name="alamatMall"
                            autocomplete="off">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Link Map</label>
                        <input type="text" class="form-control" name="mapLink" autocomplete="off">
                        <div id="emailHelp" class="form-text">Berbentuk link!</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Jam Buka</label>
                            <input type="time" class="form-control" name="jamBukaMall">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Jam Tutup</label>
                            <input type="time" class="form-control" name="jamTutupMall">
                        </div>
                    </div>

                    <!-- <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Active</label>
                        <select class="form-select" name="active">
                            <option selected disabled>-- Pilih --</option>
                            <option value="0">Tidak</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div> -->
            </div>
            <div class="d-grid p-3">
                <button type="submit" class="btn btn-save btn-transparent mb-2"
                    style="background-color: #6271EB;color: white;">Tambah Mall</button>
                <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                    style="background-color: #eeeeee;color: grey;">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<?php foreach($showAllMall as $mall) : ?>
<div class="modal fade modal-edit" data-bs-backdrop="static" data-bs-keyboard="false" id="editData<?= $mall['idMall']?>"
    tabindex="-1">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-body">
                <form action="<?= base_url()?>admin/editMall" method="post">
                    <input type="hidden" name="idMall" value="<?= $mall['idMall']?>">
                    <input type="hidden" name="currentThumbnail" value="<?= $mall['thumbnail']?>">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Edit Thumbnail</label>
                        <input class="form-control" type="file" name="thumbnail">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Mall</label>
                        <input type="text" class="form-control" placeholder="e.g Solo Paragon" name="namaMall"
                            value="<?= $mall['namaMall']?>" autocomplete="off">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat Mall</label>
                        <input type="text" class="form-control" placeholder="e.g Jl Pegangsaan Timur" name="alamatMall"
                            value="<?= $mall['alamatMall']?>" autocomplete="off">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Link Map</label>
                        <input type="text" class="form-control" name="mapLink" autocomplete="off"
                            value="<?= $mall['mapLink']?>">
                        <div id="emailHelp" class="form-text">Berbentuk link!</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Jam Buka</label>
                            <input type="time" class="form-control" name="jamBukaMall"
                                value="<?= $mall['jamBukaMall']?>">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Jam Tutup</label>
                            <input type="time" class="form-control" name="jamTutupMall"
                                value="<?= $mall['jamTutupMall']?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="exampleInputPassword1" class="form-label">Active</label>
                        <select class="form-select" name="active">
                            <?php if($mall['active'] == 0) { ?>
                            <option value="<?= $mall['active']?>" selected>Tidak Aktif</option>
                            <option value="1"> Aktif</option>
                            <?php } else if($mall['active'] == 1) { ?>
                            <option value="<?= $mall['active']?>">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                            <?php } ?>
                        </select>
                    </div>
            </div>
            <div class="d-grid p-3">
                <button type="submit" class="btn btn-save btn-transparent mb-2"
                    style="background-color: #6271EB;color: white;">Edit Mall</button>
                <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                    style="background-color: #eeeeee;color: grey;">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>