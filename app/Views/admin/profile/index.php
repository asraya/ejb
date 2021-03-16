
<div class="container-fluid">

<div class="row">

    	<div class="col-lg-12">
    		 <!-- Success Upload -->
	        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>

		
		
		<div class="row">

                        <!-- Area Chart -->
						<div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
							<div class="card border-left-primary shadow h-100 py-2">

                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Profile Picture</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
								<div class="dropdown-list-image mr-3">

		<img class="rounded-circle" target="_blank" src="<?= base_url(); ?>/assets/images/<?= user()->file; ?>">
		</div>
								</div>
                            </div>
                        </div>
                        </div>

                        <!-- Pie Chart -->
                       

							<div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
							<div class="card border-left-primary shadow h-100 py-2">

                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Account Details #<?= user()->username; ?></h6>
									<div class="card border-left-primary shadow h-100 py-2">
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

								<form action="<?php echo base_url('/store') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

<div class="row">	
	<div class="col-md-6">
		<label>name</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" name="user_id" value="<?= user()->name; ?>" readonly>
		  </div>	
	</div>
	<div class="col-md-6">
		<label>Pangkat</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" name="user_id" value=<?php echo $getprof['pangkat']; ?> readonly>
		  </div>	
	</div>
	<div class="col-md-6">
		<label>Jenis kelamin</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" name="user_id" value="<?= user()->jenis_kelamin; ?>" readonly>
		  </div>	
	</div>
	<div class="col-md-6">
		<label>Nrp</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" name="user_id" value="<?= user()->nrp; ?>" readonly>
		  </div>	
	</div>
	<div class="col-md-6">
		<label>Tempat lahir</label>
		<div class="col-sm-9">
		<input type="text" class="form-control" name="user_id" value="<?= user()->tempat_lahir; ?>">
		  </div>	
	</div>
	<div class="col-md-6">
		<label>Tanggal lahir</label>
		<div class="col-sm-9">
		<input type="date" class="form-control" name="user_id" value="<?= user()->tanggal_lahir; ?>">
		  </div>	
	</div>
		</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			
			<div class="card-body">

	<?php foreach ($getprof as $eren) { ?>
		<div class="row">

			<div class="col-md-6" >
			<div class="row">
				<label class="col-md-12">Kta</label>
				<img style="height: 150px; width: 300px"  src="<?php echo base_url('../assets/images/'.$eren['upload_kta']) ?>" class="img-fluid img-thumbnail" >
			</div>
			</div>
			<div class="col-md-6" >
			<div class="row">
			<label class="col-md-12">Ktp</label>
				<img style="height: 150px; width: 300px"  src="<?php echo base_url('assets/images/'.$eren['upload_ktp']) ?>" class="img-fluid img-thumbnail"  >
			</div>
			</div>
			<div class="col-md-6">
			<div class="row">
			<label class="col-md-12">Sim</label>
				<img style="height: 150px; width: 300px" src="<?php echo base_url('assets/images/'.$eren['upload_sim']) ?>" class="img-fluid img-thumbnail" >
			</div>
			</div>
			<div class="col-md-6">
			<div class="row">
			<label class="col-md-12">Foto</label>
				<img style="height: 300px; width: 300px"  src="<?php echo base_url('assets/images/'.$eren['upload_foto']) ?>" class="img-fluid img-thumbnail">
			</div>
		</div>
		
	<?php } ?>
</div>
</div>
</div>
</div>