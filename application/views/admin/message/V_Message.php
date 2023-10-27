                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Message</h1>
                        
                        <!-- <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/profile') ?>">Your Profile</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol> -->
                    </div>

                    <section style="background-color: #eee;">
                        <div class="container py-4">
                            <!-- <div class="row">
                                <div class="col">
                                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                    </nav>
                                </div>
                            </div> -->

                            <?= form_open_multipart('admin/profile/proses_edit'); ?>
                            <div class="row">
                            <!-- <div class="col-lg-4">
                                <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/admin/img/profil/') . $profil['foto']; ?>" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 150px;">
                                    <input class="form-control text-center" type="text" name="nama" value="<?= $profil['nama'] ?>">
                                    <hr>
                                    <p class="text-muted mb-0">as</p>
                                    <p class="text-muted">Web Admin</p> -->
                                    <!-- <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="btn btn-primary">Follow</button>
                                    <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                                    </div> -->
                                <!-- </div>
                                </div> -->
                                <!-- <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                        <p class="mb-0">https://mdbootstrap.com</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                        <p class="mb-0">@mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    </ul>
                                </div>
                                </div> -->
                            <!-- </div> -->
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-2 my-auto">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="nama" value="<?= $pesan_detail->nama ?>"readonly>
                                    </div>
                                    <!-- </div> -->
                                    <hr>
                                    <!-- <div class="row"> -->
                                        <div class="col-sm-1 my-auto">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="email" value="<?= $pesan_detail->email ?>" readonly>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-2 my-auto">
                                        <p class="mb-0">Subject</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="telepon" value="<?= $pesan_detail->subjek ?>"readonly>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-2 my-auto">
                                        <p class="mb-0">Message</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea class="form-control"readonly><?= $pesan_detail->pesan ?></textarea>
                                    </div>
                                    </div>
                                    <!-- <hr>
                                    <div class="row">
                                    <div class="col-sm-2 my-auto">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-20">
                                        <input class="form-control" type="text" name="nama_lengkap" value="">
                                    </div>
                                    </div> -->
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-2 my-auto">
                                        <p class="mb-0">Date</p>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="date_created" value="<?= $pesan_detail->date ?>" readonly>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <a href="<?= base_url('admin/message/fungsi_hapus/') . $pesan_detail->id ?>" class="btn btn-danger mr-3">Delete</a>
                            <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-primary">Confirm</a>
                                <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                        </p>
                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                        <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                        </p>
                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                        <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                        <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div> -->
                            </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </section>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->