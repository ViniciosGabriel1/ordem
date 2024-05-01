<?php $this->extend('layouts/principal') ?>


<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>

<?php echo $this->section('estilos') ?>
<!--Aqui coloco os estilos da view-->
<?php echo $this->endSection() ?>


<?php echo $this->section('conteudo') ?>
<!--Aqui coloco os conteudos da view-->

<div class="row">
    <div class="col-lg-4">
        <div class="block">
            <div class="text-center">
                <?php if ($usuario->imagem == null) : ?>

                    <img src="<?php echo site_url('recursos/img/user_sem_imagem.png'); ?>" class="card-img-top" style="width: 90%; " alt="<?php echo esc($usuario->nome) ?>  sem foto">

                <?php else : ?>

                    <img src="<?php echo site_url("usuarios/imagem/$usuario->imagem"); ?>" class="card-img-top" style="width: 90%; " alt="<?php echo esc($usuario->nome) ?>. sem foto">


                <?php endif; ?>

                <a href="<?php echo site_url("UsuariosController/editarImagem/$usuario->id") ?>" class="btn btn-outline-primary btn-sm mt-3">Alterar Imagem</a>

            </div>
            <hr class="border-primary">


            <h5 class="card-title mt-2 "><?php echo esc($usuario->id) ?></h5>

            <h5 class="card-title mt-2 "><?php echo esc($usuario->nome) ?></h5>
            <p class="card-title mt-2 "><?php echo esc($usuario->email) ?></p>

            <p class="card-text"> Criado  <?php echo $usuario->criado_em->humanize(); ?></p>
            <p class="card-text"> Atualizado  <?php echo $usuario->atualizado_em->humanize(); ?></p>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url("UsuariosController/editar/$usuario->id"); ?>">Editar Usuário</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>

                </div>
                <a href="<?php echo site_url('UsuariosController') ?>" class="btn btn-secondary ml-2">Voltar</a>

            </div> <!-- Block -->



        </div>

    </div>
    <?php echo $this->endSection() ?>



    <?php echo $this->section('scripts') ?>


    <!--Aqui coloco os scripts da view-->
    <?php echo $this->endSection() ?>