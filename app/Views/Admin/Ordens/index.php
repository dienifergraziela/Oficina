<?php echo $this->extend('Admin/layout/principal'); ?>


<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('estilos'); ?>
<!-- aqui enviamos para o template principal os estilos -->
<link rel="stylesheet" href="<?php echo site_url('/admin/vendors/auto-complete/jquery-ui.css'); ?>" />
<?php echo $this->endSection(); ?>


<?php echo $this->section('conteudo'); ?>


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <?php echo $titulo; ?>
            </h4>

            <div class="ui-widget">
                <input id="query" name="query" class="form-control bg-light mb-5">
            </div>

            <a href="<?php echo site_url("admin/ordens/criar"); ?>" class="btn btn-success float-right">
                <i class="mdi mdi-plus btn-icon-prepend"></i>
                Cadastrar
            </a>



            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>
                                Id
                            </th>
                            <th>
                                Dono
                            </th>
                            <th>
                                Problema
                            </th>
                            <th>
                                Custo
                            </th>
                            <th>
                                Carro
                            </th>
                            <th>
                                Placa
                            </th>
                            <th>
                                Pronto
                            </th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($ordens as $ordem): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo site_url("admin/ordens/show/$ordem->id"); ?>">
                                        <?php echo $ordem->id; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php echo $ordem->dono; ?>
                                </td>
                                <td>
                                    <?php echo $ordem->problema; ?>
                                </td>
                                <td>
                                    <?php echo $ordem->custo; ?>
                                </td>

                                <td>
                                    <?php echo $ordem->carro; ?>
                                </td>

                                <td>
                                    <?php echo $ordem->placa; ?>
                                </td>
                                <td>
                                    <?php echo ($ordem->pronto ? '<label>Sim</label>' : '<label>Não</label>'); ?>
                                </td> <!-- <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td> -->
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







<?php echo $titulo; ?>
<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<!-- aqui enviamos para o template principal os scripts -->
<script src="<?php echo site_url('/admin/vendors/auto-complete/jquery-ui.js'); ?>"></script>

<script>
    // $(function () {
    //     $("#query".autocomplete({
    //         source: function (request, response) {
    //             $.ajax({
    //                 url: "",
    //             });
    //         },************ aula 32 aqui**************
    //     }));
    // });
</script>
<?php echo $this->endSection(); ?>