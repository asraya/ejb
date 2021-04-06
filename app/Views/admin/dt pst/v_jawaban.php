
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Jawaban</h1>

                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    
<table id="dataTable" class="table table-bordered">
    <thead>
    <th width="2">No</th>
    <th width="10">Jawaban</th>

    </thead>
    <tbody>
                    <tr>

                        <?php $no=1; foreach ($list_j as $key) { ?>
                            
                        <?php foreach ((explode(',',$key['list_jawaban'])) as $key) { ?>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $key; ?></td>


                    <tr>           
                    <?php $no++; } ?>

<?php } ?>
</tbody>
</table>
</form>

<form action="<?php echo base_url('master_data_peserta_motor/inputnilai') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

<?php foreach ($list_j as $key) { ?>
    <a href="#" data-id="<?= $key['id_ujian'];?>" class="btn btn-info float-left mb-3 btn-editnilai"  data-name="<?= $key['nilai_uji_teori'];?>">Nilai</a>

    <?php } ?>
                    
    </form>
    <!-- Modal Edit Penguji-->
<form action="/master_data_peserta_motor/inputnilai" method="post">
        <div class="modal fade" id="editModalNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" class="form-control id_ujian" name="id_ujian" value="<?php echo $key['id_ujian']; ?>" readonly>
                    <input type="text" class="form-control nilai_uji_teori" name="nilai_uji_teori" value="<?php echo $key['nilai_uji_teori']; ?>">
                </div>           
             
            </div>
            <div class="modal-footer">
            <input type="hidden" name="id_ujian" class="id_ujian">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
</div>
</div>
</div>
<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-editnilai').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');

            
            // Set data to Form Edit
            $('.id_ujian').val(id);
        
            $('.nilai_uji_teori').val(name).trigger('change');

            // Call Modal Edit
            $('#editModalNilai').modal('show');
        });        
         
    });

</script>