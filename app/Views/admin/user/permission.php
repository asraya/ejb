
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Permission Management</h1>
                        <a href="<?php echo base_url('permission/createpermission'); ?>" class="btn btn-success float-right mb-3">+</a>
                      
                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                permission management</div>                       
                       <div>
                       </div>
					   <select class="form-control input-sm" id="user_id">
                       <option value="">[ Search by id ]</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       </select>
					   <hr>
					   <input type="hidden" class="form-control input-sm" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

					   <table id="permission_table" class="table table-bordered">

			<thead>
				<tr>
					<th>No</th>
					<th>Permission id</th>
					<th>user id</th>
                    <th>Actions</th>

				</tr>
			</thead>
			<tbody>
				
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

          