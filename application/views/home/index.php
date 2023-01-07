    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Lorem ipsum</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Cari Mall</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($showAllMall as $mall) :?>
                <div class="col">
                    <div class="card">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="200"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">Image cap</text>
                        </svg>

                        <div class="card-body">
                            <h5 class="card-title"><?= $mall['namaMall']?></h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>