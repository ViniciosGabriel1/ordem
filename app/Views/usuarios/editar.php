<?php $this->extend('layouts/principal') ?>


<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>

<?php echo $this->section('estilos') ?>
<!--Aqui coloco os estilos da view-->
<?php echo $this->endSection() ?>


<?php echo $this->section('conteudo') ?>
<!--Aqui coloco os conteudos da view-->

<div class="row">

    <div class="col-lg-6">

        <div class="block">

            <div class="block-body">

                <div id="response">

                </div>

                <?php echo form_open('/', ['id' => 'form'], ['id' => "$usuario->id"]);?>
            
                
                <?php echo $this->include('usuarios/_form')?>


                <div class="form-group mt-5 mb-4">

                    <input type="submit" id="btn-salvar" value="Salvar" class="btn btn-danger mr-2">
                    <a href="<?php echo site_url("UsuariosController/exibir/$usuario->id") ?>" class="btn btn-secondary ml-2">Voltar</a>

                </div>

                <?php echo form_close();?>
            </div>


        </div> <!-- Block -->

    </div>

</div>
<?php echo $this->endSection() ?>



<?php echo $this->section('scripts') ?>


<!--Aqui coloco os scripts da view-->
<?php echo $this->endSection() ?>