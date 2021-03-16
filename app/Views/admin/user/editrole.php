
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Edit</h1>
 </div>

<div class="row">

<?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url('role/update/'.$role['id']); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                <?= csrf_field(); ?>
 
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="user_id" value="<?php echo $role['name']; ?>" class="form-control" placeholder="Name" readonly>
                </div>             
                
                <div class="form-group">
                    <label for="group_id">Role bagian</label>
                    <select name="group_id" class="form-control" id="group_id">
                        <option value="1" <?= ($role['group_id'] == "1" ? "selected" : ""); ?>>admin</option>
                        <option value="2" <?= ($role['group_id'] == "2" ? "selected" : ""); ?>>peserta</option>
                        <option value="3" <?= ($role['group_id'] == "3" ? "selected" : ""); ?>>pengawas</option>
                        <option value="4" <?= ($role['group_id'] == "4" ? "selected" : ""); ?>>penguji</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>
 1 = admin
 2 = peserta
 3 = pengawas
 4 = penguji
            </form>
    </div>
    </div>
    
    </div>
    </div>
    </div>
