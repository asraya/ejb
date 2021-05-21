
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Role Management</h1>
 </div>

<div class="row">

    	<div class="col-lg-12">
    		 <!-- Success Upload -->
	        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>
	        
			<form action="<?php echo base_url('role/store') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

    		<div class="row">
			<?= csrf_field(); ?>


    			<div class="col-md-4">
    				<label>Group id</label>
    				<div class="form-group">
                   		 <input type="text" name="group_id" class="form-control"> 
                	</div>
    			</div>
						
				<div class="col-md-4">
    				<label>user id</label>
    				<div class="form-group">
                   		 <input type="text" name="user_id" class="form-control"> 
                	</div>
    			</div>
                <div class="col-md-4">
    				<label>type</label>
    				<div class="form-group">
                   		 <input type="text" name="type" class="form-control"> 
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
