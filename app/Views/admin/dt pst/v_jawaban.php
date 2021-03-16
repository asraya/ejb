
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
                <form action="<?php echo base_url('TestUji/insert') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    
<table id="dataTable" class="table table-bordered">
    <thead>
    <th width="2">No</th>
    <th width="10">Jawaban</th>
    <th width="10">Kunci Jawaban</th>

    </thead>
    <tbody>
                    <tr>

                        <?php $no=1; foreach ($list_j as $key) { ?>
                            
                        <?php foreach ((explode(',',$key['list_jawaban'])) as $key) { ?>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $key; ?></td>
                            <!-- <?php foreach ($list_k as $fuckyou) { ?>        
                                    <?php print_r($fuckyou['jawaban'])  ?>
                            <?php } ?> -->

                    <tr>           
                    <?php $no++; } ?>

<?php } ?>
</tbody>
</table>
</div>
</div>
</div>