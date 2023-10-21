                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Study</h1>
                        
                        <ol class="breadcrumb mb-0">
                            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Study</li>
                        </ol>
                    </div>

                    <?= $this->session->flashdata('pesan'); ?>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="d-sm-flex align-items-center justify-content-between card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Study Tables</h6>
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-download fa-sm text-white-50"></i> Add Study</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="1">No</th>
                                            <th class="text-center" width="800">Study</th>
                                            <th class="text-center" width="74">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Study</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($study as $study){
                                        ?>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;"><?= $no++ ?></td>
                                            <td class="text-center" style="vertical-align: middle;"><?= $study->jurusan ?></td>
                                            <td class="text-center m-5" style="vertical-align: middle;"><a href="<?= base_url('admin/pages/about/study/fungsi_hapus/') . $study->id ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Study Form</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('admin/pages/about/study/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Study</label>
                        <input type="text" class="form-control" id="inputAddress" name="jurusan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>