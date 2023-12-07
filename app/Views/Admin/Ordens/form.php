<div class="form-row">

    <div class="form-group col-md-4">
        <label for="dono">Dono</label>
        <input type="text" class="form-control" id="dono" name="dono" placeholder="Dono"
            value="<?php echo esc($ordem->dono); ?>">
    </div>

    <div class="form-group col-md-4">
        <label for="problema">Problema</label>
        <input type="text" class="form-control" id="problema" name="problema" placeholder="Problema"
            value="<?php echo esc($ordem->problema); ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="carro">Carro</label>
        <input type="text" class="form-control" id="carro" name="carro" placeholder="Carro"
            value="<?php echo esc($ordem->carro); ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="placa">Placa</label>
        <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa"
            value="<?php echo esc($ordem->placa); ?>">
    </div>

</div>

<div class="form-group col-md-3">

    <label for="email">Status do serviço</label>

    <select class="form-control" name="pronto" id="pronto">

        <?php if ($ordem->id): ?>
            <option value="1" <?php echo ($ordem->pronto ? 'selected' : ''); ?>>Sim </option>
            <option value="0" <?php echo (!$ordem->pronto ? 'selected' : ''); ?>>Não</option>
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

<a href="<?php echo site_url("admin/ordens/show/$ordem->id"); ?>" class="btn btn-light text-dark btn-sm">
    <i class="mdi mdi-arrow-left btn-icon-prepend"></i>
    Voltar
</a>