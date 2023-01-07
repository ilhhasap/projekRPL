<div class="site-wrapper overflow-hidden position-relative">
    <!-- navbar- -->
    <div class="sign-in-area">
        <div class="container-fluid no-gutters min-height-100vh">
            <div class="row no-gutters  min-height-100vh justify-content-lg-start justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-9 position-relative">
                    <div class="sign-in-content justify-content-lg-end">
                        <h2>Welcome Back</h2>
                        <form action="<?= base_url()?>auth/prosesLogin" method="post">

                            <?php if( $this->session->flashdata('message') ) : ?>
                            <?= $this->session->flashdata('message')?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="emailUser" id="email" class="form-control"
                            placeholder="Enter your email address" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Your password">
                    </div>
                    <div class="sign-in-log-btn">
                        <button class="btn focus-reset">Log In</button>
                    </div>
                    <div class="create-new-acc-text text-center">
                        <p>Don't have account? <a href="<?= base_url()?>auth/register">Create an account</a></p>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 col-sm-9">
                <div class="fixed-right-bg">
                    <div class="full-bg-position min-height-100vh"
                        style="background: url(<?= base_url()?>assets/img/bg_login.jpg);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>