<?php echo $this->extend('Admin/layout/principal'); ?>


<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<!-- aqui enviamos para o template principal os estilos -->
<?php echo $this->endSection(); ?>


<?php echo $this->section('conteudo'); ?>


<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-header bg-primary pb-0 pt-4">
            <h4 class="card-title text-white">
                <?php echo esc($titulo); ?>
            </h4>
        </div>
        <div class="card-body">

            <p class="card-text">
                <span class="font-weight-bold">Dono:</span>
                <?php echo esc($ordem->dono); ?>
                <input type="text" class="form-control" id="dono" name="dono" placeholder="Dono"
                    value="<?php echo esc($ordem->dono); ?>">
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Problema:</span>
                <?php echo esc($ordem->problema); ?>
                <input type="text" class="form-control" id="problema" name="problema" placeholder="Problema"
                    value="<?php echo esc($ordem->problema); ?>">
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Custo:</span>
                <?php echo esc($ordem->custo); ?>
                <input type="text" class="form-control" id="custo" name="custo" placeholder="Custo"
                    value="<?php echo esc($ordem->custo); ?>">
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Carro:</span>
                <?php echo esc($ordem->carro); ?>
                <input type="text" class="form-control" id="carro" name="carro" placeholder="Carro"
                    value="<?php echo esc($ordem->carro); ?>">
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Placa:</span>
                <?php echo esc($ordem->placa); ?>
                <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa"
                    value="<?php echo esc($ordem->placa); ?>">
            </p>

            <label for="email">Status do serviço - pronto?</label>

            <select class="form-control" name="pronto" id="pronto">

                <?php if ($ordem->id): ?>
                    <option value="1" <?php echo ($ordem->pronto ? 'selected' : ''); ?>>Sim </option>
                    <option value="0" <?php echo (!$ordem->pronto ? 'selected' : ''); ?>>Não</option>
                <?php else: ?>
                    <option value=" 1">Sim</option>
                    <option value="0" Selected="">Não</option>
                <?php endif; ?>

            </select>

            <button type="submit" class="btn btn-primary mr-2 btn-sm mt-4">
                <i class="mdi mdi-checkbox-marked-circle btn-icon-prepend"></i>
                Salvar
            </button>

            <a href="<?php echo site_url("admin/ordens"); ?>" class="btn btn-light text-dark btn-sm mt-4">
                <i class="mdi mdi-arrow-left btn-icon-prepend"></i>
                Voltar
            </a>


        </div>


    </div>
</div>







<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<!-- aqui enviamos para o template principal os scripts -->

<?php echo $this->endSection(); ?>