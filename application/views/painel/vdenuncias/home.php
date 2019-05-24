<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Lista de Denuncias</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-success" href="<?= base_url(); ?>painel/vdenuncias/inserir">Inserir</a>
    </div>
    <div style="clear: both;"></div>
</div>

<?= $this->conf->get_alertas(); ?>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Infração</th>
      <th>Denunciante</th>
      <th>Descrição</th>
      <th>Data</th>
      <th>Validações</th>
      <th>Operação</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Infração</th>
      <th>Denunciante</th>
      <th>Descrição</th>
      <th>Data</th>
      <th>Validações</th>
      <th>Operação</th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($denuncia as $n) { ?>
        <tr>
            <td><?= $n->den_id; ?></td>
            <td><?= $n->n1; ?></td>
            <td><?= $n->n2; ?></td>
            <td><?= $n->desc; ?></td>
            <td><?= $n->data; ?></td>
            <td><?= $n->likes; ?></td>
            <td>
            
               
                <a class="btn btn-info" href="<?= base_url(); ?>painel/vdenuncias/alterar/<?= $n->den_id; ?>">Vizualizar</a>

          
            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>