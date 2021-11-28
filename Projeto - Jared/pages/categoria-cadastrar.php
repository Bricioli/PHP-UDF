<h1 class="display-6"><i class="fas fa-stream"></i> Cadastrar categoria</h1>

<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-floating mb-3">
		<input type="text" name="nome_categoria" class="form-control" id="floatingCategoria" placeholder="Categoria">
		<label for="floatingCategoria">Categoria</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-outline-danger">Enviar</button>
	</div>
</form>