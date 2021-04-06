

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                   
<!-- Earnings (Monthly) Card Example -->

<!-- <div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       Create Guidelines</div>
                       <div> -->
<div class="row">

    	<div class="col-lg-12">
    		 <!-- Success Upload -->
	        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>

		
		
		<div class="row">
              

							<div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
							<div class="card border-left-primary shadow h-100 py-2">

                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Create Assign Test</h6>
									<div class="card border-left-primary shadow h-100 py-2">
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

								<form action="<?php echo base_url('ujian/store') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

<div class="row">
<div class="col-sm-12">

<label for="soal" class="control-label">Polda Test</label>
<div class="form-group">

                                        <select class="form-control" name="id_polda_test" id="id_polda_test" required>
                                            <option  value="">No Selected</option>
                                            <?php foreach($muji as $row):?>
                                            <option  value="<?php echo $row['id'] ?>"><?php echo $row['asal_polda'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>    
                                    </div> 
                            <div class="form-group col-sm-12">
                            <label for="bobot" class="control-label">nama ujian</label>
                            <input required="required" type="text" name="nama_ujian" placeholder="nama ujian" id="nama_ujian" class="form-control">
                        </div>
						
                        <div class="form-group pull-right">
                            <a href="<?=base_url('dokumen')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
            </div> 
            </div> 
            <div class="row">
              

              <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
              <div class="card border-left-primary shadow h-100 py-2">

                  <!-- Card Header - Dropdown -->
                  <div
                      class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Create Assign Test</h6>
                      <div class="card border-left-primary shadow h-100 py-2">
                         
                      </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">

            <table id="dataTable" class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Polda test</th>
                    <th>Nama ujian</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    <?php $no=0; foreach($list as $data) { $no++ ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['asal_polda']; ?></td>
                        <td><?php echo $data['nama_ujian']; ?></td>
                        <!-- <td><php echo $data['created_at']; ?></td> -->
                        <!-- <td><php echo $data['updated_at']; ?></td> -->
                        <!-- <td><a class="nav-link text-primary" target="_blank" href="< base_url(); ?>/assets/images/< $data['file']; ?>">< $data['file']; ?></a></td> -->
                       
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('ujian/delete/'.$data['id_m_ujian']); ?>" class="btn btn-primary float-right mb-3"><i class="fas fa-trash"></i></a>
                              
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

		</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
