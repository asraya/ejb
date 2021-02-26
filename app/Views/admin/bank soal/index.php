
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bank Soal</h1>
                        <a href="<?php echo base_url('bank_soal/create'); ?>" class="btn btn-success float-right mb-3">Create Soal</a>

                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
             
                       
                       <table id="dataTable" class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Kategori Bagian</th>
                    <th>Tanggal dibuat</th>

                    <!-- <th>file</th> -->
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $no=0; foreach($bank as $data) { $no++ ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['soal']; ?></td>
                        <td><?php echo $data['category_id']; ?></td>
                        <td><?php echo $data['created_on']; ?></td>

                        <!-- <td><a class="nav-link text-primary" target="_blank" href="< base_url(); ?>/assets/images/< $data['file']; ?>">< $data['file']; ?></a></td> -->
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('bank_soal/edit/'.$data['id_soal']); ?>" class="btn btn-primary float-right mb-3"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('bank_soal/delete/'.$data['id_soal']); ?>" class="btn btn-danger float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $data['soal']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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
