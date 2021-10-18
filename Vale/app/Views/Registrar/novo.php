            
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
                    <h4>Olá, seja bem vindo(a)!</h4>
                    <h6 class="font-weight-light">Complete os campos para criar a sua conta</h6>
                    <?= form_open('registrar/criar'); ?>
                    <?php if (session()->has('errors_model')): ?>

                        <ul>
                            <?php foreach (session('errors_model') as $error): ?>

                                <li class="text-danger" >
                                    <?= $error ?>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" name="nome" value="<?= old('nome') ?>" class="form-control form-control-lg"  placeholder="Digite o seu Nome">
                    </div>
                    <div class="form-group">
                        <input type="text" name="cpf" value="<?= old('cpf') ?>" class="cpf form-control form-control-lg" id="exampleInputEmail1" placeholder="Digite o seu CPF">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="<?= old('email') ?>" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Digite o seu E-mail">
                    </div>
                     <div class="form-group">
                        <input type="text" name="telefone" value="<?= old('telefone') ?>" class=" sp_celphones form-control form-control-lg"  placeholder="Digite o seu Telefone">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Digite a sua senha">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirme a sua senha">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Criar a minha conta</button>
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
<script src="<?= site_url('admin/vendors/mask/jquery.mask.min.js'); ?>"></script>
<script src="<?= site_url('admin/vendors/mask/app.js'); ?>"></script>
<?= $this->endSection(); ?>









