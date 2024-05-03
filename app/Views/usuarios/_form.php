        <div class="form-group">
            <label class="form-control-label">Nome Completo</label>
            <input type="text" name="nome" placeholder="Insira seu nome completo" class="form-control" value="<?php echo esc($usuario->nome) ?>">
        </div>
        <div class="form-group">
            <label class="form-control-label">E-mail</label>
            <input type="email" name="email" placeholder="Insira seu E-mail de acesso" class="form-control" value="<?php echo esc($usuario->email) ?>">
        </div>
        <div class="form-group">
            <label class="form-control-label">Senha</label>
            <input type="password" name="senha" placeholder="Insira sua senha de acesso" class="form-control">
        </div>

        <div class="form-group">
            <label class="form-control-label">Confirme sua Senha</label>
            <input type="password" name="senha-confirmacao" placeholder="Confirme sua senha" class="form-control">
        </div>


        <div class="custom-control custom-checkbox">

            <input type="hidden" name="ativo" value="0">

            <input type="checkbox" name="ativo" <?php if ($usuario->ativo == true) : ?> checked <?php endif; ?> class="custom-control-input" id="ativo">
            <label for="" class="custom-control-label" cfor="ativo">Usuário ativo</label>

        </div>