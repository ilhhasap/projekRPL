<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-auto mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <div class="d-flex flex-column">
                    <h2 class="">Master User</h2>
                    <p class="mb-0">16 users</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-primary fw-bold">Tambah Data</button>
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
                                <th scope="col" class="py-4">Nama User</th>
                                <th scope="col" class="py-4">Email User</th>
                                <th scope="col" class="py-4">Role</th>
                                <th scope="col" class="py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($showAllUser as $user) : ?>
                            <tr>
                                <th scope="row" class="py-3 text-center"><?= $user['idUser']?></th>
                                <td class="py-3"><?= $user['namaUser']?></td>
                                <td class="py-3"><?= $user['emailUser']?></td>
                                <td class="py-3"><span
                                        class="badge rounded-pill bg-<?= ($user['role'] == "admin") ? "dark" : "secondary";?>"><?= $user['role']?></span>
                                </td>
                                <td class="py-3">
                                    <a href="<?= base_url()?>Admin/editUser/<?= $user['idUser'];?>" type="button"
                                        class="btn btn-primary me-2">Edit</a>
                                    <button type="button" class="btn btn-outline-danger hapus">Hapus</button>
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




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="namaUser" class="form-label">Nama User</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="emailUser" class="form-label">Email User</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-success" type="button">Simpan</button>
                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
            </form>
        </div>
    </div>
</div>