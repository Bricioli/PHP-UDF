<h1 class="display-6"><i class="far fa-user mb-3"></i> Cadastrar Aluno</h1>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="row g-3 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="nome_aluno" class="form-control" id="floatingAluno" placeholder="Aluno">
				<label for="floatingAluno">Nome do aluno</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="email" name="email_aluno" class="form-control" id="floatingEmail" placeholder="Email">
				<label for="floatingEmail">E-mail</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="fone_aluno" class="form-control" id="floatingTelefone" placeholder="Telefone">
				<label for="floatingTelefone">Numero de Telefone</label>
			</div>
		</div>
	</div>
	<div class="form-floating mb-3">
		<input type="text" name="end_aluno" class="form-control" id="floatingEndereço" placeholder="Endereço">
		<label for="floatingEndereço">Endereço</label>
	</div>
	<div class="row g-2 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="date" name="nasc_aluno" class="form-control" id="floatingNascimento" placeholder="Data de Nascimento">
				<label for="floatingAluno">Data de Nascimento</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<select class="form-select" name="genero_aluno" id="floatingSGenero" aria-label="Genero">
					<option selected>Genero</option>
					<option value="Masculino">Masculino</option>
					<option value="Feminino">Feminino</option>
					<option value="Outros">Outros</option>
				</select>
			<label for="floatingSGenero">Genero</label>
			</div>
 		</div>
	</div>
	<div class="mb-3">
			<button type="submit" class="btn btn-outline-danger mt-3">Enviar</button>
		</div>
</form>