<div class="form-row">

    <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
            value="<?php echo esc($usuario->nome); ?>">
    </div>

    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email"
            value="<?php echo esc($usuario->email); ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="cpf">Cpf</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf"
            value="<?php echo esc($usuario->cpf); ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"
            value="<?php echo esc($usuario->telefone); ?>">
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>

</div>

<div class="form-group col-md-3">

    <label for="email">Perfil de acesso</label>

    <select class="form-control" name="id_admin" id="is_admin">

        <?php if ($usuario->id): ?>
            <option value="1" <?php echo ($usuario->is_admin ? 'selected' : ''); ?>>Administrador </option>
            <option value="0" <?php echo (!$usuario->is_admin ? 'selected' : ''); ?>>Mecânico</option>
        <?php else: ?>
            <option value=" 1">Sim</option>
            <option value="0" Selected="">Não</option>
        <?php endif; ?>

    </select>

</div>









<div class="form-group col-md-3">

    <label for="email">Ativo</label>

    <select class="form-control" name="ativo" id="ativo">

        <?php if ($usuario->id): ?>
            <option value="1" <?php echo ($usuario->ativo ? 'selected' : ''); ?>>Sim</option>
            <option value="0" <?php echo (!$usuario->ativo ? 'selected' : ''); ?>>Não</option>
        <?php else: ?>
            <option value=" 1">Sim</option>
            <option value="0" Selected="">Não</option>
        <?php endif; ?>

    </select>

</div>




<div class="form-check form-check-flat form-check-primary">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        Remember me
    </label>
</div>


<button type="submit" class="btn btn-primary mr-2 btn-sm">
    <i class="mdi mdi-checkbox-marked-circle btn-icon-prepend"></i>
    Salvar
</button>

<a href="<?php echo site_url("admin/usuarios/show/$usuario->id"); ?>" class="btn btn-light text-dark btn-sm">
    <i class="mdi mdi-arrow-left btn-icon-prepend"></i>
    Voltar
</a>