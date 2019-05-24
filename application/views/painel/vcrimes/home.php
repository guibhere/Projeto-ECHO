<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Lista de Infrações</h1>
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

    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Lei</th>
      <th>Descrição</th>

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

            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>