
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Test wawancara</h1>

                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <form action="<?php echo base_url('TestUji/insert') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    
            <table id="" class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Kurang</th>
                    <th>Cukup</th>
                    <th>Baik</th>

                    <!-- <th>file</th> -->
                </thead>
                <tbody>

                <?php $no=1; foreach($bank as $data) { $no++ ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['soal']; ?></td>
                                        <td>  <input type="checkbox" id="1" name="check_list[]" value="<?php echo $data['opsi_a']; ?>">
                                        <label for="pria"></label></td>
                                        <td>  <input type="checkbox" id="2" name="check_list[]" value="<?php echo $data['opsi_b']; ?>">
                                        <label for="pria"></label></td>
                                        <td>  <input type="checkbox" id="3" name="check_list[]" value="<?php echo $data['opsi_c']; ?>">
                                        <label for="pria"></label></td>
                        

                      
                    </tr>
                    <?php } ?>


</table>
                    <!-- <php $no=1; foreach($bank as $data) { $no++ ?>
                    <tr>
                        <td><php echo $no; ?></td>
                        <td><php echo $data['soal']; ?></td>
                                        <td>  <input type="checkbox" id="1" name="check_list[]" value="<php echo $data['opsi_a']; ?>">
                                        <label for="pria"></label></td>
                                        <td>  <input type="checkbox" id="2" name="check_list[]" value="<php echo $data['opsi_b']; ?>">
                                        <label for="pria"></label></td>
                                        <td>  <input type="checkbox" id="3" name="check_list[]" value="<php echo $data['opsi_c']; ?>">
                                        <label for="pria"></label></td>
                        

                      
                    </tr>
                    <php } ?> -->
                </tbody>

            </table>
            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Save</button>

        </div>
        <!-- /.container-fluid -->

      </div>
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
