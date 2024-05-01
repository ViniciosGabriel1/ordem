<?php $this->extend('layouts/principal') ?>


<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>

<?php echo $this->section('estilos') ?>
<!--Aqui coloco os estilos da view-->

<link href="https://cdn.datatables.net/v/bs4/dt-2.0.5/r-3.0.2/datatables.min.css" rel="stylesheet">
 
<?php echo $this->endSection() ?>


<?php echo $this->section('conteudo') ?>
<!--Aqui coloco os conteudos da view-->


<div class="row">
    <div class="col-lg-12">
        <div class="block">
            <div class="table-responsive">
                <table id ="ajaxTable" class="table table-striped table-sm" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Situação</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>

</div>
</div>
<?php echo $this->endSection() ?>



<?php echo $this->section('scripts') ?>
<!--Aqui coloco os scripts da view-->

<script src="https://cdn.datatables.net/v/bs4/dt-2.0.5/r-3.0.2/datatables.min.js"></script>
<script>
     $(document).ready(function() {
        $('#ajaxTable').DataTable({

            ajax: '<?php echo site_url('UsuariosController/recuperausuarios'); ?>',
            columns: [{
                    data: 'imagem'
                },
                {
                    data: 'nome'
                },
                {
                    data: 'email'
                },
                {
                    data: 'ativo'
                },
            ],
            "deferRender":true,
            "processing":true,
        //     language: {
        //     "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        // },
        "responsive": true,
        "pagingType": $(window).width() < 768 ? "simple" : "simple_numbers"
        });
    });
</script>



<?php echo $this->endSection() ?>