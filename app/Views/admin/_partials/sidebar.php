<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <center>
            <img class="img-profile rounded-circle" src="img/korlantas.png"  height="120" width="120">
            </center>

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('home') ?>">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>

                <div class="sidebar-brand-text mx-3"><sup>EJB</sup> Driving Training</div>
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if ( in_groups(['superadmin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php endif; ?>

            <?php if ( in_groups(['superadmin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('carmanagement') ?>">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Car management</span></a>
            </li>
            <?php endif; ?>
            <?php if ( in_groups(['superadmin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('carmanagement') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>instructor management</span></a>
            </li>
            <?php endif; ?>

            <?php if ( in_groups(['superadmin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('carmanagement') ?>">
                <i class="fas fa-fw fa-table"></i>
                    <span>Schedule management</span></a>
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
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php if ( in_groups(['superadmin', 'operator'])) : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master:</h6>
                        <a class="collapse-item" href="<?php echo base_url('master_data_user') ?>">Data user</a>
                        <a class="collapse-item" href="<?php echo base_url('role') ?>">Role</a>
                        <a class="collapse-item" href="<?php echo base_url('permission') ?>">Permission</a>

                    </div>
                </div>
            </li>

            <?php endif; ?>
            <?php if ( in_groups(['superadmin'])) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('cms') ?>">
                <i class="fas fa-fw fa-table"></i>
                    <span>CMS</span></a>
            </li>
            <?php endif; ?>
            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->               

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>SB superadmin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-superadmin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>