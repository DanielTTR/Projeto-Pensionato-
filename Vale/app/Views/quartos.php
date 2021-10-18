<?= $this->extend('layouts') ?>

<?= $this->Section('scriptCabeçalho') ?>
<link rel="stylesheet" href="<?= base_url("assets/css/new_index.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/styles.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/owl/owl.carousel.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/owl/owl.theme.default.min.css") ?>">

<title>Document</title>

<?= $this->endSection() ?>

<?= $this->Section('corpoDocumento') ?>

      
<section>

    <?php foreach ($dadosConjunto as $conjuntos) { ?>
        <?php foreach ($conjuntos as $conjunto) { ?>

            <div class="m-5">
                <h1 class="nome-conjunto"><?php echo $conjunto->Nome_conjunto?></h1>
            </div>

        <?php }; ?>
    <?php }; ?>

    <?php foreach ($dadosQuarto as $quartos) { ?>
        <?php foreach ($quartos as $quarto) { ?>

            <div class="col-md-12 d-flex container-quartos">
                <div class="container-fluid m-3">
                    <img src="<?php echo $quarto->foto; ?>" alt="" class="img-fluid">
                </div>

                <div class="container-fluid m-3">
                    <h1 class="mb-4 m-3"><?php echo $quarto->nome; ?></h1>
                    <p class="m-3">Disponibilidade: <?php echo $quarto->disponibilidade; ?></p>
                    <p class="m-3">Descrição: <?php echo $quarto->descricao; ?></p>
                    <h3 class="m-3">Preço: <?php echo $quarto->preco; ?></h3>
                </div>
            </div>

        <?php }; ?>
    <?php }; ?>

</section>

<?= $this->endSection() ?>

<?= $this->Section('scriptRodapé') ?>
<script src="<?= base_url("assets/js/script.js") ?>"></script>
<script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
<script src="<?= base_url("assets/js/owl.carousel.min.js") ?>"></script>
<script src="<?= base_url("assets/js/script.js") ?>"></script>
<?= $this->endSection() ?>