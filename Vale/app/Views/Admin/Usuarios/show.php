<?= $this->extend('Admin/layout/principal'); ?>



<?= $this->section('titulo'); ?>
<?= $titulo; ?>
<?= $this->endSection(); ?>


<?= $this->section('estilos'); ?>


<?= $this->endSection(); ?>







<?= $this->section('conteudo'); ?>

<div class="row">

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-primary pb-0 pt-4">
                <h4 class="card-title text-white"><?= esc($titulo); ?></h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <span class="font-weight-bold">Nome: </span>
                    <?= esc($usuario->nome); ?>

                </p>

                <p class="card-text">
                    <span class="font-weight-bold">E-mail: </span>
                    <?= esc($usuario->email); ?>

                </p>
                <p class="card-text">
                    <span class="font-weight-bold">Ativo: </span>
                    <?= ($usuario->ativo ? 'Sim' : 'Não'); ?>
                </p>
                <p class="card-text">
                    <span class="font-weight-bold">Perfil: </span>
                    <?= ($usuario->is_admin ? 'Administrador' : 'Cliente'); ?>
                </p>
                <p class="card-text">
                    <span class="font-weight-bold">Criado: </span>
                    <?= $usuario->criado_em->humanize(); ?>
                </p>
                <?php if ($usuario->deletado_em == null): ?>
                    <p class="card-text">
                        <span class="font-weight-bold">Atualizado: </span>
                        <?= $usuario->atualizado_em; ?>
                    </p>
                <?php else: ?>
                    <p class="card-text">
                        <span class="font-weight-bold text-danger">Excluído: </span>
                        <?= $usuario->deletado_em; ?>
                    </p>

                <?php endif; ?>

                <div class="mt-4">
                    <?php if ($usuario->deletado_em == null): ?>
                        <a href="<?= site_url("admin/usuarios/editar/$usuario->id"); ?>" class="btn btn-dark btn-sm mr-2">
                            Editar
                        </a>
                        <a href="<?= site_url("admin/usuarios/excluir/$usuario->id"); ?>" class="btn btn-danger btn-sm mr-2">
                            Excluir
                        </a>
                        <a href="<?= site_url("admin/usuarios"); ?>" class="btn btn-light text-dark btn-sm ">
                            Voltar
                        </a>

                    <?php else: ?>

                        <a href="<?= site_url("admin/usuarios"); ?>" class="btn btn-light text-dark btn-sm ">
                            Voltar
                        </a>
                        <a href = "<?= site_url("admin/usuarios/desfazerexclusao/$usuario->id"); ?>" class = "btn btn-dark btn-sm">
                            <i class = "mdi mdi-undo btn-icon-prepend "></i>
                            Desfazer exclusão
                        </a>


                    <?php endif; ?>



                </div>


            </div>
        </div>
    </div>

</div>





<?= $this->endSection(); ?>






<?= $this->section('scripts'); ?>

<?= $this->endSection(); ?>
