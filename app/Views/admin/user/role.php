
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Master Role</h1>
                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       Master Role</div>
                       <div>
                       <a href="<?php echo base_url('maintenance'); ?>" class="btn btn-success float-right mb-3">+</a>

                       </div>
                       
                       <table id="dataTable" class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Group</th>
                    <th>User id</th>
                  
                    <!-- <th>file</th> -->
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $no=0; foreach($list as $data) { $no++ ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['group_id']; ?></td>
                        <td><?php echo $data['user_id']; ?></td>
                      
                        <!-- <td><a class="nav-link text-primary" target="_blank" href="< base_url(); ?>/assets/images/< $data['file']; ?>">< $data['file']; ?></a></td> -->
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('maintenances/edit/'.$data['id']); ?>" class="btn btn-primary float-right mb-3"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('maintenances/delete/'.$data['id']); ?>" class="btn btn-danger float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin menghapus guide <?php echo $data['id']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                                <a href="<?php echo base_url('maintenances/create_active/'.$data['id']); ?>" class="btn btn-primary float-right mb-3"><i class="fas fa-edit">active</i></a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->

      </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                            </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Main Content -->
