<?php $this->extend('layouts/principal') ?>


<?php echo $this->section('titulo') ?> <?php echo $titulo;?> <?php echo $this->endSection() ?>

<?php echo $this->section('estilos') ?> 
<!--Aqui coloco os estilos da view-->
<?php echo $this->endSection() ?>


<?php echo $this->section('conteudo') ?> 
<!--Aqui coloco os conteudos da view-->
<?php echo $this->endSection() ?>



<?php echo $this->section('scripts') ?> 


<!--Aqui coloco os scripts da view-->
<?php echo $this->endSection() ?>