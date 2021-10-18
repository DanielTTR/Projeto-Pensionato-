<h1><?= esc($usuario->nome) ?> Agora falta muito pouco!</h1>

<p>Clique no link abaixo para ativar a sua conta e aproveitar os nossos serviços</p>


<p>
    <a href="<?= site_url('registrar/ativar/' . $usuario->token); ?>">Ativar minha conta</a>
       </p>