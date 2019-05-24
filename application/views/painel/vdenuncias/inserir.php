<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Realizar Denuncia</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>vdenuncias">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">


               
            <label>Descrição:</label>
            <input class="form-control" type="text" name="desc">
             
            
            <label>Data:</label>
            <input class="form-control" type="date" name="data">

            <label>Cidade:</label>
            <input class="form-control" type="text" name="cidade">

            <label>Bairro:</label>
            <input class="form-control" type="text" name="bairro">

            <label>Rua:</label>
            <input class="form-control" type="text" name="rua">

            <label>Numero:</label>
            <input class="form-control" type="text" name="numero">   
            
            
            <label>Referencia:</label>
            <input class="form-control" type="text" name="ref">

           <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                        <label>Infração</label>
                        <select class="form-control" name="crime_id">
                        <?php 
                        foreach ($crimes as $n) { 
                        if($n->cri_id == $denuncia->crime_id){
                            echo "<option value=\"".$n->cri_id."\" selected>".$n->nome."</option>";
                        }else{
                            echo "<option value=\"".$n->cri_id."\">".$n->nome."</option>";
                        }
                        }
                        ?>
                        </select> 
                </div>
            </div>
        </div>
          </div>
            <input type="submit" name="inserir" class="btn btn-success btn-block" value="Salvar">
        </div>
        </form>
    </div>
</div>