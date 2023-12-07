<?php echo $this->extend('Admin/layout/principal'); ?>


<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<!-- aqui enviamos para o template principal os estilos -->
<?php echo $this->endSection(); ?>


<?php echo $this->section('conteudo'); ?>


<div class="col-lg-12 grid-margin stretch-card">

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                <form class="forms-sample">

                    <?php echo $this->include('Admin/Usuarios/form'); ?>

                </form>


            </div>
        </div>
    </div>




</div>







<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<!-- aqui enviamos para o template principal os scripts -->

<?php echo $this->endSection(); ?>