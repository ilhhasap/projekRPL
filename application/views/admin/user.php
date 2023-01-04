<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-auto mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                </button>
                <div class="d-flex flex-column">
                    <h2 class=""><?= $judul?></h2>
                    <p class="mb-0"><?= $showCountUser?> users</p>
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
                                    <button data-bs-toggle="modal" data-bs-target="#editData<?= $user['idUser']?>"
                                        type="button" class="btn btn-primary me-2">Edit</button>
                                    <a href="<?= base_url()?>admin/deleteUser/<?= $user['idUser']?>" type="button"
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
                <form action="<?= base_url()?>admin/addUser" method="post">
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="e.g Ilham Tristadika" name="namaUser">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="e.g ilhhasap@gmail.com" name="emailUser">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Role</label>
                        <select class="form-select" name="role">
                            <option selected disabled>-- Pilih Role --</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                    </div>
            </div>
            <div class="d-grid p-3">
                <button type="submit" class="btn btn-save btn-transparent mb-2"
                    style="background-color: #6271EB;color: white;">Tambah User</button>
                <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                    style="background-color: #eeeeee;color: grey;">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<?php foreach($showAllUser as $user) : ?>
<div class="modal fade modal-edit" data-bs-backdrop="static" data-bs-keyboard="false" id="editData<?= $user['idUser']?>"
    tabindex="-1">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-body">
                <form action="<?= base_url()?>admin/editUser" method="post">
                    <input type="hidden" name="idUser" value="<?= $user['idUser']?>">
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="e.g Ilham Tristadika" name="namaUser"
                            value="<?= $user['namaUser']?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="e.g ilhhasap@gmail.com" name="emailUser"
                            value="<?= $user['emailUser']?>">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Role</label>
                        <select class="form-select" name="role">
                            <?php if($user['role'] == "admin") { ?>
                            <option value="<?= $user['role']?>">Admin</option>
                            <option value="user">User</option>
                            <?php } else if($user['role'] == "user") { ?>
                            <option value="<?= $user['role']?>">User</option>
                            <option value="admin">Admin</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <input type="hidden" name="currentPassword" value="<?= $user['password']?>">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder="New Password" name="password">
                    </div>
            </div>
            <div class="d-grid p-3">
                <button type="submit" class="btn btn-save btn-transparent mb-2"
                    style="background-color: #6271EB;color: white;">Edit User</button>
                <button type="button" class="btn btn-cancel btn-transparent" data-bs-dismiss="modal"
                    style="background-color: #eeeeee;color: grey;">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>