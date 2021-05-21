<div id="logoutModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda akan keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?php echo base_url('/logout') ?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <div id="submitTestModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi !!</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda hanya dapat kirim jawaban 1 kali.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" id="submit" class="btn btn-secondary"><i class="fa fa-save"></i> Submit</button>

                </div>
            </div>
        </div>
    </div>

      <!-- End of Main Content -->
      <div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">Create New Data</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form_create" accept-charset="utf-8" enctype="multipart/form-data">
                        
                            <input type="hidden" class="form-control" id="id" name="id">
                            <div class="row">
                            <?= csrf_field(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="merk_mobil">Merk Mobil</label>
                                        <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" placeholder="Merk Mobil">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="created_by">updated by</label>
                                        <input type="text" class="form-control" name="created_by" value="<?= user()->name; ?>" readonly>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                <label>Type</label>
                                <div class="form-group">
                                        <select class="form-control input-sm" name="type" id="Type">
                                <option value="">Choice Type</option>
                                <option value="Manual">Manual</option>
                                <option value="Matic">Matic</option>
                                </select>
                                </div>	
                            </div>
                                <!-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div> -->

                                <!-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Photo</label>
                                        <input type="file" class="form-control dropify" id="image" name="image">
                                        <span class="help-block"></span>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="button" class="btn btn-sm btn-primary" id="btn_save" onclick="ajax_save()">Save</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

         <!-- End of Main Content -->
      <div class="modal fade" id="modal-cms" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">Create New Data</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form_cms" accept-charset="utf-8" enctype="multipart/form-data">
                        
                            <input type="hidden" class="form-control" id="id" name="id">
                            <div class="row">
                            <?= csrf_field(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="app_name">app name</label>
                                        <input type="text" class="form-control" id="app_name" name="app_name" placeholder="Merk Mobil">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="app_slug">app slug</label>
                                        <input type="text" class="form-control" id="app_slug" name="app_slug" placeholder="Merk Mobil">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="created_by">updated by</label>
                                        <input type="text" class="form-control" name="created_by" value="<?= user()->name; ?>" readonly>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="created_by">Link</label>
                                        <input type="text" class="form-control" name="link" >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" name="description">
                                        <span class="help-block"></span>
                                    </div>
                                
                            </div>
                                <!-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div> -->

                                <!-- <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Photo</label>
                                        <input type="file" class="form-control dropify" id="image" name="image">
                                        <span class="help-block"></span>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="button" class="btn btn-sm btn-primary" id="btn_save" onclick="ajax_save()">Save</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

         <!-- End of Main Content -->
         <div class="modal fade" id="modal-permission" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">Create New Data</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form_permission" accept-charset="utf-8" enctype="multipart/form-data">
                        
                            <input type="hidden" class="form-control" id="id" name="id">
                            <div class="row">
                            <?= csrf_field(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="permission_id">permission id</label>
                                        <input type="text" class="form-control" id="permission_id" name="permission_id" >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="user_id">user id</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id"   >
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="type">type</label>
                                        <input type="text" class="form-control" name="type">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                              
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="button" class="btn btn-sm btn-primary" id="btn_save" onclick="permission_ajax()">Save</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

