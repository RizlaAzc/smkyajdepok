<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-lock"></i> -->
                    <img src="<?= base_url('assets/admin/img/smk.png') ?>" style="width: 53px;" alt="Logo">
                </div>
                <div class="sidebar-brand-text mx-3">SMK YAJ <sup>CMS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li <?= $this->uri->segment(2) == 'admin/dashboard' || $this->uri->segment(2) == '' ? 'class="nav-item active"' : '' ?> class="nav-item">
                <a <?= $this->uri->segment(2) == 'admin/dashboard' || $this->uri->segment(2) == '' ? 'class="nav-item active"' : '' ?> class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
           
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Carousel:</h6>
                        <a class="collapse-item" href="<?= base_url('admin/carousel') ?>">Carousel</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">About:</h6>
                        <a class="collapse-item" href="<?= base_url('admin/about') ?>">About</a>
                        <a class="collapse-item" href="<?= base_url('admin/study') ?>">Study</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Team:</h6>
                        <a class="collapse-item" href="<?= base_url('admin/team') ?>">Team</a>
                        <h6 class="collapse-header">Gallery:</h6>
                        <a class="collapse-item" href="<?= base_url('admin/gallery') ?>">Gallery</a>
                        <a class="collapse-item" href="<?= base_url('admin/quotes') ?>">Quotes</a>
                        
                    </div>
                </div>
            </li>

          
           
                
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/ppdb') ?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Form PPDB</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/message') ?>">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Message</span></a>
            </li> -->

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                <!-- Heading -->
            <div class="sidebar-heading">
                Other
            </div>
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/register') ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Register Account</span></a>
            </li>
                
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->