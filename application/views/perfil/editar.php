<div class="col-md-12">
    <div class="card">
        <div class="card-header">Editar perfil
            <div style="float: right;">
                <a href="<?= base_url(); ?>perfil/" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Login</label>
                            <input class="form-control" type="text" name="login" value="<?= $user->login; ?>">
                        </div>
                        <div class="col-md-6">
                            <label>Nome</label>
                            <input class="form-control" type="text" name="nome" value="<?= $user->nome; ?>">
                        </div>
                         <div class="col-md-6">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?= $user->email; ?>">
                        </div>
                         <div class="col-md-6">
                            <label>Cidade</label>
                            <input class="form-control" type="text" name="cidade" value="<?= $user->cidade; ?>">
                        </div>
                         <div class="col-md-6">
                            <label>Bairro</label>
                            <input class="form-control" type="text" name="bairro" value="<?= $user->bairro; ?>">
                        </div>
                         <div class="col-md-6">
                            <label>Logradouro</label>
                            <input class="form-control" type="text" name="rua" value="<?= $user->rua; ?>">
                        </div>
                        <div class="col-md-6">
                            <label>Numero</label>
                            <input class="form-control" type="text" name="numero" value="<?= $user->numero; ?>">
                        </div>
                    </div>
                </div>

                </div>
                <input type="submit" class="btn btn-primary btn-block" name="alterar" value="Salvar">
            </form>
        </div>
    </div>
</div>