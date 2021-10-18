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

    <?= form_open('Admin/Home/insereQuarto');  ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Qual conjunto?</label>
            <br>
            <select class="form-select" name="Conj_id" aria-label="Default select example">
                <option value="">Conjunto</option>
                <?php foreach ($conjuntoId->getResult() as $row) { ?>
                <option value="<?php echo $row->Conj_id; ?>"> <?php echo $row->Conj_id;?> - <?php echo $row->Nome_conjunto?></option>

                <?php }?>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do quarto</label>
            <input type="text" class="form-control" id="Nome_quarto" name="Nome_quarto" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Disponibilidade</label>
            <input type="text" class="form-control" id="Disponibilidade" name="Disponibilidade" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="Descricao" name="Descricao">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço</label>
            <input type="text" class="form-control" id="Preco" name="Preco" aria-describedby="pessoa_nomeHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="text" class="form-control" id="Foto" name="Foto" aria-describedby="pessoa_nomeHelp">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    <?= form_close();   ?>
</div>

<?= $this->endSection() ?>

<?= $this->Section('scriptRodapé') ?>
<script src="<?= base_url("js/jquery.min.js") ?>"></script>
<script src="<?= base_url("js/owl.carousel.min.js") ?>"></script>
<script src="<?= base_url("js/script.js") ?>"></script>
<?= $this->endSection() ?>