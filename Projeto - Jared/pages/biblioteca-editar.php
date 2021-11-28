<h1 class="display-6"><i class="far fa-bookmark"></i> Editar Biblioteca</h1>
<?php
	$sql = "SELECT * FROM biblioteca WHERE id_biblioteca=".$_REQUEST["id_biblioteca"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=biblioteca-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_biblioteca" value="<?php print $row->id_biblioteca; ?>">
	<div class="row g-2">
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="nome_biblioteca" value="<?php print $row->nome_biblioteca; ?>"class="form-control" id="floatingBiblioteca" placeholder="Biblioteca">
				<label for="floatingBiblioteca">Biblioteca</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="end_biblioteca" value="<?php print $row->end_biblioteca; ?>" class="form-control" id="floatingEndereço" placeholder="Endereço">
				<label for="floatingEndereço">Endereço</label>
			</div>
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-outline-danger">Enviar</button>
		</div>
	</div>
</form>