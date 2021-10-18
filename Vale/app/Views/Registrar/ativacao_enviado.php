            
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

                    <div class="brand-logo">
                        <img src="<?php echo site_url('admin/'); ?>images/logo.png"  align="middle">
                    </div>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Perfeito</h4>
                        <p><?= $titulo; ?></p>
                        <hr>
                        <p class="mb-0">Verifique sua caixa de entrada para ativar a sua conta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->

<?= $this->endSection(); ?>






<?= $this->section('scripts'); ?>
<!-- aqui enviamos para o template principal os scripts  -->
<?= $this->endSection(); ?>









