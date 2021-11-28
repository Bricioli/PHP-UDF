<h1 class="display-6"><i class="fas fa-stream"></i> Editar Categoria</h1>
<?php
	$sql = "SELECT * FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_categoria" value="<?php print $row->id_categoria; ?>">
	<div class="form-floating mb-3">
		<input type="text" name="nome_categoria" value="<?php print $row->nome_categoria; ?>" class="form-control" id="floatingCategoria" placeholder="Categoria">
		<label for="floatingCategoria">Categoria</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-outline-danger">Enviar</button>
	</div>
</form>