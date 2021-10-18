<?= $this->extend('layouts') ?>

<?= $this->Section('scriptCabeçalho') ?>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <link rel="stylesheet" href="<?= base_url("assets/css/styles.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/css/new_index.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/css/owl/owl.carousel.min.css") ?>">
  <link rel="stylesheet" href="<?= base_url("assets/css/owl/owl.theme.default.min.css")?>">

<title>Document</title>

<?= $this->endSection() ?>

<?= $this->Section('corpoDocumento') ?>
<section class="section-moradias">
  
  <?php foreach ($conjuntos as $conjunto) {
  ?>
  <div class="container-moradia">
    <h3><?php echo $conjunto->Nome_conjunto;?></h3>
    <div class="carrousel">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="<?php echo $conjunto->Foto;?>" alt="">
        </div>
        <div class="item">
          <img src="<?php echo $conjunto->Foto;?>" alt="">
        </div>
        <div class="item">
          <img src="<?php echo $conjunto->Foto;?>" alt="">
        </div>
      </div>
    </div>
    <div class="container-info">
      <table>
        <tbody>
          <tr>
            <td class="td-first">Tipo:</td>
            <td><?php echo $conjunto->Tipo_conjunto;?>
            </td>
          </tr>
          <tr>
            <td class="td-first">Responsável:</td>
            <td><?php echo $conjunto->Responsavel;?>
            </td>
          <tr>
            <td class="td-first">Quartos:</td>
            <td><?= $conjunto->CONTADOR;?></td>
          </tr>
          <tr>
            <td class="td-first">Bairro:</td>
            <td><?php echo $conjunto->Bairro;?>
            </td>
          </tr>
          <tr>
            <td class="td-first">Rua:</td>
            <td><?php echo $conjunto->Rua;?>
            </td>
          </tr>
          <tr>
            <td class="td-first">Telefone:</td>
            <td><?php echo $conjunto->Telefone;?>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="descricao">
        <h4>Descrição</h4>
        <p><?php echo $conjunto->Descricao;?>
        </p>

        <p><a href="<?=base_url("Home/quartos?Conj_id=$conjunto->Conj_id")?>">Ver quartos</a></p>
        
      </div>
    </div>
  </div>
  <?php 
  }
  ?>
</section>

<?= $this->endSection() ?>

<?= $this->Section('scriptRodapé') ?>
<script src="<?= base_url("assets/js/jquery.min.js")?>"></script>
<script src="<?= base_url("assets/js/owl.carousel.min.js")?>"></script>
<script src="<?= base_url("assets/js/script.js")?>"></script>
<?= $this->endSection() ?>