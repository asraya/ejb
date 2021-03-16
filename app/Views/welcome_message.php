

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Upload Data</h1>
                    
                    </div>              
                    </div>
                    <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 
</div>
<?= view('Myth\Auth\Views\_message_block') ?>

<!-- Content Row -->
<form action="<?php echo base_url('home/store') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

<div class="row">
<div class="form-group">
                <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">
               </div>

         <div class="form-group">
            <label for="upload">UPLOAD KTA</label>
                <input type="file" id="file_upload" class="form-control" name="file_upload">
                 <small id="upload_ktaHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>
               </div>
               <div class="form-group">
               <label for="upload">UPLOAD KTP</label>
                <input type="file" id="file_upload1" class="form-control" name="file_upload1">
                 <small id="upload_ktpHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>
               </div>
               <div class="form-group">
               <label for="upload">UPLOAD SIM</label>
                <input type="file" id="file_upload2" class="form-control" name="file_upload2">
                 <small id="upload_simHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>
               </div>
               <div class="form-group">
               <label for="upload">UPLOAD FOTO</label>
                <input type="file" id="file_upload3" class="form-control" name="file_upload3">
                 <small id="upload_fotoHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>
               </div>
               <div class="form-group">
               <label for="upload">UPLOAD CV</label>
                <input type="file" id="file_upload4" class="form-control" name="file_upload4">
                 <small id="upload_cvHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDocCv')?></small>
               </div>
               <div class="form-group">
               <label for="upload">UPLOAD VIDEO PRESENTASI</label>
                <input type="file" id="file_upload5" class="form-control"name="file_upload5">
                 <small id="upload_videoHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareVideo')?></small>
               </div>  
</div>
<button type="submit" class="btn btn-primary">Save</button>


</div>
<!-- /.container-fluid -->

</div>

                <!-- /.container-fluid -->

            
            <!-- End of Main Content -->

            