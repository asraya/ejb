<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <center>
            <img class="img-profile rounded-circle"  src="img/korlantas.png"  height="120" width="120">
            </center>

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('home') ?>">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>

                <div class="sidebar-brand-text mx-3">Seleksi Trainer isdc<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if ( in_groups(['admin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php endif; ?>


            <?php if ( in_groups(['admin'])) : ?>

                <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Upload Data</span></a>
            </li>
            <?php endif; ?>
            <?php if ( in_groups(['admin', 'peserta'])) : ?>

<li class="nav-item">
<a class="nav-link" href="<?php echo base_url('dokumen') ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Upload Data</span></a>
</li>
<?php endif; ?>
            

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <?php if ( in_groups('admin')) : ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data:</h6>
                        <a class="collapse-item" href="<?php echo base_url('master_data_user') ?>">Master Peserta</a>

                        <a class="collapse-item" href="<?php echo base_url('master_data_penguji') ?>">Master Penguji</a>
                        <a class="collapse-item" href="forgot-password.html">Master Pengawas</a>
                        <?php endif; ?>

                        <?php if ( in_groups('admin')) : ?>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagement"
        aria-expanded="true" aria-controls="collapseManagement">
        <i class="fas fa-fw fa-folder"></i>
        <span>User Management</span>
    </a>
    <div id="collapseManagement" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <a class="collapse-item" href="<?php echo base_url('role') ?>">Role</a>

            <a class="collapse-item" href="<?php echo base_url('permission') ?>">Permission</a>
            <?php endif; ?>
       
<?php if ( in_groups('admin')) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSoal"
        aria-expanded="true" aria-controls="collapseSoal">
        <i class="fas fa-fw fa-folder"></i>
        <span>Soal & Category</span>
    </a>
    <div id="collapseSoal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <a class="collapse-item" href="<?php echo base_url('bank_soal') ?>">Bank Soal Pilihan</a>
            <a class="collapse-item" href="<?php echo base_url('bank_soal_wawancara') ?>">Bank Soal List</a>

            <a class="collapse-item" href="<?php echo base_url('categorytest') ?>">Category Test</a>
            <?php endif; ?>

                        <!--<div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

               Nav Item - Tables -->
<?php if ( in_groups(['admin', 'pengawas'])) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTest"
        aria-expanded="true" aria-controls="collapseTest">
        <i class="fas fa-fw fa-folder"></i>
        <span>Category Test</span>
    </a>
    <div id="collapseTest" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <!-- <a class="collapse-item" href="<php echo base_url('TestWawancara') ?>">Test Praktik MOBIL</a> -->

            <a class="collapse-item" href="<?php echo base_url('testuji') ?>">Test Teori</a>

            <!-- <a class="collapse-item" href="<php echo base_url('testUjiPraktek') ?>">Test Wawancara</a> -->

             <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="<?php echo base_url('testUjiPraktek') ?>">Test Wawancara</a>
                        <a class="collapse-item" href="<?php echo base_url('TestWawancara') ?>">Test Praktik MOBIL</a>
                        <a class="collapse-item" href="<?php echo base_url('#') ?>">Test Praktik MOTOR</a>

                      
                    </div>
                </div>
            </li> 

            <?php endif; ?>
         
            <?php if ( in_groups(['admin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('testuji') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Test Teori</span></a>
            </li>
            <?php endif; ?>

           

            <?php if ( in_groups(['admin', 'penguji', 'pengawas'])) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTest2"
        aria-expanded="true" aria-controls="collapseTest2">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data peserta</span>
    </a>
    <div id="collapseTest2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data:</h6>
            <a class="collapse-item" href="<?php echo base_url('master_data_peserta_motor') ?>">Test Praktik MOTOR</a>
            <a class="collapse-item" href="<?php echo base_url('master_data_peserta_mobil') ?>">Test Praktik MOBIL</a>
            <a class="collapse-item" href="<?php echo base_url('master_data_peserta_wawancara') ?>">Test Wawancara</a>
            <a class="collapse-item" href="<?php echo base_url('master_data_peserta') ?>">DATA PESERTA ALL</a>

            <?php endif; ?>

            <?php if ( in_groups(['admin', 'pengawas'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('master_data_user') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data User</span></a>                    
            </li>
            <?php endif; ?>


           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>