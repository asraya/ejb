
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Test Uji</h1>

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
                    
            	<div class="col-md-6">
		<label>name</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" name="user_id" value="<?= user()->nrp; ?>" readonly>

		  </div>	
	</div>

                    <?php $no=1; foreach($bank as $data) { ?>
	<div class="col-md-4 berita">
    <input type="text" class="form-control" name="ujian_id" value="<?php echo $data['category_id'] ?>" readonly>


		<h4><?php echo $data['id_soal'] ?></a></h4>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="A"> <label for="opsi_a" <?php echo $data['opsi_a']; ?></label></p>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="B"> <label for="opsi_b" <?php echo $data['opsi_b']; ?></label></p>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="C"> <label for="opsi_c" <?php echo $data['opsi_c']; ?></label></p>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="D"> <label for="opsi_d" <?php echo $data['opsi_d']; ?></label></p>

	</div>
	<?php $no++; } ?>
            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Submit</button>

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
