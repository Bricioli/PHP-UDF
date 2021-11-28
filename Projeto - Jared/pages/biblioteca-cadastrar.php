<h1 class="display-6"><i class="far fa-bookmark"></i> Cadastrar Biblioteca</h1>
<form action="?page=biblioteca-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
		<div class="row g-2">
			<div class="col-md">
				<div class="form-floating">
					<input type="text" name="nome_biblioteca" class="form-control" id="floatingBiblioteca" placeholder="Biblioteca">
					<label for="floatingBiblioteca">Biblioteca</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="text" name="end_biblioteca" class="form-control" id="floatingEndereço" placeholder="Endereço">
					<label for="floatingEndereço">Endereço</label>
				</div>
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-outline-danger">Enviar</button>
			</div>
		</div>
</form>