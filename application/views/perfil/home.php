<div class="row">
    <div class="col-md-12">
        <?= $this->conf->get_alertas(); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Perfil
                <div style="float: right;">
                    <a href="<?= base_url(); ?>perfil/editar/" class="btn btn-primary">Editar meu perfil</a>
                </div>
            </div>
            <div class="card-body">
                <b>Login:</b> <?= $user->login; ?><br>
                <b>Email:</b> <?= $user->email; ?><br>
                <b>Nome:</b> <?= $user->nome; ?><br>
                <b>Cidade:</b> <?= $user->cidade; ?><br>
                <b>Logradouro:</b> <?= $user->rua; ?><br>
                <b>Bairro:</b> <?= $user->bairro; ?><br>
                <b>Numero:</b> <?= $user->numero; ?><br>
            </div>
        </div>
    </div>
</div>