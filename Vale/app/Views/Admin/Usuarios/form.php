<div class="form-row">

    <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= old('nome', esc($usuario->nome)); ?>" >
    </div>

    <div class="form-group col-md-2">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control cpf" id="cpf" name="cpf" value="<?= old('cpf', esc($usuario->cpf)); ?>" >
    </div>
    <div class="form-group col-md-3">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control sp_celphones" id="telefone" name="telefone" value="<?= old('telefone', esc($usuario->telefone)); ?>" >
    </div>


    <div class="form-group col-md-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= old('email', esc($usuario->email)); ?>" >
    </div>


</div>
<div class="form-row" >

    <div class="form-grup col-md-3">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group col-md-3">
        <label for="confirmation_password">Confirmação de senha</label>
        <input type="password" class="form-control" id="confirmation_password" name="password_confirmation" >
    </div>
    <div class="form-group col-md-3">
        <label for="email">Perfil de acesso</label>
        <select class="form-control" name="is_admin">
            <?php if ($usuario->id): ?>
                <option value="1"<?= set_select('is_admin', '1'); ?> <?php echo($usuario->is_admin ? 'selected' : '') ?>>Administrador</option> 
                <option value="0"<?= set_select('is_admin', '0'); ?> <?php echo(!$usuario->is_admin ? 'selected' : '') ?>>Cliente</option> 
            <?php else: ?>
                <option value="1"<?= set_select('is_admin', '1'); ?>>Sim</option> 
                <option value="0"<?= set_select('is_admin', '0'); ?> selected="">Não</option> 
            <?php endif; ?>
        </select>

    </div>
    <div class="form-group col-md-3">
        <label for="email">Ativo</label>
        <select class="form-control" name="ativo">
            <?php if ($usuario->id): ?>
                <option value="1"<?= set_select('ativo', '1'); ?> <?php echo($usuario->ativo ? 'selected' : '') ?> >Sim</option> 
                <option value="0"<?= set_select('ativo', '0'); ?> <?php echo(!$usuario->ativo ? 'selected' : '') ?> >Não</option> 
            <?php else: ?>
                <option value="1"<?= set_select('ativo', '1'); ?>>Sim</option> 
                <option value="0"<?= set_select('ativo', '0'); ?> selected="">Não</option> 
            <?php endif; ?>
        </select>

    </div>


</div>






<button type = "submit" class = "btn btn-primary mr-2 btn-sm">
    <i class = "mdi mdi-checkbox-marked-circle btn-icon-prepend"> </i>
    Salvar
</button>

