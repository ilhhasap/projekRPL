<div class="sign-in-area sign-up-area">
    <div class="container-fluid no-gutters">
        <div class="row no-gutters min-height-100vh justify-content-lg-start justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-9 position-relative">
                <div class="sign-in-content justify-content-lg-end">
                    <h2 style="margin-bottom: 40px;">Create an account</h2>
                    <form action="<?= base_url()?>auth/prosesSignUp" method="post">
                        <?php if( $this->session->flashdata('message') ) : ?>
                        <?= $this->session->flashdata('message')?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <input type="hidden" name="role" value="user">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="namaUser" id="name" class="form-control" placeholder="e.g Ilham Tristadika"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="emailUser" id="email" class="form-control"
                        placeholder="e.g ilhhasap@gmail.com" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Buat Password</label>
                    <input type="password" name="password1" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="form-control"
                        placeholder="Confirm Password">
                </div>
                <div class="sign-in-log-btn">
                    <button class="btn focus-reset">Sign Up</button>
                </div>
                <div class="create-new-acc-text text-center">
                    <p>Already have account? <a href="<?= base_url()?>auth">Log in</a></p>
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