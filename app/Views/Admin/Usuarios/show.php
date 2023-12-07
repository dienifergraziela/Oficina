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
                <span class="font-weight-bold">Nome:</span>
                <?php echo esc($usuario->nome); ?>
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Email:</span>
                <?php echo esc($usuario->email); ?>
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Cpf:</span>
                <?php echo esc($usuario->cpf); ?>
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Telefone:</span>
                <?php echo esc($usuario->telefone); ?>
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Ativo:</span>
                <?php echo esc($usuario->ativo ? 'Sim' : 'Não'); ?>
            </p>

            <p class="card-text">
                <span class="font-weight-bold">Perfil:</span>
                <?php echo esc($usuario->is_admin ? 'Administrador' : 'Mecânico'); ?>
            </p>

            <div class="mt-4">
                <a href="<?php echo site_url("admin/usuarios/editar/$usuario->id"); ?>"
                    class="btn btn-dark btn-sm mr-2">
                    Editar
                </a>

                <a href="<?php echo site_url("admin/usuarios/excluir/$usuario->id"); ?>"
                    class="btn btn-danger btn-sm mr-2">
                    Excluir
                </a>

                <a href="<?php echo site_url("admin/usuarios"); ?>"
                    class="btn btn-light text-dark btn-sm">
                    Voltar
                </a>
            </div>


        </div>


    </div>
</div>







<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<!-- aqui enviamos para o template principal os scripts -->

<?php echo $this->endSection(); ?>