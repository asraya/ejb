<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../tk.png">

    <title>Ejb || Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>/assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                            </div>
                            <?= view('Myth\Auth\Views\_message_block') ?>


                            <form action="<?= route_to('register') ?>" method="post" class ="user">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                    <input type="text" class="form-control <?php if(session('errors.name')) : ?>is-invalid<?php endif ?>"
                                     id="text" name="name" placeholder="<?=lang('Auth.name')?>" value="<?= old('name') ?>">
                                     <small id="nameHelp" class="form-text text-muted"><?=lang('Auth.nameNotTitle')?></small>
                                   </div>                                    

                                    <div class="form-group">
                                    <label for="type"><?=lang('Auth.type')?>:</label>&nbsp;&nbsp;
                                    <input type="radio" id="pria" name="type" value="Pria">
                                        <label for="pria">Pria</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="perempuan" name="type" value="Wanita">
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
                                    <!--</div>

                                    
                                     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Pangkat</label>
                                        <select class="form-control"  name="pangkat_id" id="pangkat" required>
                                            <option  value="">No Selected</option>
                                            <php foreach($pangkat as $row):?>
                                            <option value="<php echo $row['id'] ?>"><php echo $row['pangkat'] ?></option>
                                            <php endforeach;?>
                                        </select>
                                    </div>  -->

                                    <div class="col-sm-6">
                                    <label>ktp</label>
                                        <input type="text" class="form-control <?php if(session('errors.ktp')) : ?>is-invalid<?php endif ?>"
                                        id="ktp" name="ktp" maxlength='8' onkeypress="return hanyaAngka(event)" placeholder="<?=lang('Auth.ktp')?>" value="<?= old('ktp') ?>">
                                    </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label>Asal polda</label>
                                        <select class="form-control" name="polda_id" id="asal_polda" required>
                                            <option value="">No Selected</option>
                                            <php foreach($asal_polda as $row):?>
                                            <option  value="<php echo $row['id'] ?>"><php echo $row['asal_polda'] ?></option>
                                            <php endforeach;?>
                                        </select>
                                    </div> -->

                                    <div class="form-group <?php if(session('errors.sim')) : ?>is-invalid<?php endif ?>">
                                    <label for="sim"><?=lang('Auth.sim')?>:</label>
                                    <input type="radio" id="motor" name="category_id" value="1">
                                        <label for="motor">Motor</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="mobil" name="category_id" value="2">
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
                              
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
					            <p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                            </div>
                            <div class=" text-center">
                            <p><?=lang('Auth.alreadyRegistered')?> <a class="small" href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>