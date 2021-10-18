            
<?= $this->extend('Admin/layout/principal_autenticacao'); ?>



<?= $this->section('titulo'); ?>
<?= $titulo; ?>
<?= $this->endSection(); ?>


<?= $this->section('estilos'); ?>
<!-- aqui enviamos para o template principal os estilos  -->
<?= $this->endSection(); ?>







<?= $this->section('conteudo'); ?>

<!-- aqui enviamos para o template principal o conteudo  -->

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-5 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">


                    <?php if (session()->has('sucesso')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Perfeito!</strong> <?= session('sucesso'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php endif; ?>
                    <?php if (session()->has('info')): ?>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Informação!</strong> <?= session('info'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php endif; ?>
                    <?php if (session()->has('atencao')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Alerta!</strong> <?= session('atencao'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php endif; ?>


                    <?php if (session()->has('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Erro!</strong> <?= session('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php endif; ?>
                    <div class="brand-logo">
                        <img src="<?php echo site_url('admin/'); ?>images/logo.png" alt="logo" align="right">
                    </div>
                    <h4>Recuperando a senha!</h4>
                    <h6 class="font-weight-light"><?= $titulo; ?></h6>
                    <?php if (session()->has('errors_model')): ?>

                        <ul>
                            <?php foreach (session('errors_model') as $error): ?>

                                <li class="text-danger" >
                                    <?= $error ?>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                    <?php endif; ?>
                    <?= form_open("password/processareset/$token"); ?>



                    <div class="form-grup ">
                        <label for="password">Nova senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group ">
                        <label for="confirmation_password">Confirmação da nova senha</label>
                        <input type="password" class="form-control" id="confirmation_password" name="password_confirmation" >
                    </div>
                    <div class="mt-3">
                        <input  type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Redefinir senha" >
                    </div>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->

<?= $this->endSection(); ?>






<?= $this->section('scripts'); ?>


<?= $this->endSection(); ?>









