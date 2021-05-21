
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Car Management</h1>
 </div>

<div class="row">

    	<div class="col-lg-12">
    		 <!-- Success Upload -->
	        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>
	        
			<form action="<?php echo base_url('carmanagement/store') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

    		<div class="row">

    			<div class="col-md-4">
    				<label>Merk Mobil</label>
    				<div class="form-group">
                   		 <input type="text" name="merk_mobil" class="form-control"> 
                	</div>
    			</div>
				<div class="col-md-4">
    				<label>Type</label>
    				<div class="form-group">
							<select class="form-control input-sm" name="type" id="Type">
                       <option value="">Choice Type</option>
                       <option value="Manual">Manual</option>
                       <option value="Matic">Matic</option>
                       </select>
                	</div>	
    			</div>				
				
    			<div class="col-md-4">
    				<label>File</label>
    				<div class="form-group">
                   		 <input type="file" name="file_upload" class="form-control"> 
                	</div>	
    			</div>
						
			<div class="col-md-4">
    				<div class="form-group">
					<input type="text" class="form-control" name="created_by" value="<?= user()->name; ?>" style="display: none;" readonly>
					  </div>
    			</div>
				</div>
    			<div class="col-md-4">
    				<div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-danger" onclick="history.back();">Back</button>

					</div>
					
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Main Content -->
