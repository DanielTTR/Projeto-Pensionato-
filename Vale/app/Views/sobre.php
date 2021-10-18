<?= $this->extend('layouts') ?>

<?= $this->Section('scriptCabeçalho') ?>
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<link rel="stylesheet" href="<?= base_url("assets/css/about.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/styles.css") ?>">

<title>Document</title>

<?= $this->endSection() ?>

<?= $this->Section('corpoDocumento') ?>

<main>
        <section class="container-about">

            <div class="about-left">
                <img src="<?= base_url("assets/imagens/quarto.jpeg")?>" alt="">
            </div>

            <div class="about-right">
                <h2>Sobre</h2>
                <p>Quarto bem localizado na região da cidade com um preço atrativo, venha nos conhecer !!!</p>
                

            </div>
        </section>
        <h1>Participantes</h1>
        <section class="container-time">
            <div class="card-container-time">
            <img class="image" src="<?= base_url("assets/imagens/angela.png")?>" alt="image">
                <div class="card-descricao-time">
                    <h2>Angela Leite</h2>
                    <p>Estudante em Análise e Desenvolvimento De Sistemas no Instituto Federal do Norte De Minas Gerais - Campus Araçuaí.
                    </p>
                    <p class="read-more"> <a href="https://www.instagram.com/leite2711/" target="_blank" >Read More <i class="fas fa-arrow-right"></i>

                        </a> </p>
                </div>
            </div>
            <div class="card-container-time">
                <img class="image" src="<?= base_url("assets/imagens/daniel.png")?>" alt="image">
                <div class="card-descricao-time">
                    <h2>Daniel Rodrigues</h2>
                    <p>Estudante em Análise e Desenvolvimento De Sistemas no Instituto Federal do Norte De Minas Gerais - Campus Araçuaí.
                    </p>
                    <p class="read-more"> <a href="https://www.linkedin.com/in/daniel-rodrigues-ramalho-998456220/" target="_blank" >Read More <i class="fas fa-arrow-right"></i>

                        </a> </p>
                </div>
            </div>
            <div class="card-container-time">
                <img class="image" src="<?= base_url("assets/imagens/genilson.png")?>" alt="image">
                <div class="card-descricao-time">
                    <h2>Genilson Rocha</h2>
                    <p>Estudante em Análise e Desenvolvimento De Sistemas no Instituto Federal do Norte De Minas Gerais - Campus Araçuaí.
                    </p>
                    <p class="read-more"> <a href="https://www.linkedin.com/in/genilson-rocha-brito-37b618125/" target="_blank" >Read More <i class="fas fa-arrow-right"></i>

                        </a> </p>
                </div>
            </div>
            <div class="card-container-time">
                <img class="image" src="<?= base_url("assets/imagens/matheus.jpeg")?>" alt="image">   
                <div class="card-descricao-time">
                    <h2>Matheus Alves</h2>
                    <p>Estudante em Análise e Desenvolvimento De Sistemas no Instituto Federal do Norte De Minas Gerais - Campus Araçuaí.
                    </p>
                    <p class="read-more"> <a href="https://github.com/MatheusAlvesPereiraRosa" target="_blank" >Read More <i class="fas fa-arrow-right"></i>

                        </a> </p>
                </div>
            </div>
            <div class="card-container-time">
                <img class="image" src="<?= base_url("assets/imagens/gleidson.png")?>" alt="image">
                <div class="card-descricao-time">
                    <h2>Gleidson Camargos</h2>
                    <p>Estudante em Análise e Desenvolvimento De Sistemas no Instituto Federal do Norte De Minas Gerais - Campus Araçuaí.
                    </p>
                    <p class="read-more">
                        <a href="https://www.linkedin.com/in/gleidson-junio/" target="_blank" >Read More <i class="fas fa-arrow-right"></i>
                        </a> </p>
                </div>
            </div>
            <div class="card-container-time">
                <img class="image" src="<?= base_url("assets/imagens/tomas.jpg")?>" alt="image">
                <div class="card-descricao-time">
                    <h2>Tomás Fernandes</h2>
                    <p>Estudante em Análise e Desenvolvimento De Sistemas no Instituto Federal do Norte De Minas Gerais - Campus Araçuaí.
                    </p>
                    <p class="read-more"> <a href="https://www.linkedin.com/in/tcarvalhais17/" target="_blank" >Read More <i class="fas fa-arrow-right"></i>

                        </a> </p>
                </div>
            </div>


        </section>
    </main>

  <?= $this->endSection() ?>

  <?= $this->Section('scriptRodapé') ?>
  <script src="<?= base_url("assets/js/script.js") ?>"></script>
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
  <script src="<?= base_url("assets/js/owl.carousel.min.js") ?>"></script>
  <script src="<?= base_url("assets/js/script.js") ?>"></script>
  <?= $this->endSection() ?>