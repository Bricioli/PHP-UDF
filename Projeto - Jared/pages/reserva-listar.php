<h1 class="display-6"><i class="far fa-calendar"></i> Listar Reservas</h1>
<div class="row">
	<div class="col-lg-12">
		<form action="?page=reserva-listar" class="row g-2 float-end" method="POST">
			<div class="col-auto">
				<input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar">
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
		$sql = "SELECT * FROM reserva AS a
		INNER JOIN atendente AS b ON b.id_atendente = a.atendente_id_atendente
		INNER JOIN aluno as c ON c.id_aluno = a.aluno_id_aluno
		INNER JOIN livro as d ON d.id_livro = a.livro_id_livro";
	}else{
		$sql = "SELECT * FROM reserva AS a
		INNER JOIN atendente AS b ON b.id_atendente = a.atendente_id_atendente
		INNER JOIN aluno as c ON c.id_aluno = a.aluno_id_aluno
		INNER JOIN livro as d ON d.id_livro = a.livro_id_livro
		WHERE titulo_livro LIKE '%".$_REQUEST["pesquisa"]."%' OR nome_atendente LIKE '%".$_REQUEST["pesquisa"]."%' OR nome_aluno LIKE '%".$_REQUEST["pesquisa"]."%' ";
	}

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Atendente</th>";
		print "<th>Aluno</th>";
        print "<th>Livro</th>";
        print "<th>Data eserva</th>";
        print "<th>Data entrega</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_reserva."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->nome_aluno."</td>";
            print "<td>".$row->titulo_livro."</td>";
            print "<td>".ExibeData($row->data_reserva)."</td>";
            print "<td>".ExibeData($row->data_entrega)."</td>";
			print "<td>
					<button class='btn btn-outline-danger' onclick=\"location.href='?page=reserva-editar&id_reserva=".$row->id_reserva."';\"><i class=\"fas fa-edit\"></i></button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&id_reserva=".$row->id_reserva."';}else{false;}\"><i class=\"fas fa-trash-alt\"></i></button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não tem resultados</div>";
	}
?>