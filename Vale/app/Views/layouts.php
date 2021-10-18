<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <!-- Estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
        <!-- Parallax -->

        <?= $this->renderSection('scriptCabeçalho') ?>
    </head>

    <body>
        <header>
            <div class="container" id="nav-container">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <img id="logo" src="<?= base_url("assets/imagens/logo.png") ?>" alt="Vale Moradia"> Vale Moradia
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" id="inicio-menu" href="<?= base_url('/') ?>">Inicio</span></a>
                            <a class="nav-item nav-link" id="contato-menu" href="<?= base_url('Home/contato') ?>">Contato</a>
                            <a class="nav-item nav-link" id="sobre-menu" href="<?= base_url('Home/sobre') ?>">Sobre</a>


                            <?php if (usuario_logado()): ?>
                                <a class="nav-item nav-link" id="-menu" href="<?= base_url('Login/logout') ?>">LOGOUT</a>
                            <?php else: ?>
                                <a class="nav-item nav-link" id="-menu" href="<?= base_url('Login/novo') ?>">LOGIN</a>
                                <a class="nav-item nav-link" id="-menu" href="<?= base_url('Registrar/novo') ?>">Registre-se</a>

                            <?php endif; ?>

                        </div>
                    </div>
                </nav>
            </div>

        </header>

        <?= $this->renderSection('corpoDocumento') ?>
        <footer>
        <div class="container-footer">
            <div class="footer-left">
                <div class="container-left">
                    <div class="logo">
                        <a href="#">
                            <h2>VALE MORADIA</h2>
                        </a>
                    </div>
                    <p>Facilitando a vida de jovens estudantes <br>
                        A encontrarem um lar academico.
                    </p>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-google-plus-g"></i> </a>
                        <a href=""><i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="footer-center">
                <div class="contact">
                    <h6>CONTACT US</h6>
                    <ul>
                        <li> vale@gmail.com</li>
                        <li> (32) 9 84099355</li>
                        <li> Rua Do One Piece 155</li>
                        <li> BRASIL</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>

</html>

<?= $this->renderSection('scriptRodapé') ?>