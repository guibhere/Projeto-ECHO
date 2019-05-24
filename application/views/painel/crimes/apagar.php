<div class="jumbotron" style="padding: 10px;">
    <h1>Apagar Infração</h1>
</div>
<div class="row">
    <div class="col-md-12">
		<form action="" method="post">
			<div class="form-group"><label>Tem certeza que deseja apagar a Infração <?= $crimes->nome; ?> ? </label>
				<div class="form-row">
					<div class="col-md-6">
						<a class="form-control btn btn-primary btn-block" href="<?= base_url(); ?>painel/crimes">Cancelar</a>
					</div>
					<div class="col-md-6">
						<input class="form-control btn btn-danger btn-block" type="submit" name="apagar" value="Apagar">
					</div>
				</div>
			</div>
        </form>
    </div>
</div>