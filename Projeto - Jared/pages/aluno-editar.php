<h1 class="display-6"><i class="far fa-user"></i> Editar Aluno</h1>
<?php
	$sql = "SELECT * FROM aluno WHERE id_aluno=".$_REQUEST["id_aluno"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();
?>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">

	<div class="row g-3 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="nome_aluno" value="<?php print $row->nome_aluno; ?>" class="form-control" id="floatingAluno" placeholder="Aluno">
				<label for="floatingAluno">Nome do aluno</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="email" name="email_aluno" value="<?php print $row->email_aluno; ?>" class="form-control" id="floatingEmail" placeholder="Email">
				<label for="floatingEmail">E-mail</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="fone_aluno" value="<?php print $row->fone_aluno; ?>" class="form-control" id="floatingTelefone" placeholder="Telefone">
				<label for="floatingTelefone">Numero de Telefone</label>
			</div>
		</div>
	</div>
	<div class="form-floating mb-3">
		<input type="text" name="end_aluno" value="<?php print $row->end_aluno; ?>" class="form-control" id="floatingEndereço" placeholder="Endereço">
		<label for="floatingEndereço">Endereço</label>
	</div>
	<div class="row g-2 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="date" name="nasc_aluno" value="<?php print $row->nasc_aluno; ?>" class="form-control" id="floatingNascimento" placeholder="Data de Nascimento">
				<label for="floatingAluno">Data de Nascimento</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating">
				<select class="form-select" name="genero_aluno" id="floatingSGenero" aria-label="Genero">
					<option selected>Genero</option>
					<option value="Masculino"
					<?php print($row->genero_aluno=="Masculino"?"selected":""); ?> >Masculino</option>
					<option value="Feminino"
					<?php print($row->genero_aluno=="Feminino"?"selected":""); ?> >Feminino</option>
					<option value="Outros"
					<?php print($row->genero_aluno=="Outros"?"selected":""); ?> >Outros</option>
				</select>
			<label for="floatingSGenero">Genero</label>
			</div>
 		</div>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-outline-danger">Enviar</button>
	</div>
</form>