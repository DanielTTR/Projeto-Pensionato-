<?= $this->extend('Admin/layout/principal'); ?>



<?= $this->section('titulo'); ?>
<?= $titulo; ?>
<?= $this->endSection(); ?>


<?= $this->section('estilos'); ?>
<!-- aqui enviamos para o template principal os estilos  -->

<link rel="stylesheet" href="<?= site_url('admin/vendors/auto-complete/jquery-ui.css'); ?>"/>

<?= $this->endSection(); ?>







<?= $this->section('conteudo'); ?>

<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $titulo; ?></h4>




                <div class="ui-widget">
                    <input id="query" name="query" placeholder="Pesquise por um usuario" class="form-control bg-light mb-5 ">
                </div>

                <a href = "<?= site_url("admin/usuarios/criar/"); ?>" class = "btn btn-success mb-5">
                    <i class = "mdi mdi-plus btn-icon-prepend"></i>
                    Cadastrar
                </a>





                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>Ativo</th>
                                <th>Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td>
                                        <a href="<?= site_url("admin/usuarios/show/$usuario->id"); ?>"><?= $usuario->nome; ?></a>

                                    </td>
                                    <td><?= $usuario->email; ?></td>
                                    <td><?= $usuario->cpf; ?></td>
                                    <td><?= ($usuario->ativo && $usuario->deletado_em == null ? '<label class="badge badge-primary">Sim</label>' : '<label class="badge badge-danger">Não</label>'); ?></td>
                                    <td>


                                        <?= ($usuario->deletado_em == null ? '<label class="badge badge-primary">Disponível</label>' : '<label class="badge badge-danger">Excuido</label>'); ?>

                                        <?php if ($usuario->deletado_em != null): ?>
                                            <a href = "<?= site_url("admin/usuarios/desfazerexclusao/$usuario->id"); ?>" class = "badge badge-dark ml-2">
                                                <i class = "mdi mdi-undo btn-icon-prepend "></i>
                                                Desfazer
                                            </a>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="mt-3">
                        <?= $pager->links() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





<?= $this->endSection(); ?>






<?= $this->section('scripts'); ?>
<!-- aqui enviamos para o template principal os scripts  -->

<script src="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.js'); ?>"></script>
<script>
    $(function () {

        $("#query").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "<?= site_url('admin/usuarios/procurar'); ?>",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function (data) {
                        if (data.lenght < 1) {

                            var data = [
                                {
                                    label: 'Usuario não encontrado',
                                    value: -1
                                }
                            ];
                        }
                        response(data);
                    },
                });
            },
            minLenght: 1,
            select: function (event, ui) {
                if (ui.item.value == -1) {
                    $(this).val("");
                    return false;
                } else {
                    window.location.href = "<?= site_url('admin/usuarios/show/') ?>" + ui.item.id;
                }
            }
        });
    });

</script>

<?= $this->endSection(); ?>
