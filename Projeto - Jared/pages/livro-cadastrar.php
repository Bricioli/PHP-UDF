<h1 class="display-6"><i class="fas fa-book"></i> Cadastrar Livro</h1>
<form action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="row g-2 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="titulo_livro" class="form-control" id="floatingTitulo" placeholder="Titulo">
				<label for="floatingTitulo">Titulo</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="autor_livro" class="form-control" id="floatingAutor" placeholder="Autor">
				<label for="floatingAutor">Autor</label>
			</div>
		</div>
	</div>
	<div class="row g-3 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="editora_livro" class="form-control" id="floatingEditora" placeholder="Editora">
				<label for="floatingEditora">Editora</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="edicao_livro" class="form-control" id="floatingEdição" placeholder="Edição">
				<label for="floatingEdição">Edição</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="ano_livro" class="form-control" id="floatingAno" placeholder="Ano">
				<label for="floatingAno">Ano</label>
			</div>
		</div>
	<div class="row g-2">
			<div class="col-md">
				<div class="form-floating">
					<input type="text" name="localidade_livro" class="form-control" id="floatingLocalidadelivro" placeholder="Localidade do livro">
					<label for="floatingLocalidadelivro">Localidade do livro</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<select name="categoria_id_categoria" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
						<option selected>Selecione a categoria</option>
						<?php
							$sql = "SELECT * FROM categoria";
							$res = $conn->query($sql) or die($conn->error);
							if($res->num_rows > 0){
								while($row = $res->fetch_object()){
									print "<option value='".$row->id_categoria."'>";
									print $row->nome_categoria."</option>";
								}
							}else{
								print "<option>Não há categorias cadastradas</option>";
							}
						?>
					</select>
					<label for="floatingSelectGrid">categoria</label>
				</div>
			</div>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-outline-danger">Enviar</button>
	</div>
</form>