<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Penjualan Komputer</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url()?>">Tambah data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url()?>barang">Lihat Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container col-8 mt-5">
        <?php if ( empty($showAllBarang) ) {?>
        <div class="alert alert-warning" role="alert">
            <strong>Data masih kosong!</strong>
        </div>
        <?php } ?>
        <?php if( $this->session->flashdata('message') ) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil</strong> <?= $this->session->flashdata('message'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah beli</th>
                    <th scope="col">Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if ( !empty($showAllBarang) ) {
                    foreach($showAllBarang as $barang) :
                 ?>
                <tr>
                    <td><?= $barang['kodeBarang']?></td>
                    <td><?= $barang['namaBarang']?></td>
                    <td><?= $barang['hargaSatuan']?></td>
                    <td><?= $barang['jumlahBeli']?></td>
                    <td><?= $barang['totalBayar']?></td>
                </tr>
                <?php endforeach;?>
                <?php } else { ?>
                <tr>
                    <td colspan="5" class="text-center py-3">
                        <a class="btn btn-primary" href="<?= base_url()?>Home" role="button">Tambah data</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>