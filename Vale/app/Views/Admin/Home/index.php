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

<div class="container mx-5 my-3">
    <h3>Registros</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Tipo de conjunto</th>
                <th>Nome do conjunto</th>
                <th>Foto</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Responsável</th>
                <th>Telefone</th>
                <th>Descricao</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($conjuntosDados as $conjunto) {
                foreach ($conjunto as $conjunto) {
                    echo "<tr>";
                    echo "<td>" . $conjunto->Conj_id . "</td>";
                    echo "<td>" . $conjunto->Tipo_conjunto . "</td>";
                    echo "<td>" . $conjunto->Nome_conjunto . "</td>";
                    echo "<td> <img src=" . $conjunto->Foto . " class=" . 'col-xl' . "></td>";
                    echo "<td>" . $conjunto->Rua . "</td>";
                    echo "<td>" . $conjunto->Bairro . "</td>";
                    echo "<td>" . $conjunto->Responsavel . "</td>";
                    echo "<td>" . $conjunto->Telefone . "</td>";
                    echo "<td>" . $conjunto->Descricao . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <a href="<?= base_url("Admin/Home/adiciona") ?>"><button type="button" class="btn btn-secondary">Adicionar</button></a>
</div>

<div class="container mx-5 my-3">
    <h3>Registros</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuariosDados as $usuario) {
                foreach ($usuario as $usuario) {
                    echo "<tr>";
                    echo "<td>" . $usuario->id . "</td>";
                    echo "<td>" . $usuario->nome . "</td>";
                    echo "<td>" . $usuario->email . "</td>";
                    echo "<td>" . $usuario->telefone . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <a href="<?= base_url("Admin/Usuarios/criar") ?>"><button type="button" class="btn btn-secondary">Adicionar</button></a>
</div>
<div class="container mx-5 my-3">
    <h3>Quartos</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Identificador-conjunto</th>
                <th>Nome</th>
                <th>Disponibilidade</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($quartosDados as $quarto) {
                foreach ($quarto as $quarto) {
                    echo "<tr>";
                    echo "<td>" . $quarto->quarto_id . "</td>";
                    echo "<td>" . $quarto->conj_id . "</td>";
                    echo "<td>" . $quarto->nome . "</td>";
                    echo "<td>" . $quarto->disponibilidade . "</td>";
                    echo "<td>" . $quarto->descricao . "</td>";
                    echo "<td>" . $quarto->preco . "</td>";
                    echo "<td> <img src=" . $quarto->foto . " class=" . 'col-xl' . "></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <a href="<?= base_url("Admin/Home/adicionaQuarto") ?>"><button type="button" class="btn btn-secondary">Adicionar</button></a>
</div>

<?= $this->endSection() ?>

<?= $this->Section('scriptRodapé') ?>
<script src="<?= base_url("js/jquery.min.js") ?>"></script>
<script src="<?= base_url("js/owl.carousel.min.js") ?>"></script>
<script src="<?= base_url("js/script.js") ?>"></script>
<?= $this->endSection() ?>