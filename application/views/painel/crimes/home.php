<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Lista de Infrações</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-success" href="<?= base_url(); ?>painel/crimes/inserir">Inserir</a>
    </div>
    <div style="clear: both;"></div>
</div>

<?= $this->conf->get_alertas(); ?>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Lei</th>
      <th>Descrição</th>
      <th>Operação</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Lei</th>
      <th>Descrição</th>
      <th>Operação</th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($crimes as $n) { ?>
        <tr>
            <td><?= $n->cri_id; ?></td>
            <td><?= $n->nome; ?></td>
            <td><?= $n->lei; ?></td>
            <td><?= $n->desc; ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url(); ?>painel/crimes/alterar/<?= $n->cri_id; ?>">Alterar</a>
                <a class="btn btn-danger" href="<?= base_url(); ?>painel/crimes/apagar/<?= $n->cri_id; ?>">Apagar</a>
            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>