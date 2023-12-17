    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Message</h1>
            <ol class="breadcrumb mb-0">
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">User</a></li> -->
                <?php
                if($jumlah_pesan > 0){
                ?>
                <li class="breadcrumb-item active" aria-current="page">Message</li>
                <?php
                } else {
                    ?>
                    <li class="breadcrumb-item active" aria-current="page">No messages yet</li>
                <?php
                }
                ?>
            </ol>
        </div>

        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <?php
            foreach($pesan as $pesan){
            ?>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                        <?= substr($pesan->nama, 0, 33) ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= substr($pesan->subjek, 0, 27) ?></h5>
                            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            <a href="<?= base_url('admin/message/') . $pesan->id ?>" class="btn btn-primary">See Message</a>
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