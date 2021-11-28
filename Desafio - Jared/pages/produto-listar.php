<h1 class="display-5">Listar Produtos</h1>
<div class="row">
	<div class="col-lg-12">
		<form action="?page=produto-listar" class="row g-2 float-end" method="POST">
			<div class="col-auto">
				<input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-warning">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</form>
	</div>
</div>
<?php
	if(empty($_REQUEST["pesquisa"])){
		$sql = "SELECT * FROM produtos";
	}else{
		$sql = "SELECT * FROM produtos WHERE nome_produto LIKE '%".$_REQUEST["pesquisa"]."%' OR marca_produto LIKE '%".$_REQUEST["pesquisa"]."%' OR lote_produto LIKE '%".$_REQUEST["pesquisa"]."%' OR validade_produto LIKE '%".$_REQUEST["pesquisa"]."%' ";
	}

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Retornou <strong>$qtd</strong> resultado(s)</p>";
		print "<div class='table-responsive'>";
		print "<table class='table table-hover'>";
		print "<caption>Consulta feita em <strong>$hoje</strong></caption>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Produto</th>";
		print "<th>Marca</th>";
        print "<th>Lote</th>";
        print "<th>Validade</th>";
		print "<th>V. Energético</th>";
		print "<th>Carboidratos</th>";
		print "<th>Proteinas</th>";
		print "<th>G.Totais</th>";
        print "<th>G.Saturadas</th>";
        print "<th>G.Trans</th>";
        print "<th>Fibras</th>";
        print "<th>Sódio</th>";
        print "<th>Peso</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_produtos."</td>";
			print "<td>".$row->nome_produto."</td>";
			print "<td>".$row->marca_produto."</td>";
			print "<td>".$row->lote_produto."</td>";
            print "<td>".ExibeData($row->validade_produto)."</td>";
			print "<td>".$row->venergetico_produto."</td>";
			print "<td>".$row->carbo_produto."</td>";
            print "<td>".$row->proteina_produto."</td>";
            print "<td>".$row->gtotais_produto."</td>";
            print "<td>".$row->gsaturadas_produto."</td>";
            print "<td>".$row->gtrans_produto."</td>";
            print "<td>".$row->fibra_produto."</td>";
            print "<td>".$row->sodio_produto."</td>";
            print "<td>".$row->peso_produto."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=produto-editar&id_produtos=".$row->id_produtos."';\">
						<i class=\"fas fa-edit\"></i>
					</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=produto-salvar&acao=excluir&id_produtos=".$row->id_produtos."';}else{flase;}\">
						<i class=\"fas fa-trash-alt\"></i>
					</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
		print "</div>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
	}
?>