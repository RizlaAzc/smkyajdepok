                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Form PPDB <?= $ppdb->namalengkap ?></h1>
                        <ol class="breadcrumb mb-0">
                            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/ppdb') ?>">Form PPDB</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form PPDB <?= $ppdb->namalengkap ?></li>
                        </ol>   
                    </div>


                    <section style="background-color: #eee;">
                        <div class="container py-4">
                            <!-- <div class="row">
                                <div class="col">
                                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                    </nav>
                                </div>
                            </div> -->

                            <div class="row">
                            <!-- <div class="col-lg-4"> -->
                                <!-- <div class="card mb-4"> -->
                                <!-- <div class="card-body text-center">
                                    <img src="<?= base_url('assets/user/img/ppdb/') . $ppdb->photo ?>" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 166px;">
                                    <h5 class="my-3"><?= $ppdb->namalengkap ?></h5>
                                    <hr>
                                    <p class="text-muted mb-0">as</p>
                                    <p class="text-muted">Web Admin</p> -->
                                    <!-- <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="btn btn-primary">Follow</button>
                                    <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                                    </div> -->
                                <!-- </div> -->
                                <!-- </div> -->
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
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Lengkap</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->namalengkap ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">NISN</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->nisn ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tempat Lahir</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->tempatlahir ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tanggal Lahir</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->tanggallahir ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Jenis Kelamin</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->jeniskelamin ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Agama</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->agama ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Alamat</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->alamat ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status Anak</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->statusanak ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Anak Ke</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->anakke ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->email ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telepon</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->telephone ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Asal Sekolah</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->asalsekolah ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Pilihan I</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->pilihan1 ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Pilihan II</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->pilihan2 ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Ayah</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->namaayah ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Pekerjaan Ayah</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->pekerjaanayah ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Ibu</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->namaibu ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Pekerjaan Ibu</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->pekerjaanibu ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telepon Orang Tua</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->telephoneortu ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Alamat Orang Tua</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->alamatortu ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Wali</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->namawali ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Pekerjaan Wali</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->pekerjaanwali ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telepon Wali</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->telephonewali ?></p>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Alamat Wali</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $ppdb->alamatwali ?></p>
                                    </div>
                                    </div>
                                    <!-- <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                    </div> -->
                                    <!-- <hr>
                                    <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Date Created</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $profil['date_created'] ?></p>
                                    </div>
                                </div> -->
                                </div>
                            </div>
                            <a href="<?= base_url('admin/ppdb/fungsi_hapus/') . $ppdb->nisn ?>" class="btn btn-danger mr-3">Delete</a>
                            <a href="<?= base_url('admin/ppdb') ?>" class="btn btn-primary shadow-sm">Confirm</a>
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
                        </div>
                    </section>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->