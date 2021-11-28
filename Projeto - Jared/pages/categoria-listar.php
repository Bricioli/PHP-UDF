<h1 class="display-6"><i class="fas fa-stream"></i> Listar Categoria</h1>
<div class="row">
	<div class="col-lg-12">
		<form action="?page=categoria-listar" class="row g-2 float-end" method="POST">
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
		$sql = "SELECT * FROM categoria";
	}else{
		$sql = "SELECT * FROM categoria WHERE nome_categoria LIKE '%".$_REQUEST["pesquisa"]."%' ";
	}

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome da categoria</th>";
		print "<th>Ações</th>";
		print "</tr>";
		# $count = 1;
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_categoria."</td>"; # colocar $count++ caso queira o contador
			print "<td>".$row->nome_categoria."</td>";
			print "<td>
						<button class='btn btn-outline-danger' onclick=\"location.href='?page=categoria-editar&id_categoria=".$row->id_categoria."';\"><i class=\"fas fa-edit\"></i></button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=".$row->id_categoria."';}else{false;}\"><i class=\"fas fa-trash-alt\"></i></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados</div>";
	}
?>