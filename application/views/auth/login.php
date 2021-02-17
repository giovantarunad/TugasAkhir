<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none-left bg-login-image d-lg-block "></div>
                        <div class="col-lg-6">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-5">Selamat Datang Bidan Sunarsih</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>

                                <form method="post" class="bidan" action="<?= base_url('auth/login'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-bidan" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-bidan" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-type="image" data-sitekey="6Lex8TYaAAAAAOBWxb79-ZZi4zz_HLhOnnWgdqIo"></div>
                                        <?= form_error('g-recaptcha-response', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-outline-primary btn-bidan btn-block" value="Masuk">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
