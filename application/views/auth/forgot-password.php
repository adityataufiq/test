<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 p-0">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="p-5">
                            <img src="<?= base_url('assets/img/login/logo-ugm-biru.png'); ?>" width="100px" class="img-fluid mb-4">
                            <h1 class="h3 text-gray-600">SIVENLAB UGM</h1>
                            <hr>
                            <h1 class="h5 text-gray-900 my-1">Sistem Informasi</h1>
                            <h1 class="h5 text-gray-900 my-1">Inventaris Laboratorium</h1>
                            <h1 class="h5 text-gray-900 my-1">Universitas Gadjah Mada</h1>
                        </div>
                    </div>
                    <div class="col-lg-7 bg-gray-300">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                            </div>

                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center">

        <span class="text-gray-100">Copyright &copy; SIVENLAB <?= date('Y'); ?></span>

    </div>


</div>