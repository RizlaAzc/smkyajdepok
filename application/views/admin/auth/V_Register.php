<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register - YAJ CMS</h1>
                                <img src="<?= base_url('assets/admin/');?>img/smk.png" alt="YAJ Logo.png" style="width: 155px; margin-bottom: 40px;">
                            </div>
                            <form class="user" method="post" action="<?= base_url('admin/auth/register'); ?>">
                                <!-- <div class="form-group row"> -->
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Your Name">
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <input type="text" name="" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div> -->
                                <!-- </div> -->
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password1" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <!-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> -->
                            <div class="text-center">
                                <a class="small" href="<?= base_url('admin/dashboard') ?>">Back to Dashboard ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>