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


<script>
    $(document).ready(function(){
        $("#form").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url:'<?php echo site_url('UsuariosController/atualizar');?>',
                data: new FormData(this),
                dataType:'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                    $('#reponse').html('');
                    $('#btn-salvar').val('Por favor aguarde...');

                },
                success: function(response){
                    $('#btn-salvar').val('Salvar');
                    $('#btn-salvar').removeAttr("disabled");
                    $('[name=csrf_ordem]').val(response.token);



                    if(!response.erro ){

                        if(response.info){

                            $('#response').html('<div class="alert alert-primary">'+ response.info+'</div>');

                        }else{
                            //Tudo certo com a aatualização e podemos redirecioná-lo
                            window.location.href= "<?php echo site_url("UsuariosController/exibir/$usuario->id")?>";
                        }
                    }else{

                        //Erros de validação

                    }

                },
                error:function(){
                    alert('Não foi possivel processar a solicitação!');
                    $('#btn-salvar').val('Salvar');
                    $('#btn-salvar').removeAttr("disabled");

                }
            });


        });
    });

</script>

<?php echo $this->endSection() ?>