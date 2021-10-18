<?= $this->extend('layouts') ?>

<?= $this->Section('scriptCabeçalho') ?>
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<link rel="stylesheet" href="<?= base_url("assets/css/contact.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/styles.css") ?>">

<title>Document</title>

<?= $this->endSection() ?>

<?= $this->Section('corpoDocumento') ?>

<body>
  <main>
    <div class="container-contact">
      <div class="contact-left">
        <h2>Contato</h2>
        <p>Está precisando de um aluguel com segurança ?? Entre em contato com a equipe para maiores informações. Estamos te esperando.</p>
        <table>
          <tbody>
            <tr>
              <td class="td-first">Endereço:</td>
              <td>Rua Do One Piece 155</td>
            </tr>
            <tr>
              <td class="td-first">Telefone:</td>
              <td>(32) 9 84099355
              </td>
            </tr>
            <tr>
              <td class="td-first">Email:</td>
              <td>vale@gmail.com
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="contact-right">
        <form action="https://gleidsoncamargosnet@gmail.com" method="POST">
          <input type="text" name="name" placeholder="Nome" required>
          <input type="text" name="email" placeholder="Email" required>
          <textarea placeholder="Mensagem" class="textarea" required></textarea>
          <button type="submit" class="btn-msg">Enviar</button>
        </form>

      </div>
    </div>
  </main>

  <?= $this->endSection() ?>

  <?= $this->Section('scriptRodapé') ?>
  <script src="<?= base_url("assets/js/script.js") ?>"></script>
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
  <script src="<?= base_url("assets/js/owl.carousel.min.js") ?>"></script>
  <script src="<?= base_url("assets/js/script.js") ?>"></script>
  <?= $this->endSection() ?>