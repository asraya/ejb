
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Unggah Data Dokumen</h1>
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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModalKta">Upload Kta</button>                       
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModalKta">View</button>
                       </div>
               </div>
    </div>
    
 <!-- Modal Add KTA-->
 <form action="<?php echo base_url('dokumen/storeKta') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

        <div class="modal fade" id="addModalKta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload dokumen KTA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">

                <div class="form-group">
                    <label>Upload dokumen KTA</label>
                    <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder=" Name">
                </div>
                <small id="upload_ktaHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>

             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
 <!-- Modal Add KTA-->

 <form action="<?php echo base_url('dokumen/storeKtp') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="addModalKtp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload dokumen KTP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">

                <div class="form-group">
                    <label>Upload dokumen KTP</label>
                    <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder=" Name">
                </div>
                <small id="upload_ktpHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add -->


 <!-- Modal Add Sim-->
 <form action="<?php echo base_url('dokumen/storeSim') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="addModalSim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload dokumen SIM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">

                <div class="form-group">
                    <label>Upload dokumen SIM</label>
                    <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder=" Name">
                </div>
                <small id="upload_simHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>

             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Sim-->

<!-- Modal Add Foto-->
<form action="<?php echo base_url('dokumen/storeFoto') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="addModalFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload dokumen Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">

                <div class="form-group">
                    <label>Upload dokumen Foto</label>
                    <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder=" Name">
                </div>
                <small id="upload_fotoHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDoc')?></small>

             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Foto-->

<!-- Modal Add Cv-->
<form action="<?php echo base_url('dokumen/storeCv') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="addModalCv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload dokumen Cv</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">

                <div class="form-group">
                    <label>Upload dokumen Cv</label>
                    <input type="file" accept="application/pdf" class="form-control" id="file_upload" name="file_upload" placeholder=" Name">
                </div>
                <small id="upload_cvHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareDocCv')?></small>

             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Cv-->

    <!-- Modal Add Video-->
    <form action="<?php echo base_url('dokumen/storeVideo') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="addModalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload dokumen Video   </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">

                <div class="form-group">
                    <label>Upload dokumen Video</label>
                    <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder=" Name">
                </div>
                <small id="upload_videoHelp" class="form-text text-muted"><?=lang('Auth.weNeverShareVideo')?></small>

             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Video-->






    
        <!-- Modal Edit -->
        <form action="<?php echo base_url('dokumen/updateKta') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="editModalKta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <!-- <label>Dokumen</label> -->
                    <input type="hidden" id="user_id" class="form-control" value="<?= user()->id; ?>" name="user_id">
                    <input type="hidden" class="form-control upload_kta"placeholder="Upload KTA" readonly>
                    <?php foreach ($dokumenKta as $eren) { ?>
                    <img style="height: 150px; width: 300px"  src="<?php echo base_url('../assets/images/kta/'.$eren['upload_kta']) ?>" class="img-fluid img-thumbnail" >
                	<?php } ?>

                </div>             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">Update</button>-->
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit -->

 <!-- Modal Edit -->
 <form action="<?php echo base_url('dokumen/updateKtp') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="editModalKtp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ktp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <!-- <label>Dokumen</label> -->
                    <input type="hidden" class="form-control name" value="" name="name" placeholder="Upload KTP">
                    <?php foreach ($dokumenKtp as $eren) { ?>
                    <img style="height: 150px; width: 300px"  src="<?php echo base_url('../assets/images/ktp/'.$eren['upload_ktp']) ?>" class="img-fluid img-thumbnail" >
                	<?php } ?>
                </div>        
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">Update</button>-->
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit -->

    <!-- Modal Edit -->
    <form action="<?php echo base_url('dokumen/updateSim') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="editModalSim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sim</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <!-- <label>Dokumen</label> -->
                    <input type="hidden" class="form-control name" value="" name="name" placeholder="Upload SIM">
                    <?php foreach ($dokumenSim as $eren) { ?>
                    <img style="height: 150px; width: 300px"  src="<?php echo base_url('../assets/images/sim/'.$eren['upload_sim']) ?>" class="img-fluid img-thumbnail" >
                	<?php } ?>
                </div>        
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">Update</button>-->
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit -->

      <!-- Modal Edit -->
      <form action="<?php echo base_url('dokumen/updateFoto') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="editModalFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <!-- <label>Dokumen</label> -->
                    <input type="hidden" class="form-control name" value="" name="name" placeholder="Upload Foto">
                    <?php foreach ($dokumenFoto as $eren) { ?>
                    <img style="height: 150px; width: 300px"  src="<?php echo base_url('../assets/images/foto/'.$eren['upload_foto']) ?>" class="img-fluid img-thumbnail" >
                	<?php } ?>
                </div>        
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">Update</button>-->
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit -->

     <!-- Modal Edit -->
     <form action="<?php echo base_url('dokumen/updateCv') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="editModalCv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cv</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <!-- <label>Dokumen</label> -->
                    <input type="hidden" class="form-control name" value="" name="name" placeholder="Upload Cv">
                    <?php foreach ($dokumenCv as $eren) { ?>
                    <iframe type="application/pdf" style="height: 150px; width: 300px"  src="<?php echo base_url('../assets/images/cv/'.$eren['upload_cv']) ?>"></iframe>
                    <?php } ?>
                </div>        
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">Update</button>-->
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit -->

     <!-- Modal Edit -->
     <form action="<?php echo base_url('dokumen/updateVid') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="modal fade" id="editModalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <!-- <label>Dokumen</label> -->                    
                    <input type="hidden" class="form-control name" value="" name="name" placeholder="Upload Video">
                    <?php foreach ($dokumenVid as $eren) { ?>
                    <video controls width="310" height="300"><source type="video/mp4" src="<?php echo base_url('../assets/images/video/'.$eren['upload_video']) ?>" class="video-js vjs-default-skin" data-setup='{"controls" : true, "autoplay" : false, "preload" : "auto"}'>
                    </video>
                    <?php } ?>
                </div>        
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">Update</button>-->
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit -->







     <!-- Modal Delete -->
     <form action="/master_data_/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this ?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="ID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete -->
    </div>
    </div>
    </div>
    </div>
   
    <div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModalKtp">Upload Ktp</button>                                            
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModalKtp">View</button>

                       </div>
               </div>
    </div>    
    </div>
    </div>  
    </div>
    </div>
    <div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModalSim">Upload Sim</button>                       
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModalSim">View</button>

                       </div>
               </div>
    </div>    
    </div>
    </div>    
    </div>
    </div>
    <div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">      
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModalFoto">Upload Foto</button>                      
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModalFoto">View</button>
                       </div>
               </div>
    </div>    
    </div>
    </div>    
    </div>
    </div>
    <div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">             
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModalCv">Upload Cv</button>
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModalCv">View</button>
                       </div>
               </div>
    </div>    
    </div>
    </div>    
    </div>
    </div>
    <div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">              
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModalVideo">Upload Video</button>
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModalVideo">View</button>

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
    
     
    
 

 
   
 

