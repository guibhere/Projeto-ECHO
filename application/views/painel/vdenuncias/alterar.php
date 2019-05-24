<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Vizualizar Denuncia</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>painel/vdenuncias">Voltar</a>

    </div>
    <div style="clear: both;"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
                <div class="card-body">
                <b>Descrição:</b> <?= $denuncia->desc; ?><br>
                <b>Infração:</b> <?= $denuncia->n1; ?><br>
                <b>Denuciante:</b> <?= $denuncia->n2; ?><br>
                <b>Cidade:</b> <?= $denuncia->cidade; ?><br>
                <b>Bairro:</b> <?= $denuncia->rua; ?><br>
                <b>Rua:</b> <?= $denuncia->bairro; ?><br>
                <b>Numero:</b> <?= $denuncia->numero; ?><br>
                <b>Referencia:</b> <?= $denuncia->ref; ?><br>
                <b>Data:</b> <?= $denuncia->data; ?><br>
                <b>Status:</b> <?= $denuncia->status; ?><br>
                 </div>

                        
  

            </div>
             <input type="submit" name="curtir" class="btn btn-success btn-block" value="Validar">
            
        </form>
       
    </div>
</div>