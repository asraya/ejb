
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Test Uji</h1>	<div id="waktu"></div>


<h3 style="color:#FF0000" align="center">
 Test sesi uji akan berakhir : <span id='timer'></span>
 </h3>
                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <form action="<?php echo base_url('testuji/insert') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    
            	<div class="col-md-6">
		
		<input type="hidden" class="form-control" name="user_id" value="<?= user()->nrp; ?>" readonly>

	</div>
    

                    <?php $no=1; foreach($bank as $data) { ?>
	<div class="col-md-10 berita">
    <input type="hidden" class="form-control" name="ujian_id" value="<?php echo $data['category_id'] ?>" readonly>

    <br>
    
    <!-- <td class="text-center"><img src="<php echo base_url('assets/images/'.$data['file']) ?>" width="120"></td> -->

		<h4><p><?php echo $no; ?>)<?php echo  $data['soal'] ?></a></h4>
        
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="A"> <label for="opsi_a" <?php echo $data['opsi_a']; ?></label></p>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="B"> <label for="opsi_b" <?php echo $data['opsi_b']; ?></label></p>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="C"> <label for="opsi_c" <?php echo $data['opsi_c']; ?></label></p>
		<p><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="D"> <label for="opsi_d" <?php echo $data['opsi_d']; ?></label></p>
		<p style="display: none;"><input type="radio" checked id="<?php echo $data['id_soal']; ?>" name="list_jawaban[<?php echo $data['id_soal'];?>]" value="''"> <label for="opsi_e"></label></p>
		<input type="hidden" id="<?php echo $data['bobot']; ?>" name="nilai_bobot[<?php echo $data['bobot'];?>]" value="1"> <label for="bobot" <?php echo $data['bobot']; ?></label>
		<input type="hidden" id="<?php echo $data['jawaban']; ?>" name="jawaban[<?php echo $data['bobot'];?>]" value="<?php echo $data['jawaban']; ?>"> <label for="jawaban" <?php echo $data['jawaban']; ?></label>

	</div>
	<?php $no++; } ?>

            <div class="dropdown-divider"></div>
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#submitTestModal">
                                    Submit Jawaban
                                </a>
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
           