<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?= $judul?></title>



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/index.css">


    <style>
    body {
        overflow-x: hidden;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SupaMall</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto">
                    <a class="nav-link <?= ($active == "home") ? "active" : " "?>" aria-current="page"
                        href="<?= base_url()?>">Home</a>
                    <a class="nav-link <?= ($active == "mall") ? "active" : " "?>" href="<?= base_url()?>mall">Malls</a>
                    <a class="nav-link <?= ($active == "brand") ? "active" : " "?>"
                        href="<?= base_url()?>brand">Brands</a>
                    <a class="nav-link <?= ($active == "wishlist") ? "active" : " "?>"
                        href="<?= base_url()?>wishlist">Wishlist</a>
                </div>
            </div>
            <?php if(!$this->session->userdata('status')) : ?>
            <a href="<?= base_url()?>auth" class="btn btn-success" type="submit">Login</a>
            <?php else : ?>
            <div class="dropdown align-items-center text-center">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    <span class="fw-bold"><?= $this->session->userdata('namaUser')?></span>
                </a>
                <ul class="dropdown-menu text-small mt-2" aria-labelledby="dropdownUser1">
                    <?php if($this->session->userdata('role') == 'admin') : ?>
                    <li><a class="dropdown-item" href="<?= base_url()?>admin">Admin Dashboard</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <?php endif; ?>
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li> -->
                    <li><a class="dropdown-item" href="<?= base_url()?>auth/logout">Sign out</a></li>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </nav>