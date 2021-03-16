

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
                                <form action="<?php echo base_url('bank_soal/update/'.$bsoal['id_soal']); ?>" method="post">


                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group">

                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option  placeholder="Masukkan Konten"><?php echo $bsoal['category_id'] ?></option>
                                            <?php foreach($catest as $row):?>
                                            <option  value="<?php echo $row['id_category_test'] ?>"><?php echo $row['nama_category_test'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>    
                                    </div> 

	<div class="col-sm-12">
                            <label for="soal" class="control-label">Soal</label>
                          
                            <div class="form-group">
                            <textarea class="form-contro froala-editorl" name="soal" id="editor" placeholder="Masukkan Konten"><?php echo $bsoal['soal'] ?></textarea>

                            </div>
                        </div>                      

                        <div class="col-sm-12">
						<label for="file">Jawaban A</label>
					
                            <div class="form-group">
                                <textarea class="form-contro froala-editorl" name="opsi_a" id="editor2" placeholder="Masukkan Konten"><?php echo $bsoal['opsi_a'] ?></textarea>

                            </div>
                        </div>

						<div class="col-sm-12">
						<label for="file">Jawaban B</label>
  						
                            <div class="form-group">
                            <textarea class="form-contro froala-editorl" name="opsi_b" id="editor3" placeholder="Masukkan Konten"><?php echo $bsoal['opsi_b'] ?></textarea>
                            </div>
                        </div>

						<div class="col-sm-12">
						<label for="file">Jawaban C</label>
  					
                            <div class="form-group">
                            <textarea class="form-contro froala-editorl" name="opsi_c" id="editor4" placeholder="Masukkan Konten"><?php echo $bsoal['opsi_c'] ?></textarea>
                            </div>
                        </div>

						<div class="col-sm-12">
						<label for="file">Jawaban D</label>
 						
                            <div class="form-group">
                            <textarea class="form-contro froala-editorl" name="opsi_d" id="editor5" placeholder="Masukkan Konten"><?php echo $bsoal['opsi_d'] ?></textarea>
                            </div>
                        </div>

						
                        <div class="form-group col-sm-12">
                            <label for="jawaban" class="control-label">Kunci Jawaban</label>
                            <select required="required" name="jawaban" id="jawaban" class="form-control select2" style="width:100%!important">
                                <option  placeholder="Masukkan Konten"><?php echo $bsoal['jawaban'] ?></option>
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
