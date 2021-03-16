<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"/>
</head>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Peserta Praktik Motor</h1>

                    </div>
                    <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="table-responsive">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Create Soal                        -->
                       <!-- <a href="<?php echo base_url('/create'); ?>" class="btn btn-success float-right mb-3">+</a> -->
                       <!-- </div> -->
                       
                       <table id="tab" class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Kategory Test</th>
                    <?php if ( in_groups(['admin'])) : ?>
                    <th>List Jawaban</th>
                    <th>Nilai</th>
                    <?php endif; ?>
                    <th>Asal</th>
                    <th>Checked by</th>
                    <th>Tanggal</th>

                    <th>Act</th>
                </thead>
                <tbody>
                    <?php $no=0; foreach($list as $data) { $no++ ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['nama_category_test']; ?></td>
                        <?php if ( in_groups(['admin'])) : ?>
                        <td><?php echo $data['list_jawaban']; ?></td>
                        <td><?php echo $data['nilai_uji_teori']; ?></td>
                        <?php endif; ?>
                        <td><?php echo $data['asal_polda']; ?></td>
                        <td><?php echo $data['checked_by']; ?></td>
                        <td><?php echo $data['tgl_mulai']; ?></td>

                        <!-- <td><a class="nav-link text-primary" target="_blank" href="< base_url(); ?>/assets/images/< $data['file']; ?>">< $data['file']; ?></a></td> -->
                        <td>
                            <div class="btn-group">
                            <?php if ( in_groups(['admin', 'pengawas'])) : ?>
                                <a href="<?php echo base_url('master_data_peserta_motor/edit/'.$data['nrp']); ?>" class="btn btn-danger float-right mb-3"><i class="fas fa-eye"></i></a>
                                <?php endif; ?>
                            <?php if ( in_groups(['admin', 'penguji', 'pengawas'])) : ?>
                                
                                    <a href="<?php echo base_url('master_data_peserta_motor/p2/'.$data['nrp']); ?>" class="btn btn-warning float-right mb-3">Test</i></a>

                            <?php endif; ?>

                            </div>
                        </td>
                      
                    </tr>
                    <?php } ?>
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
            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

<script>
   $(function(){
     $("#tab").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'pageLength'
        ]
    });
   })
</script>
            <!-- End of Main Content -->

            <!-- End of Main Content -->
