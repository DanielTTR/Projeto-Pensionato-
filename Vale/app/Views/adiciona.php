<?= $this->extend('layouts') ?>

<?= $this->Section('scriptCabeçalho') ?>
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<link rel="stylesheet" href="<?= base_url("assets/css/styles.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/new_index.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/owl/owl.carousel.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/owl/owl.theme.default.min.css") ?>">

<title>Document</title>

<?= $this->endSection() ?>

<?= $this->Section('corpoDocumento') ?>

<div class="container">
    <h3>Cadastrar</h3>

    <?=form_open('Admin/Home/insert');?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo do conjunto</label>
            <input type="text" class="form-control" id="Tipo_conjunto" name="Tipo_conjunto" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do conjunto</label>
            <input type="text" class="form-control" id="Nome_conjunto" name="Nome_conjunto" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Responsável</label>
            <input type="text" class="form-control" id="Responsavel" name="Responsavel">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="Telefone" name="Telefone" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="Bairro" name="Bairro" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rua</label>
            <input type="text" class="form-control" id="Rua" name="Rua" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fotos</label>
            <input type="text" class="form-control" id="Foto" name="Foto" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descrição</label>
            <input type="area-text" class="form-control" id="Descricao" name="Descricao" aria-describedby="pessoa_nomeHelp">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    <?=form_close()?>;
</div>

<?= $this->endSection() ?>

<?= $this->Section('scriptRodapé') ?>
<script src="<?= base_url("js/jquery.min.js") ?>"></script>
<script src="<?= base_url("js/owl.carousel.min.js") ?>"></script>
<script src="<?= base_url("js/script.js") ?>"></script>
<?= $this->endSection() ?>