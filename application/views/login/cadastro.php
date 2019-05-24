<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastre-se</div>
        <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">Login</label>
                            <input class="form-control" type="text" name="login">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Senha</label>
                            <input class="form-control" type="password" name="senha">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Nome</label>
                            <input class="form-control" type="text" name="nome">
                        </div>

                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>

                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Cidade</label>
                            <input class="form-control" type="text" name="cidade">
                        </div>


                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Bairro</label>
                            <input class="form-control" type="text" name="bairro">
                        </div>

                                                <div class="col-md-6">
                            <label for="exampleInputPassword1">Rua</label>
                            <input class="form-control" type="text" name="rua">
                        </div>


                                                <div class="col-md-6">
                            <label for="exampleInputPassword1">Numero</label>
                            <input class="form-control" type="text" name="numero">
                        </div>

       

                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="cadastrar" value="Cadastrar">
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url(); ?>principal/logar">Voltar para página de login</a>
            </div>
        </div>
    </div>
</div>