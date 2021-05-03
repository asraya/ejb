
    <!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../tk.png">



    <title>Ejb || Login</title>

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
    <?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <!-- <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div> -->
                                 <div class="text-center">
                                    <img class="img-profile" src="img/tk.png" height="150" width="200">
                                 </div> 
                                 </br>
                                 <?= view('Myth\Auth\Views\_message_block') ?>

                                 </br>
                                    <form action="<?= route_to('login') ?>" method="post" class="user">
						                <?= csrf_field() ?>

                                        <?php if ($config->validFields === ['email']): ?>

                                        <div class="form-group">
                                            <label for="login"><?=lang('Auth.email')?></label>
                                            <input type="email" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?=lang('Auth.email')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                            <?php else: ?>
                                        <div class="form-group">
                                            <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                                            <input type="text" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                            <?php endif; ?>
                                            
                                        <div class="form-group">
                                            <label for="password"><?=lang('Auth.password')?></label>
                                            <input type="password" name="password" class="form-control form-control-user  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
                            <?php endif; ?>

						<br>

						<button type="submit" class="btn btn-primary btn-user btn-block"><?=lang('Auth.loginAction')?></button>
					</form>
                                    <hr>
                                    <div class="text-center">
                                        <?php if ($config->allowRegistration) : ?>
				                    	<p><a class="small" href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text-center">
                                        <?php if ($config->activeResetter): ?>
				                    	<p><a class="small" href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                                         <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->endSection() ?>

                </div>

            </div>

        </div>

    </div>  