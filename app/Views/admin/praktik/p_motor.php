
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">FORM PENILAIAN PRAKTIK KENDARAAN RODA DUA</h1>
                        <?php foreach($bank as $data) {  ?>
                    <input type="hidden" name="name" value="<?php echo $data['id']; ?>" class="form-control" placeholder="Name" readonly>
                    <?php } ?>
                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                
                

                <form action="<?php echo base_url('master_data_peserta_motor/insert') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <input type="text" class="form-control" name="checked_by" value="<?= user()->name; ?>" readonly>
                <input type="text" class="form-control" name="id_penguji" value="<?= user()->nrp; ?>" readonly>
                <input type="hidden" class="form-control" name="ujian_id" value="<?php echo $data['category_id'] ?>" readonly>
                <input type="hidden" id="user_id" name="user_id" value="<?php echo $data['nrp']; ?>" class="form-control" placeholder="Name" readonly>

            <table id="" class="table table-bordered">
                <thead>
                    <th width="10">No</th>
                    <th>Pertanyaan</th>
                    <th width="10">Ya</th>
                    <th width="10">Tidak</th>

                    <!-- <th width="15">Skor</th> -->

                    <!-- <th>file</th> -->
                </thead>
                <tbody>
               

                <?php $no=0; foreach($bank as $data) { $no++ ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['soal']; ?></td>

     <td><center><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban_praktik[<?php echo $data['id_soal'];?>]" value="Ya"></center></td>
    <td><center><input type="radio" id="<?php echo $data['id_soal']; ?>" name="list_jawaban_praktik[<?php echo $data['id_soal'];?>]" value="Tidak"></center></td>
    <p style="display: none;"><input type="radio" checked id="<?php echo $data['id_soal']; ?>" name="list_jawaban_praktik[<?php echo $data['id_soal'];?>]" value="''"> <label for="opsi_e"></label></p>



                                         <!-- <td><div  id="box1" name="txt1" class="0 box">0</div>
                                            <div  id="box2" name="txt2" class="1 box">1</div>
                                            <div  id="box3" name="txt3" class="2 box">2</div></td>                                               -->
                    </tr>
                 
                    <?php } ?>
                   


</table>

                    <!-- <php $no=1; foreach($bank as $data) { $no++ ?>
                    <tr>
                        <td><php echo $no; ?></td>
                        <td><php echo $data['soal']; ?></td>
                                        <td>  <input type="checkbox" id="1" name="check_list[]" value="<php echo $data['opsi_a']; ?>">
                                        <label for="pria"></label></td>
                                        <td>  <input type="checkbox" id="2" name="check_list[]" value="<php echo $data['opsi_b']; ?>">
                                        <label for="pria"></label></td>
                                        <td>  <input type="checkbox" id="3" name="check_list[]" value="<php echo $data['opsi_c']; ?>">
                                        <label for="pria"></label></td>
                        

                      
                    </tr>
                    <php } ?> -->
                </tbody>

            </table>
            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Save</button>

        </div>
        <!-- /.container-fluid -->

      </div>
                </div>
               
                            </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <script>
            $("input[type='radio'][name='list_jawaban_praktik[]']").on("change",function(){
  if($(this).is(':checked')){
    $("#displayDS").show();
  }else{
    $("#displayDS").hide();
  }
});
</script>

