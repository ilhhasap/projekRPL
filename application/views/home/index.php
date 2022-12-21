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
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url()?>barang">Lihat Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container col-6 mt-5 px-5">
        <form action="<?= base_url()?>Barang/simpanBarang" method="post">
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label class="form-label">Kode: </label>
                    <input type="text" class="form-control" name="kodeBarang" autocomplete="off">
                    <!-- <div class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="col col-md-6 mb-3">
                    <label class="form-label">Barang: </label>
                    <input type="text" class="form-control" name="namaBarang" autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label class="form-label">Harga Satuan: </label>
                    <input type="text" class="form-control" name="hargaSatuan" id="hargaSatuan">
                    <!-- <div class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="col col-md-6 mb-3">
                    <label class="form-label">Jumlah beli: </label>
                    <input type="text" class="form-control" name="jumlahBeli" id="jumlahBeli">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Total Bayar: </label>
                <input type="text" class="form-control" id="totalBayar" readonly disabled>
            </div>
            <div class="d-grid pt-3">
                <button type="submit" class="btn btn-lg btn-primary fw-bold">Simpan</button>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('#jumlahBeli').on('keyup', function() {
        var jumlahBeli = $("#jumlahBeli").val();
        var hargaSatuan = $("#hargaSatuan").val();

        var total = hargaSatuan * jumlahBeli;
        $("#totalBayar").val(total);
    });
});
</script>

</html>