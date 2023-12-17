                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Team</h1>
                        
                        <ol class="breadcrumb mb-0">
                            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Team</li>
                        </ol>
                    </div>

                    <?= $this->session->flashdata('pesan'); ?>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="d-sm-flex align-items-center justify-content-between card-header py-3"><div>
                                <h6 class="m-0 font-weight-bold text-primary">Team Tables</h6>
                            </div>
                            <div>
                                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Export</button>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="<?= base_url('admin/team/excel') ?>">Excel</a></li> -->
                                    <li><a class="dropdown-item" href="<?= base_url('admin/team/pdf') ?>">Pdf</a></li>
                                </ul>
                                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-download fa-sm text-white-50"></i> Add Team</button>
                            </div>
                            <!-- <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-download fa-sm text-white-50"></i> Add Team</button> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="1">No</th>
                                            <th class="text-center" width="350">Name</th>
                                            <th class="text-center" width="350">Position</th>
                                            <th class="text-center" width="100">Picture</th>
                                            <th class="text-center" width="95">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Position</th>
                                            <th class="text-center">Picture</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($team as $team){
                                        ?>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;"><?= $no++ ?></td>
                                            <td class="text-center" style="vertical-align: middle;"><?= $team->nama ?></td>
                                            <td class="text-center" style="vertical-align: middle;"><?= $team->jabatan ?></td>
                                            <td class="text-center" style="vertical-align: middle;"><img src="<?= base_url('assets/admin/img/pages/team/') ?><?= $team->gambar ?>" width="75"></td>
                                            <td class="text-center m-5" style="vertical-align: middle;"><a style="margin-right: 4px;" href="<?= base_url('admin/edit_team/') . $team->id ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary
                                             shadow-sm ml-1"><i class="fas fa-pen fa-sm text-white-50"></i></a><a style="margin-left: 4px;" href="<?= base_url('admin/pages/team/fungsi_hapus/') . $team->id ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger
                                             shadow-sm ml-1"><i class="fas fa-trash fa-sm text-white-50"></i></a></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Team Form</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('admin/pages/team/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Position</label>
                        <input type="text" class="form-control" id="inputAddress" name="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Picture</label>
                        <input type="file" class="form-control" style="padding-bottom: 36px;" id="inputAddress" name="gambar" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>