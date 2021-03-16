

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
                                    <h6 class="m-0 font-weight-bold text-primary">Soal</h6>
									<div class="card border-left-primary shadow h-100 py-2">
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

								<form action="<?php echo base_url('bank_soal_wawancara/store') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

<div class="row">
<div class="col-sm-12">

<label for="soal" class="control-label">Category Test</label>
<div class="form-group">

                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option  value="">No Selected</option>
                                            <?php foreach($catest as $row):?>
                                            <option  value="<?php echo $row['id_category_test'] ?>"><?php echo $row['nama_category_test'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>    
                                    </div> 
	<div class="col-sm-12">
                            <label for="soal" class="control-label">Soal</label>
                            <div class="form-group">
                                <!-- <input type="file" id="file" class="form-control" name="file"> -->

                            </div>
                            <div class="form-group">
                                <textarea name="soal" id="editor" class="form-control froala-editor"></textarea>
                            </div>
                        </div>                      

                        <div class="col-sm-12">
						<label for="file">Jawaban A</label>
                        <!-- <input type="file" name="file_a" id="file_a" class="form-control"> -->

                            <div class="form-group">
                                <textarea name="opsi_a" id="editor2" class="form-control froala-editor"></textarea>
                            </div>
                        </div>

						<div class="col-sm-12">
						<label for="file">Jawaban B</label>
                        <!-- <input type="file" name="file_b" class="form-control"> -->

                            <div class="form-group">
                                <textarea name="opsi_b" id="editor3" class="form-control froala-editor"></textarea>
                            </div>
                        </div>

						<div class="col-sm-12">
						<label for="file">Jawaban C</label>
                        <!-- <input type="file" name="file_c" class="form-control"> -->

                            <div class="form-group">
                                <textarea name="opsi_c" id="editor4" class="form-control froala-editor"></textarea>
                            </div>
                        </div>

						<div class="col-sm-12">
						<label for="file">Jawaban D</label>
                        <!-- <input type="file" name="file_d" class="form-control"> -->

                            <div class="form-group">
                                <textarea name="opsi_d" id="editor5" class="form-control froala-editor"></textarea>
                            </div>
                        </div>

						
                        <div class="form-group col-sm-12">
                            <label for="jawaban" class="control-label">Kunci Jawaban</label>
                            <select required="required" name="jawaban" id="jawaban" class="form-control select2" style="width:100%!important">
                                <option value="" disabled selected>Pilih Kunci Jawaban</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>                
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="bobot" class="control-label">Bobot Soal</label>
                            <input required="required" value="1" type="number" name="bobot" placeholder="Bobot Soal" id="bobot" class="form-control">
                        </div>
                        <div class="form-group pull-right">
                            <a href="<?=base_url('soal')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
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
