    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form PPDB</h1>
            <ol class="breadcrumb mb-0">
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">User</a></li> -->
                <?php
                if($jumlah_ppdb > 0){
                    ?>
                    <li class="breadcrumb-item active" aria-current="page">Form PPDB</li>
                <?php
                } else {
                    ?>
                    <li class="breadcrumb-item active" aria-current="page">No Form yet</li>
                <?php
                }
                ?>
            </ol>
        </div>

        <?= $this->session->flashdata('pesan'); ?>

        <div class="row">
            <?php
            foreach($ppdb as $ppdb){
                ?>
                <div class="col-md-3">
                <div class="card">
                    <img src="<?= base_url('assets/user/img/ppdb/') . $ppdb->photo ?>" class="card-img-top" style="height: 250px;" alt="photo">
                    <div class="card-body text-center">
                    <h5 class="card-title"><a class="text-dark" href="<?= base_url('admin/ppdb/') . $ppdb->nisn ?>"><?= $ppdb->namalengkap ?></a></h5>
                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                    </div>
                    <div class="card-footer text-center">
                    <small class="text-body-secondary"><?= $ppdb->jeniskelamin ?></small>
                    </div>
                </div>
                <!-- <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div> -->
                </div>
            <?php
            }
            ?>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->