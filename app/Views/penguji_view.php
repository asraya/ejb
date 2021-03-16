
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Master Penguji</h1>
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
                       <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
                       </div>
     <table id="dataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($penguji as $row):?>
                <tr>
                    <td><?= $row->penguji_name;?></td>
                   
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->penguji_id;?>" data-name="<?= $row->penguji_name;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->penguji_id;?>">Delete</a>
                        <a href="<?php echo base_url('Master_data_penguji/create_active/')?>" data-id="<?= $row->penguji_id;?>" class="btn btn-info btn-sm btn-active">active</i></a>

                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
    
 <!-- Modal Add Penguji-->
 <form action="/master_data_penguji/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Penguji</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Penguji Name</label>
                    <input type="text" class="form-control" name="penguji_name" placeholder="Penguji Name">
                </div>
                <div class="form-group">
                                    <label for="jenis_kelamin"><?=lang('Auth.jenis_kelamin')?>:</label>&nbsp;&nbsp;
                                    <input type="radio" id="pria" name="jenis_kelamin" value="Pria">
                                        <label for="pria">Pria</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Wanita">
                                        <label for="wanita">Wanita</label>                                       
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="tempat_lahir"><?=lang('Auth.tempat_lahir')?>:</label>

                                            <input type="text" name="tempat_lahir" class="form-control <?php if(session('errors.tempat_lahir')) : ?>is-invalid<?php endif ?>" 
                                          placeholder="Kota/Kab" value="<?= old('tempat_lahir') ?>" autocomplete="off">
                                        </div>

                                        <div class="col-sm-6">
                                        <label for="tanggal_lahir"><?=lang('Auth.tanggal_lahir')?>:</label>
                                            <input type="date" name="tanggal_lahir" class="form-control <?php if(session('errors.tanggal_lahir')) : ?>is-invalid<?php endif ?>" 
                                            placeholder="<?=lang('Auth.formatdate')?>" value="<?= old('tanggal_lahir') ?>" autocomplete="off">
                                        </div>                               
                                    </div>

                                    
                                    <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Pangkat</label>
                                        <select class="form-control" name="pangkat" id="pangkat" required>
                                            <option  value="">No Selected</option>
                                            <?php foreach($pangkat as $row):?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['pangkat'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div> 

                                    <div class="col-sm-6">
                                    <label>Nrp</label>
                                        <input type="text" class="form-control <?php if(session('errors.nrp')) : ?>is-invalid<?php endif ?>"
                                        id="nrp" name="nrp" maxlength='8' onkeypress="return hanyaAngka(event)" placeholder="<?=lang('Auth.nrp')?>" value="<?= old('nrp') ?>">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Asal polda</label>
                                        <select class="form-control" name="asal_polda" id="asal_polda" required>
                                            <option value="">No Selected</option>
                                            <?php foreach($asal_polda as $row):?>
                                            <option  value="<?php echo $row['id'] ?>"><?php echo $row['asal_polda'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>                                  

                                    <div class="form-group">
                                    <label for="category_trainer"><?=lang('Auth.sim')?>:</label>
                                    <input type="radio" id="motor" name="category_trainer" value="motor">
                                        <label for="motor">Motor</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="mobil" name="category_trainer" value="mobil">
                                        <label for="mobil">Mobil</label>                                       
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">                                        
                                    <input type="number" class="form-control <?php if(session('errors.no_telepon')) : ?>is-invalid<?php endif ?>"
                                        id="no_telepon" name="no_telepon" placeholder="<?=lang('Auth.no_telepon')?>" value="<?= old('no_telepon') ?>">
                                    </div>

                                    <div class="col-sm-6">
                                    <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                     id="email" name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                   </div>
                                   </div>                                   

                                     <div class="form-group row">
                                     <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" 
                                        placeholder="<?=lang('Auth.password')?>" value="<?= old('pass_confirm') ?>" autocomplete="off">
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" 
                                        placeholder="<?=lang('Auth.repeatPassword')?>" value="<?= old('pass_confirm') ?>" autocomplete="off">

                                    </div>                               
                                </div>
           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Penguji-->
    
        <!-- Modal Edit Penguji-->
        <form action="/master_data_penguji/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Penguji</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Penguji Name</label>
                    <input type="text" class="form-control penguji_name" name="penguji_name" placeholder="Penguji Name">
                </div>
           
 
            
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="penguji_id" class="penguji_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Penguji-->

     <!-- Modal Delete Penguji-->
     <form action="/master_data_penguji/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Penguji</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this penguji?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="penguji_id" class="pengujiID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Penguji-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>



     
    
 

 
   
 

