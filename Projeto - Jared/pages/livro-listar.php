<h1 class="display-6"><i class="fas fa-book"></i> Listar Livro</h1>
<div class="row">
	<div class="col-lg-12">
		<form action="?page=livro-listar" class="row g-2 float-end" method="POST">
			<div class="col-auto">
				<input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar...">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-outline-danger">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</form>
	</div>
</div>
<?php	
	if(empty($_REQUEST["pesquisa"])){
		$sql = "SELECT * FROM livro AS a
		INNER JOIN categoria AS b
		ON b.id_categoria = a.categoria_id_categoria";
	}else{
		$sql = "SELECT * FROM livro AS a
		INNER JOIN categoria AS b
		ON b.id_categoria = a.categoria_id_categoria
		WHERE titulo_livro LIKE '%".$_REQUEST["pesquisa"]."%' OR nome_categoria LIKE '%".$_REQUEST["pesquisa"]."%' OR autor_livro LIKE '%".$_REQUEST["pesquisa"]."%' ";
	}

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da categoria</th>";
		print "<th>Nome do livro</th>";
        print "<th>Autor</th>";
        print "<th>Editora</th>";
        print "<th>Edição</th>";
        print "<th>Ano</th>";
        print "<th>Local</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td>".$row->titulo_livro."</td>";
            print "<td>".$row->autor_livro."</td>";
            print "<td>".$row->editora_livro."</td>";
            print "<td>".$row->edicao_livro."</td>";
            print "<td>".$row->ano_livro."</td>";
            print "<td>".$row->localidade_livro."</td>";
			print "<td>
					<button class='btn btn-outline-danger' onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."';\"><i class=\"fas fa-edit\"></i></button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\"><i class=\"fas fa-trash-alt\"></i></button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não tem resultados</div>";
	}
?>