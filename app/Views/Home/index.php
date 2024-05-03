<?php $this->extend('layouts/principal') ?>


<?php echo $this->section('titulo') ?> <?php echo $titulo;?> <?php echo $this->endSection() ?>

<?php echo $this->section('estilos') ?> 
<!--Aqui coloco os estilos da view-->
<?php echo $this->endSection() ?>


<?php echo $this->section('conteudo') ?> 
<!--Aqui coloco os conteudos da view-->

<a href="<?php echo site_url("UsuariosController/index") ?>" class="btn btn-secondary ml-2">Ir para a listagem</a>


<?php echo $this->endSection() ?>





<?php echo $this->section('scripts') ?> 


<!--Aqui coloco os scripts da view-->
<?php echo $this->endSection() ?>